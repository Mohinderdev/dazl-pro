<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use App\Score;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureOption\Requests\Admin\UpdateFeatureOptionRequest;
use App\Modules\FeatureIssue\Models\FeatureIssue;
class UpdateFeatureOptionFeature extends Feature
{

    private $model;
    /**
     * EditFeatureOptionFeature constructor.
     */
    public function __construct(FeatureOption $FeatureOption)
    {
        $this->model = $FeatureOption;
        $this->id = $FeatureOption->id;
        $this->issuemodel = new FeatureIssue;
        $this->scoremodel = new Score;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateFeatureOptionRequest $request)
    {
//        print_r($this->id);die('here');
        $this->model->update($request->all());
//        $this->issuemodel->where('feature_option_id',$this->id)->delete();
        if($request->oldtextinputtext != '') {
            foreach ($request->oldtextinputtext as $key => $issues) {
                if ($issues) {
                    $this->issuemodel->where('id', $request->oldtextinputid[$key])->update(['name' => $issues, 'feature_option_id' => $this->id, 'feature_id' => $request->feature_id, 'service_type_id' => $request->service_type_id[$key]]);
                }


            }
        }
        foreach($request->textinput as $key => $issues){
            if($issues) {
                $this->issuemodel->create(['name' => $issues, 'feature_option_id' => $this->id, 'feature_id' => $request->feature_id, 'service_type_id' => $request->service_type_id[$key]]);
            }

        }

        if($request->need_dazl != ''){
            $this->scoremodel->where('id',$request->need_dazl_id)->update(['score'=>$request->need_dazl,'feature_status_id'=>1,'feature_option_id'=> $this->id,]);
        }else{
            $this->scoremodel->create(['score'=>0,'feature_status_id'=>1,'feature_option_id'=>$this->id,]);

        }
        if($request->market_dazl != ''){
            $this->scoremodel->where('id',$request->market_dazl_id)->update(['score'=>$request->market_dazl,'feature_status_id'=>2,'feature_option_id'=> $this->id,]);

        }else{
            $this->scoremodel->create(['score'=>0,'feature_status_id'=>2,'feature_option_id'=>$this->id,]);

        }
        if($request->dazzling != ''){
            $this->scoremodel->where('id',$request->dazzling_id)->update(['score'=>$request->dazzling,'feature_status_id'=>3,'feature_option_id'=> $this->id,]);

        }else{
            $this->scoremodel->create(['score'=>0,'feature_status_id'=>3,'feature_option_id'=>$this->id,]);

        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'feature-options.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
