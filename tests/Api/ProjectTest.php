<?php

namespace Tests\Api;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Room\Models\Room;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
class ProjectTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $customer = factory(Customer::class)->create();
        $this->be($customer,'customer');
    }

    /** @test */

    public function it_should_store_project(){
        $requestData = $this->prepareCreateProjectRequest();
        $response = $this->json('POST' , '/api/projects', [
            'room_id' => $requestData['room_id'],
            'features' => $requestData['features'],
            'feature_issues' =>$requestData['feature_issues'] ,
            'feature_issues_description' => $requestData['feature_issues_description'],
            'images_description' => $requestData['images_description'],
            'pdf_description' => $requestData['pdf_description'],
            'images' => $requestData['images'],
            'pdf_file' => $requestData['pdf']
        ]);
        $result = $response->json();
        dd($result);
    }

    /** @test */

    public function it_should_get_projects_for_customer(){

    }

    private function prepareCreateProjectRequest(): array
    {
        $room = factory(Room::class)->create();
        $features = factory(Feature::class , 2)->create();
        $featureIssue = factory(FeatureIssue::class ,2)->create([
            'feature_id' => $features[0]->id
        ]);
        $file = UploadedFile::fake()->create('dd.jpeg', 100);
        $pdfFile = UploadedFile::fake()->create('dd.pdf', 100);

        return [
            'room_id'=> $room->id,
            'features'=> $features->pluck('id')->toArray(),
            'feature_issues'=> $featureIssue->pluck('id')->toArray(),
            'feature_issues_description'=> [$this->faker->text ,$this->faker->text],
            'images_description'=>[$this->faker->text , $this->faker->text],
            'pdf_description'=>$this->faker->text,
            'images'=>[
                $file,$file
            ],
            'pdf' => $pdfFile
        ];
    }
}
