<?php

namespace App\Modules\Project\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Project\Models\FeatureProject;
use App\Modules\Project\Models\FeatureProjectFeatureIssue;
use App\Modules\Project\Models\FeatureProjectFeatureoption;
use App\Modules\Project\Models\Project;

class ProjectApiRepo extends BaseRepository
{
    protected Project $project;
    protected FeatureProjectFeatureIssue $featureProjectFeatureIssue;
    protected FeatureProjectFeatureoption $featureProjectFeatureoption;
    protected FeatureProject $featureProject;
    public function __construct(
        Project $project ,
        FeatureProjectFeatureIssue $featureProjectFeatureIssue,
        FeatureProjectFeatureoption $featureProjectFeatureoption,
        FeatureProject $featureProject
    ){
        $this->featureProjectFeatureIssue = $featureProjectFeatureIssue;
        $this->featureProjectFeatureoption = $featureProjectFeatureoption;
        $this->project = $project;
        $this->featureProject = $featureProject;
        parent::__construct($project);
    }

    public function createProject(array $data){

        return $this->create($data);
    }

    public function insertIntoProjectFeatureIssueTable(array $data){

        return $this->featureProjectFeatureIssue->insert($data);
    }
    public function insertIntoProjectFeatureOptionTable(array $data){

        return $this->featureProjectFeatureoption->insert($data);
    }

    public function getProject(int $id){
        return $this->project
            ->where('id',$id)
            ->with([
                'featureIssues.featureIssue',
                'featureIssues',
                'featureIssues.featureProject.feature',
                'images' ,
                'room',

            ])
            ->first();
    }

    public function getProjectsWithCustomer(int $customerID){
        if(auth('customer')->id()) {


            $pr = $this->project
                ->where('projects.customer_id', $customerID)->with([
                    'projectToroom.room',
                    'projectToroom.feature',
                    'projectToroom.featureOptions',
                    'projectToroom.featureIssues',

                    'projectopportunities.professional'
                ])
                ->get();
        }
        else{
            $pr = $this->project
                ->where('projects.realtor_id', auth('realtor')->id())->with([
                    'projectToroom.room',
                    'projectToroom.feature',
                    'projectToroom.featureOptions',
//                    'projectToroom.featureIssues',
                    'customer',
                'projectopportunities.professional'
                ])
                ->get();

        }

        $pr= (json_decode(json_encode($pr), true));

        $final=array();
        foreach($pr as $ou){
            $out=[];
            if(!empty($ou['project_toroom'])) {
                foreach ($ou['project_toroom'] as $key => $x) {
                    $out[$x['room_id']]['room_id'] = $x['room_id'];
                    $out[$x['room_id']]['room_name'] = $x['room']['name'];

                    $out[$x['room_id']]['feature'][] = array(
                        'feature_name' => $x['feature']['name'],
                        'feature_id' => $x['feature']['id'],
                        'featureoption'=>$x['feature_options']?$x['feature_options']['name']:'',
                        'featureissue'=>$x['feature_issue_ids']?$this->getissues($x['feature_issue_ids']):'',
                        'inspectionNotes' => $x['inspectionNotes'],
                        'status' => @$x['status'],
                        'images' => json_decode($x['images'])

                    );


                }
            }
           $final[] =array(
               'project_id'=>$ou['id'],
               'projectOpertunity'=>@$ou['projectopportunities'],
               'customer'=>@$ou['customer'],
                'roominfo'=>array_values($out),

            );

        }

        return $final;

    }
    public function getissues($value){
        return FeatureIssue::whereIn('id',json_decode($value))->get();
    }


    public function deleteProject(int $projectId){
        $project = $this->find($projectId);
        $project->images()->delete();
        $project->projectOpportunities()->delete();
        $featureProjectIds = $this->featureProject->where('project_id' ,$projectId)->get()->pluck('id');
        $this->featureProjectFeatureIssue->whereIn('feature_project_id' ,$featureProjectIds)->delete();
        $this->featureProject->where('project_id' ,$projectId)->delete();
        $project->delete();
    }
}
