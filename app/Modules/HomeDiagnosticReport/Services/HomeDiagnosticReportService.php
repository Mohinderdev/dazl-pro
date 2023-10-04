<?php


namespace App\Modules\HomeDiagnosticReport\Services;

use App\Exceptions\HouseDataNotFound;
use App\Jobs\SendMAIL;
use App\Mail\SendEmail;
use App\Modules\Customer\Repositories\CustomerApiRepo;
use App\Modules\Feature\Models\Feature;
use App\Modules\Feature\Repositories\FeatureApiRepo;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Repositories\HomeDiagnosticReportRepo;
use App\Modules\House\Repositories\HouseRepo;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Models\ProjectImage;
use App\Modules\Project\Repositories\ProjectApiRepo;
use App\Modules\Room\Models\Room;
use App\ProjectToRoom;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\ProjectToType;
use App\ThirdParties\AttomData\AttomData;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Carbon\Carbon;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Request;
use \stdClass;
use DB;

class HomeDiagnosticReportService
{
    protected HomeDiagnosticReportRepo $homeDiagnosticReportRepo;
    protected HouseRepo $houseRepo;
    protected ImagesFactoryInterface $imagesFactory;
    private CustomerApiRepo $customerApiRepo;
    private AttomData $attomData;
    private ProjectApiRepo $projectApiRepo;
    private FeatureApiRepo $featureApiRepo;

    public function __construct(
        HomeDiagnosticReportRepo $homeDiagnosticReportRepo,
        ImagesFactoryInterface $imagesFactory,
        HouseRepo $houseRepo ,
        CustomerApiRepo $customerApiRepo,
        AttomData $attomData,
        ProjectApiRepo $projectApiRepo,
        FeatureApiRepo $featureApiRepo
    )
    {
        $this->houseRepo = $houseRepo;
        $this->homeDiagnosticReportRepo = $homeDiagnosticReportRepo;
        $this->imagesFactory = $imagesFactory;
        $this->customerApiRepo = $customerApiRepo;
        $this->attomData = $attomData;
        $this->projectApiRepo = $projectApiRepo;
        $this->featureApiRepo = $featureApiRepo;
    }

