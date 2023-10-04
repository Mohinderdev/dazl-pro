<?php


namespace App\Modules\Project\Services;

use App\Jobs\SendMAIL;
use App\Mail\ProjectMail;
use App\Mail\SendEmail;
use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Project\Repositories\ProjectApiRepo;
use App\Modules\Realtor\Models\Realtor;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use App\ProjectToRoom;

class ProjectService
{
    protected ProjectApiRepo $projectApiRepo;
    protected ImagesFactoryInterface $imagesFactory;
    public function __construct(ProjectApiRepo $projectApiRepo ,ImagesFactoryInterface $imagesFactory){
        $this->projectApiRepo = $projectApiRepo;
        $this->imagesFactory = $imagesFactory;
    }

    public function storeProject($requests){

//        $images = $this->uploadImagesAndSetImageDescriptionArray($requests['data'][0]['images']);
// get the `UploadedFile` object
 if(@$requests[0]['customer_email']){
   $customer =Customer::create(['first_name'=>'','last_name'=>'','phone_number'=>'','zip_code'=>'1223','password'=>'','email'=>$requests[0]['customer_email']]);
    $realtor =Realtor::find(auth('realtor')->id());
     $requests[0]['customer_id'] =@$customer->id;

     $data = [
         'email' => $requests[0]['customer_email'],
         'realtor_name' =>$realtor->first_name,
     ];
\Mail::to($requests[0]['customer_email'])->send(new ProjectMail($data));
 }

        $projectMetaData = [
            'customer_id' => auth('customer')->id()?auth('customer')->id(): @$requests[0]['realtor_id'],
            'realtor_id'=> @$requests[0]['realtor_id'],
            'start_date' => Carbon::now()->format('Y-m-d'),
            'room_id' => '1',
//        'description' => $request['description']
        ];
        $project = $this->projectApiRepo->createProject($projectMetaData);
foreach ($requests as $request ){

    ProjectToRoom::create([
        'room_id' => $request['roomId'],
        'project_id'=>$project->id,
        'feature_id'=>$request['features'],
        'feature_issue_ids'=>$request['featureOptionIssues']?json_encode($request['featureOptionIssues']):'',
        'feature_option_id'=>@$request['featureOption'],
        'imageDesc'=>'test',
        'images'=>json_encode($request['images']),
        'inspectionNotes'=>@$request['inspectionNotes']?@$request['inspectionNotes']:'',
        'status'=>'',

    ]);

//    $images = $this->uploadImagesAndSetImageDescriptionArray($request['images']);
//    $project->images()->createMany($images);



//    $project->features()->attach($request['features']);
//
//    $featureIssuesData = $this->prepareFeatureIssuesData($project->features ,$request['featureOptionIssues'],$request['features']);
//    $featureOptionData = $this->prepareFeatureOptionData($project->features ,$request['featureOption'],$request['features']);
//    $this->projectApiRepo->insertIntoProjectFeatureIssueTable($featureIssuesData);
//    $this->projectApiRepo->insertIntoProjectFeatureOptionTable($featureOptionData);

//    $images = $this->uploadImagesAndSetImageDescriptionArray($request['images']);
//    $project->images()->createMany($images);


}

        return $project;

    }

    private function uploadImagesAndSetImageDescriptionArray($images ): array
    {

        $array = [];
        foreach ($images as $image){
            $url = $this->imagesFactory->uploadImage($image);
            $array[] = [
                'url' => $url,
//                'description' => $image[1]
            ];
        }
        return $array;
    }

    private function prepareFeatureIssuesData(Collection $features , $featureIssues,$fetures):array
    {

//        $array = [];
//        foreach ($featureIssues as $featureId =>  $featureIssue){
            $featureProjectId  = $features->where('id' , $fetures)->first()->pivot->id;
            $array = [
              'feature_project_id' =>$featureProjectId,
              'feature_issue_id' => $featureIssues,
              'description' => 'Hello Test'
            ];

        return $array;
    }
    private function prepareFeatureOptionData(Collection $features , $featureOption ,$fetures):array
    {

        $array = [];
//        foreach ($featureIssues as $featureId =>  $featureIssue){

            $featureProjectId  = $features->where('id' , $fetures)->first()->pivot->id;
//            print_r($featureProjectId);
            $array[] = [
              'feature_project_id' =>$featureProjectId,
              'feature_option_id' => $featureOption,
//              'description' => @$featureIssue[1]
            ];
//        }


        return $array;
    }

    public function getProject(int $id){
        return $this->projectApiRepo->getProject($id);
    }

    public function updateProjectStatus(int $id,string $status){
        return $this->projectApiRepo->find($id)->update([
            'status' => $status
        ]);
    }

    public function getProjectsForCustomer(int $customerId){
        return $this->projectApiRepo->getProjectsWithCustomer($customerId);
    }

    public function deleteProject(int $id){
        $this->projectApiRepo->deleteProject($id);
    }

    public function updateProjectDetail($request ,$id){
        return  ProjectToRoom::where(['project_id'=>$id,'feature_id'=>$request->feature_id])->update(['inspectionNotes'=>$request->inspectionNotes,"images"=>json_encode($request->images)]);
    }
}
