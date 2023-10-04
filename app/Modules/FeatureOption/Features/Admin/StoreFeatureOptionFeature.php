<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Score;
use App\Modules\FeatureOption\Requests\Admin\CreateFeatureOptionRequest;

class StoreFeatureOptionFeature extends Feature
{

    private $model;
    /**
     * StoreFeatureOptionFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureOption;
        $this->issuemodel = new FeatureIssue;
        $this->scoremodel = new Score;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateFeatureOptionRequest $request)
    {



       $feature_option_id= $this->model->create($request->all());
       foreach($request->textinput as $key => $issues){
           $this->issuemodel->create(['name'=>$issues,'feature_option_id'=>$feature_option_id->id,'feature_id'=>$request->feature_id,'service_type_id'=>$request->service_type_id[$key]]);

       }
            if($request->need_dazl != ''){
                $this->scoremodel->create(['score'=>$request->need_dazl,'feature_status_id'=>1,'feature_option_id'=>$feature_option_id->id,]);
            }
            else{
                $this->scoremodel->create(['score'=>0,'feature_status_id'=>1,'feature_option_id'=>$feature_option_id->id,]);

            }
            if($request->market_dazl != ''){
        $this->scoremodel->create(['score'=>$request->market_dazl,'feature_status_id'=>2,'feature_option_id'=>$feature_option_id->id,]);

            }else{
                $this->scoremodel->create(['score'=>0,'feature_status_id'=>2,'feature_option_id'=>$feature_option_id->id,]);

            }
            if($request->dazzling != ''){
        $this->scoremodel->create(['score'=>$request->dazzling,'feature_status_id'=>3,'feature_option_id'=>$feature_option_id->id,]);

            }
            else{
                $this->scoremodel->create(['score'=>0,'feature_status_id'=>3,'feature_option_id'=>$feature_option_id->id,]);

            }

        return $this->run(RespondWithRoute::class, [
            'route' => 'feature-options.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
