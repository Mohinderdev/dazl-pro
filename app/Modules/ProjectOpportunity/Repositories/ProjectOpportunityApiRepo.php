<?php

namespace App\Modules\ProjectOpportunity\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Professional\Models\ProfessionlServiceType;
use App\Modules\Project\Models\Project;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use Carbon\Carbon;
use Auth;
class ProjectOpportunityApiRepo extends BaseRepository
{
    protected ProjectOpportunity $projectOpportunity;

    public function __construct(ProjectOpportunity $projectOpportunity)
    {
        $this->projectOpportunity = $projectOpportunity;
        parent::__construct($projectOpportunity);
    }

    public function saveProjectOpportunities(array $data){
        return $this->projectOpportunity->insert($data);
    }

    public function getProjectOppByProId(int $proID,$page=null){
        if($page == "all"){
            $prof = ProfessionlServiceType::select('service_type_id')->where('professional_id', Auth::user()->id)->get();

            $newArray = array();
            foreach ($prof as $pr) {
                $newArray[] = $pr->service_type_id;

            }

            $pr = Project::with([
                'projectToroom.room',
                'projectToroom.feature',
                'projectToroom.featureOptions',
                'projectToroom.featureIssues',
                'customer',
                'projectopportunities'
            ])->has('projectToroom')->get();
        }else {
            $itemperpage = 10;
            $offset = ($page - 1) * $itemperpage;
            $prof = ProfessionlServiceType::select('service_type_id')->where('professional_id', Auth::user()->id)->get();

            $newArray = array();
            foreach ($prof as $pr) {
                $newArray[] = $pr->service_type_id;

            }

            $pr = Project::with([
                'projectToroom.room',
                'projectToroom.feature',
                'projectToroom.featureOptions',
                'projectToroom.featureIssues',
                'customer',
                'projectopportunities'
            ])->has('projectToroom')->offset($offset)->limit($itemperpage)
                ->get();
            $totalProjectsCount = Project::has('projectToroom')->count();
            $totalPages = ceil($totalProjectsCount / $itemperpage);
        }
        $pr= (json_decode(json_encode($pr), true));

        $final=array();
        foreach($pr as $ou){
            $out=[];
            foreach ($ou['project_toroom'] as $key => $x){
                $out[$x['room_id']]['room_id']=$x['room_id'];
                $out[$x['room_id']]['room_name']=$x['room']['name'];

                $out[$x['room_id']]['feature'][]=array(
                    'feature_name'=>$x['feature']['name'],

                    'featureoption'=>$x['feature_options']?$x['feature_options']['name']:'',
                    'featureissue'=>$x['feature_issue_ids']?$this->getissues($x['feature_issue_ids']):'',
                    'inspectionNotes'=>$x['inspectionNotes'],
                    'status'=>$x['status'],
                    'images'=>json_decode($x['images'])

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

        $projecop =ProjectOpportunity::where('professional_id',Auth::user()->id)->get();
        return   array("final"=>$final,'pro'=>$projecop,'pages'=>@$totalPages);


    }
    public function getissues($value){
        return FeatureIssue::with('serviceType')->whereIn('id',json_decode($value))->get();
    }
}
