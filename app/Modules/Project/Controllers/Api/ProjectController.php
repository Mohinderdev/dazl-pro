<?php
namespace App\Modules\Project\Controllers\Api;

use App\Enums\ProjectStatusEnum;
use App\Http\Controllers\Controller;
use App\Jobs\SendMAIL;
use App\Jobs\SendSMS;
use App\Mail\SendEmail;
use App\Modules\Customer\Models\Customer;
use App\Modules\Professional\Services\ProfessionalService;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Models\ProjectImage;
use App\Modules\Project\Requests\Api\CreateProjectRequest;
use App\Modules\Project\Requests\Api\UpdateProjectStatusAndSendEmailToProsRequest;
use App\Modules\Project\Services\ProjectService;
use App\Modules\ProjectOpportunity\Services\ProjectOpportunityService;
use App\ProjectToRoom;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use stdClass;
class ProjectController extends Controller
{
    private ProjectService $projectService;
    private ProfessionalService $professionalService;
    private ProjectOpportunityService $projectOpportunityService;

    public function __construct(
        ProjectService $projectService,
        ProfessionalService $professionalService,
        ProjectOpportunityService $projectOpportunityService
    )
    {
        $this->projectService = $projectService;
        $this->professionalService = $professionalService;
        $this->projectOpportunityService = $projectOpportunityService;
    }

    public function projectImages(Request $request ,ImagesFactoryInterface $imagesFactory){
        $request = $request->all();
        if(isset($request['projectID'])){

            $imagesurl =array();

            foreach ($request['images'] as $key => $image){

                $imagesurl[] = $imagesFactory->uploadImage($image);


            }


            foreach ($imagesurl as $image){
                ProjectImage::create([
                    'url'=>$image,
                    'project_id'=>$request['projectID'],
                    'description'=>'test'
                ]);
            }
            $project = new stdClass();
            $project->id =$request['projectID'];

        }
        return [
            'message' => 'project stored',
            'project_id' => $project->id
        ];

    }

    public function getimage(Request $request ,ImagesFactoryInterface $imagesFactory){
        $validator = Validator::make($request->all(), [
            'image' => ['required'],
        ]);
        if ($validator->fails()) {
            $message = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($message,500);
        }
        return response()->json([
            'image' =>$imagesFactory->uploadImage($request->image)
        ]);

    }
    public function list(){
        $customer =Customer::all();

        return response()->json([
            'customer' =>$customer
        ]);
    }

    public function store(Request $request ,ImagesFactoryInterface $imagesFactory){

        $request = $request->all();

        if(isset($request['projectID'])){

            $imagesurl =array();

            foreach ($request as $key => $image){

                if($key != 'projectID'){

                    $imagesurl[] = $imagesFactory->uploadImage($image);

                }
            }


            foreach ($imagesurl as $image){
                ProjectImage::create([
                    'url'=>$image,
                    'project_id'=>$request['projectID'],
                    'description'=>'test'
                ]);
            }
            $project = new stdClass();
            $project->id =$request['projectID'];

        }
        else{
            $project = $this->projectService->storeProject($request);
        }


        return [
            'message' => 'project stored',
            'project_id' => $project->id
        ];
    }

    public function show(int $id): \Illuminate\Http\JsonResponse
    {
        $project = $this->projectService->getProject($id);
        return response()->json([
            'data' => $project
        ]);
    }

    public function updateProjectStatusAndSendSmsToPros(int $id , UpdateProjectStatusAndSendEmailToProsRequest $updateProjectStatusAndSendEmailToProsRequest): \Illuminate\Http\JsonResponse
    {

        $this->projectService->updateProjectStatus($id ,ProjectStatusEnum::PUBLISH);
        $professionals = $this->professionalService->getProsByServiceId(
            $updateProjectStatusAndSendEmailToProsRequest->service_type_ids
        );
        $professionalIds = $professionals->pluck('id')->toArray();
        $professionalsPhoneNumbers = $professionals->pluck('phone_number')->toArray();
        $professionalEmails = $professionals->pluck('email')->toArray();
        $customerId = auth()->id();

        $this->projectOpportunityService->saveBulkOfProjectOpp($id ,$customerId ,$professionalIds);
        if(sizeof($professionalsPhoneNumbers)){
            $smsMessage = 'There\'s a new project opportunity from DAZL ! '.env("PROJECT_OPPORTUNITY_LINK") ;
            $numberOfPhoneNumbers = sizeof($professionalsPhoneNumbers);
            $emailData = ['link' => env("PROJECT_OPPORTUNITY_LINK")];
            $emailView = 'emails.project_opportunity';
            $emailSubject = 'New Project opportunity from DAZL !';
            $emailInstance = new SendEmail(
                $emailData,
                $emailView,
                $emailSubject
            );
            SendMAIL::dispatch($professionalEmails ,$emailInstance);
            SendSMS::dispatch($smsMessage, $professionalsPhoneNumbers);

            return response()->json([
                'message' => "project updated and message got sent to {$numberOfPhoneNumbers} professional(s)"
            ]);

        }else{
            return response()->json([
                "message" => "project updated but we informed 0 ppl"
            ]);
        }
    }

    public function getProjectsForCustomer(){

        if(auth('customer')->id()){
            $id = auth('customer')->id();
        }
        if(auth('realtor')->id()){
            $id = auth('realtor')->id();
        }

        $projects = $this->projectService->getProjectsForCustomer($id);
        return [
            'data' => $projects
        ];
    }

    public function delete(int $id){
        $this->projectService->deleteProject($id);
        response()->json([
            'status' => 'success'
        ]);
    }
    public function statusUpdate(Request $request ,int $id){
        ProjectToRoom::where('project_id',$id)->where('feature_id',$request->feature_id)->where('room_id',$request->room_id)->update(['bid_status'=>$request->bid_status]);
      return  response()->json([
            'status' => 'success'
        ]);
    }
    public function updatePhpreport(Request $request,$id){
     
                $report= $this->projectService->updateProjectDetail($request,$id);
        if($report){
            return response()->json([
                'message' => "Details Updated Successfully"
            ]);

        }else{
            return response()->json([
                'message' => "Something went wrong"
            ],500);
        }

    }
}