    public function storeHomeDiagnosticReport(array $request)
    {
        $midprice =$request['mid_price']*1000;





        if ($request['house_id'] == "") {
            $addressse = explode(' ', $request['location']);


            // $zip = $request['zip_code'];

            $addressOne = $addressse[0];
            $addressTwo = $addressse[1];
            $realtorId = auth('realtor')->id();
            $realtor = auth('realtor')->user();
            $clientBarePassword = rand(10000, 100000);
            $clientPassword = bcrypt($clientBarePassword);

            $customerData = [
                "first_name" => @$request['first_name']?$request['first_name']:'test',
                "last_name" => @$request['last_name']?$request['last_name']:'test',
                "phone_number" => '',
                "zip_code" => '123456',
                "email" => @$request['client_email']?$request['client_email']:'test@yopmail.com',
                "password" => $clientPassword,
            ];

            $customer = $this->findOrCreateCustomer(@$request['client_email']?$request['client_email']:'test@yopmail.com', $customerData);

            $customerWasRecentlyCreated = $customer->wasRecentlyCreated;


            if ($customerWasRecentlyCreated) {
                $this->sendEmailToCustomer(
                    $customer->email,
                    $clientBarePassword,
                    "{$realtor->first_name} {$realtor->last_name}",
                    "{$customer->first_name} {$customer->last_name}"
                );
            }

            $house = $this->createHouse($request, $realtorId, $customer->id);
            $roomIds = $request['room_id'];
            $house->rooms()->attach($roomIds);

        } else {
            $house = new stdClass();
            $house->id = $request['house_id'];
            $customer = new stdClass();
            $customer->id = $request['customer_id'];

        }

        $homeDiagnosticReport = $this->homeDiagnosticReportRepo->create([
            'house_id' => $house->id,
            'highest_price' => $request['highest_price'],
            'lowest_price' => $request['lowest_price'],
            'score' => $request['score'],
            'description' => @$request['phd_description']
        ]);

        if (isset($request['images'])) {

            $array = array();
            foreach ($request['images'] as $image){

                $url = $image;
                $array[] = [
                    'url' => @$url,
                    'description' =>@$request['phd_description']
                ];
            }

            $homeDiagnosticReport->images()->createMany($array);
        }

        $projectMetaData = [
            'customer_id' => $customer->id,
            'room_id' => 1,
            'start_date' => Carbon::now()->format('Y-m-d'),
            'home_diagnostic_report_id' => $homeDiagnosticReport->id,
            'feature_issue_id' => 1,
            'status' => 1,
            'feature_description' => 'test',
        ];
        $project = $this->projectApiRepo->createProject($projectMetaData);
if(@$request['rooms']) {

    $adjustment=0;
    foreach ($request['rooms'] as $roomId => $room) {
        $da = array();
        $percentage =Room::whereId($roomId)->first('percentage');
        $phdvalue =((($midprice*$percentage->percentage)/100)*15)/100;

        if(@$room['status'] == 'NEEDS DAZL'){

            $adjustment=$adjustment- $phdvalue;

        }
        if(@$room['status'] == 'DAZLING'){

            $adjustment=$adjustment+$phdvalue;
        }

        foreach ($room['feature_status'] as $keys => $fea) {
            $da['room'] = $roomId;

            $da['roomdata'][] = array(
                'features' => $keys,
                'status' => $fea,
                'featureOption' => @$room['feature_options'][$keys],
                'feature_status' => @$room['feature_status'][$keys],
                'feature_issues_images_descr' => @$room['feature_issues_images_descr'][$keys],
                'featureOptionIssues' => @$room['feature_issue'][$keys],
                'project_images' => @$room['feature_issues_images'][$keys]);
        }
        if (@$room['feature_type']) {

        foreach (@$room['feature_type'] as $keys => $fea) {
            ProjectToType::create(['room_id' => $da['room'], 'project_id' => $project->id, 'type_id' => $keys, 'sub_type_id' => $fea]);
        }
    }


        foreach ($da['roomdata'] as$key => $request) {

            ProjectToRoom::create([
                'room_id' => $da['room'],
                'project_id' => $project->id,
                'feature_id' => $request['features'],
                'feature_issue_ids' => $request['featureOptionIssues'] ? json_encode(array_map('floatval', array_values(@$request['featureOptionIssues']))) : '',
                'feature_option_id' => @$request['featureOption'],
                'imageDesc' => $request['feature_issues_images_descr']? $request['feature_issues_images_descr']:"",
                'images' => $request['project_images'] ? json_encode(array_values(@$request['project_images'])) : '',
                'inspectionNotes' =>'',
                'additional' =>@$room['additional']?json_encode($room['additional']):"",
                'status' => @$room['status']?@$room['status']:'',

            ]);

        }



    }
    $project->pre_price=$midprice;
    $project->phd_price=round($midprice+$adjustment);
    $project->save();

}

        $homeDiagnosticReport->customer = $customer->id;

        $pr =Project::where('home_diagnostic_report_id',$homeDiagnosticReport->id)->with([
            'projectToroom.room',
            'projectToroom.feature',
            'projectToroom.featureOptions',
            'projecttotype.feature',
            'projecttotype.featureOptions',
            'projectToroom.featureIssues',
            'images',
            'customer',
            'projectopportunities.professional'
        ])
            ->get();
        $pr= (json_decode(json_encode($pr), true));

        $final=array();
        foreach($pr as $ou){
            $out=[];
            foreach ($ou['project_toroom'] as $key => $x){
                $out[$x['room_id']]['room_id']=$x['room_id'];
                $out[$x['room_id']]['room_name']=$x['room']['name'];

                $additional_id=json_decode(@$x['additional']);
                    if($additional_id) {
                        foreach ($additional_id as $key => $value) {
                            $data[] = AdditionalValue::where('id', $value)->first();
                        }

                        foreach ($data as $key => $single) {

                            $final[] = $single->name;
                        }
                    }
                $out[$x['room_id']]['additional']=$final;

                $out[$x['room_id']]['feature'][]=array(
                    'feature_name'=>$x['feature']['name'],

                    'featureoption'=>$x['feature_options']?$x['feature_options']['name']:'',
                    'featureissue'=>$x['feature_issue_ids']?$this->getissues($x['feature_issue_ids']):'',
                    'inspectionNotes'=>$x['inspectionNotes'],
                    'status'=>$x['status'],
                    'featureissue_images'=>json_decode($x['images'])

                );

            }
            if(!empty($out)) {
                $final[] = array(
                    'project_id' => $ou['id'],
                    'roominfo' => array_values($out),
                    'projectopportunities' => @$ou['projectopportunities'],
                    'customer' => $ou['customer']
                );
            }
        }

        $homeDiagnosticReport->project =$final;
        return $homeDiagnosticReport;
    }
    public function getissues($value){
        return FeatureIssue::with('serviceType')->whereIn('id',json_decode($value))->get();
    }
    private function getFeatureForIssuesAndOptions($rooms): array{

        $featuresForOptions = [];
        $featuresForIssues = [];
        foreach ($rooms as $room){
            $featuresForOptions = $room['feature_options'];
            $featuresForIssues = $room['feature_issues'];
        }
        return [
            'features_for_options' => $featuresForOptions,
            'features_for_issues' => $featuresForIssues
        ];
    }

    private function uploadImagesAndSetImageDescriptionArray($images): array
    {


        $array = array();
        foreach ($images as $image){
            ;
            $url = $this->imagesFactory->uploadImage($image[0]);
            $array[] = [
                'url' => @$url,
                'description' => @$image[1]
            ];
        }
        return $array;
    }

