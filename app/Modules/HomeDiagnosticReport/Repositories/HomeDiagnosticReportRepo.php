<?php

namespace App\Modules\HomeDiagnosticReport\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReportFeatureOption;

class HomeDiagnosticReportRepo extends BaseRepository
{
    protected HomeDiagnosticReport $homeDiagnosticReport;
    protected HomeDiagnosticReportFeatureOption $homeDiagnosticReportFeatureOption;
    public function __construct(HomeDiagnosticReport $homeDiagnosticReport , HomeDiagnosticReportFeatureOption $homeDiagnosticReportFeatureOption)
    {
        $this->homeDiagnosticReportFeatureOption = $homeDiagnosticReportFeatureOption;
        $this->homeDiagnosticReport = $homeDiagnosticReport;
        parent::__construct($homeDiagnosticReport);
    }

    public function store(array $data){
        // Todo : Store
    }

    public function insertIntoProjectFeatureOptionTable(array $data){

        return $this->homeDiagnosticReportFeatureOption->insert($data);
    }

    public function getHDRFromRealtorId(int $realtorId,$home_diagnostic_reportId=null){
        $pr = $this->homeDiagnosticReport->with(
            'house',
            'project.projectToroom.room',
            'project.projectToroom.feature',
            'project.projectToroom.featureOptions',
            'project.projectToroom.featureIssues',
            'project.projecttotype.featureOptions',
            'project.projecttotype.feature',
            'project.images',
            'project.customer',
            'images',
            'project.projectopportunities.professional'

        )
            ->whereHas('house' , function ($q) use ($realtorId) {
                return $q->where('realtor_id' , $realtorId);
            })
            ->when($home_diagnostic_reportId, function ($query, $reportId) {
                return $query->whereId($reportId);
            })
            ->get();

        $pr= (json_decode(json_encode($pr), true));

        $final=array();
        foreach($pr as $ou) {
            $out = [];
            if (count($ou['project'])>0) {
                foreach ($ou['project'][0]['project_toroom'] as $key => $x) {
                    $out[$x['room_id']]['room_id'] = $x['room_id'];
                    $out[$x['room_id']]['room_name'] = $x['room']['name'];
                    $out[$x['room_id']]['room_id']=$x['room_id'];
                    $out[$x['room_id']]['room_name']=$x['room']['name'];
                    $out[$x['room_id']]['flooring_type']=@$x['type']['name'];
                    $out[$x['room_id']]['status']=@$x['status'];
                    $out[$x['room_id']]['additional']=$this->getadditional(@$x['additional']);

                    $out[$x['room_id']]['feature'][] = array(
                        'feature_name' => $x['feature']['name'],
                        'feature_id' => $x['feature']['id'],
                        'bid_status'=>@$x['bid_status'],
                        'featureoption'=>$x['feature_options']?$x['feature_options']['name']:'',
                        'featureissue'=>$x['feature_issue_ids']?$this->getissues($x['feature_issue_ids']):'',
                        'inspectionNotes' => $x['inspectionNotes'],
                        'imageDesc' => $x['imageDesc'],
                        'images' => json_decode($x['images'])

                    );

                }

                if (!empty($out)) {
                    $final[] = array(
                        'house'=>$ou['house'],
                        'project_id' => $ou['project'][0]['id'],
                        'phd_price' => $ou['project'][0]['phd_price'],
                        'pre_price' => $ou['project'][0]['pre_price'],
                        'bid_status' => $ou['project'][0]['bid_status'],
                        'images' => $ou['images'],
                        'roominfo' => array_values($out),
                        'roomtypedata'=>$ou['project'][0]['projecttotype'],
                        'projectopportunities' => @$ou['project'][0]['projectopportunities'],
                        'customer' => $ou['project'][0]['customer']
                    );
                }
            }
        }
        return $final;
    }
    public function getadditional($value){

        if(is_array(json_decode($value))) {

            if(ctype_digit(implode('',json_decode($value))))

            return AdditionalValue::whereIn('id', json_decode($value))->get();
        }
    }
    public function getissues($value){

        return FeatureIssue::whereIn('id',json_decode($value))->get();
    }




}
