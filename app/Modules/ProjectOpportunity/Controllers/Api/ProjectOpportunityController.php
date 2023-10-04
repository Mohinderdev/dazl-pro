<?php
namespace App\Modules\ProjectOpportunity\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectOpportunity\Features\Api\ListProjectOpportunitiesFeature;
use App\Modules\ProjectOpportunity\Requests\Api\UpdateProjectOpportunityRequest;
use App\Modules\ProjectOpportunity\Services\ProjectOpportunityService;
use Illuminate\Http\Request;
use Auth;

class ProjectOpportunityController extends Controller
{
    private ProjectOpportunityService $projectOpportunityService;

    public function __construct(ProjectOpportunityService $projectOpportunityService)
    {
        $this->projectOpportunityService = $projectOpportunityService;
    }

    public function getProjectOpportunitiesForPros($page){
        $professionalId = auth()->id();
        $projectOpp = $this->projectOpportunityService->getProjectOppByProId($professionalId,$page);
        return [
            'data' => $projectOpp
        ];
    }

    public function create(Request $request){

        if(ProjectOpportunity::where('project_id',$request->project_id)->where('professional_id',Auth::user()->id)->exists()){
           $pro = ProjectOpportunity::where('project_id',$request->project_id)->where('professional_id',Auth::user()->id)->first();
            $data =$this->projectOpportunityService->updateProject(
                $pro->id ,
                [
                    'message' => $request->message,
                    'isInterested' => $request->isInterested,
                    'interest_date' => $request->interest_date
                ]
            );

            return [
                'message' => 'project opportunity updated'
            ];
        }else {
            $this->projectOpportunityService->createProject($request->all());
        }
        return [
            'message' => 'project opportunity Completed'
        ];
    }



}