    private function createHouse(array $data ,int $realtorID ,int $customerID){

        return $this->houseRepo->create([
            'name' => 'name',
            'year_built' => @$data['year_built'],
            'realtor_id' => $realtorID,
            'customer_id' => $customerID,
            'bathrooms' => @$data['bathrooms'],
            'bedrooms' => @$data['bedrooms'],
            'basement' => @$data['basement']?$data['basement']:"",
            'gross_size' => @$data['gross_size']?$data['gross_size']:"",
            'spaces' => @$data['spaces']?$data['spaces']:"",
            'parking_features' => @$data['parking_features']?$data['parking_features']:"",
            'property_stories' => @$data['property_stories']?$data['property_stories']:"",
            'structure_type' => @$data['structure_type'],
            'lot_size' => @$data['lot_size'],
            'location' => @$data['address'],
            'foundation_type' => @$data['foundation_type'],
            'tax_accessed_value' => @$data['tax_accessed_value'],
            'annual_tax_amount' => @$data['annual_tax_amount']?$data['annual_tax_amount']:"",
            'sale_date' => @$data['sale_date'],
            'sale_amount' => @$data['sale_amount']?$data['sale_amount']:"",
            "type" => @$data['type'],
            "address" => @$data['address']

        ]);
    }

    private function findOrCreateCustomer(string $email ,array $customerData){
        return $this->customerApiRepo->findOrCreateCustomerByEmail($email ,$customerData);
    }

    private function sendEmailToCustomer(
        string $emailAddress,
        string $password,
        string $realtorName ,
        string $customerName
    ){
        $emailData = [
            'customer_name' => $customerName,
            'realtor_name' => $realtorName,
            'password' => $password,
            'email' => $emailAddress,
        ];
        $emailView = 'emails.customer_email';
        $emailSubject = 'A House has been created for you ,By a realtor ,Dazl !';
        $emailInstance = new SendEmail(
            $emailData,
            $emailView,
            $emailSubject
        );
        SendMAIL::dispatch([$emailAddress] ,$emailInstance);
    }

    public function getHouseData(
        string $address

    )
    {


        // $addressse = $address;
        // print_r($address);
        // $addressOne = $addressse[0];
        // $addressTwo = @$addressse[1];
//        $addressOne = "$streetNumber $streetName";
//        $addressTwo = "$city $state $zipCode";
        if (DB::table('houses')->where('address', 'LIKE', '%' . $address . '%')
            ->exists()) {
            $response = DB::table('houses')->where('address', 'LIKE', '%' . $address . '%')
                ->first();

            return $response;
        } else {
//            try {
//
//                $response = $this->attomData->getAddress($address)->getBody()->getContents();
//
//                return json_decode($response);
//
//
//            } catch (BadResponseException $exception) {
//                throw new HouseDataNotFound();
//            }
            $response = DB::table('houses')->first();

            return $response;
        }
    }
    private function prepareFeatureIssuesData(Collection $features ,array $featureIssueIds,$status,$images):array{
//

        $array = [];
        $featureIssues = FeatureIssue::whereIn('id' , $featureIssueIds)
            ->with('feature')
            ->get();

        foreach ($featureIssues as  $key => $featureIssue){

            $featureProjectId  = $features->where('id' , $featureIssue->feature->id)->first()->pivot->id;

            $imagesurl=$this->imagesFactory->uploadImage(array_values($images)[$key][0]);


            $array[] = [
                'feature_project_id' =>$featureProjectId,
                'feature_issue_id' => $featureIssue->id,
                'description' =>'test',
                'feature_description'=>'test',
                'status'=>array_values($status)[$key],
                'images'=>$imagesurl

            ];
        }

        return $array;
    }

    private function prepareFeatureOptionsData($features ,array $featureOptionId):array{

        $array = [];
        $featureOptions = FeatureOption::whereIn('id' , $featureOptionId)
            ->with('feature')
            ->get();
        foreach ($featureOptions as  $featureOption){

            $featureHomeDiagnosticReportId  = $features->where('id' , $featureOption->feature->id)->first()->pivot->id;

            $array[] = [
                'feature_home_diagnostic_report_id' =>$featureHomeDiagnosticReportId,
                'feature_option_id' => $featureOption->id
            ];
        }
        return $array;
    }

    public function getPHDUsingRealtorId($home_diagnostic_reportId=null){
        $realtorId = auth('realtor')->id();
        return $this->homeDiagnosticReportRepo->getHDRFromRealtorId($realtorId,$home_diagnostic_reportId);
    }

    public function getRealtorCustomer(){
        $realtorId = auth('realtor')->id();
        return $this->homeDiagnosticReportRepo->getRealtorCustomer($realtorId);
    }



}
