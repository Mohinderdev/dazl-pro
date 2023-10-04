<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use App\Score;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureOption\Models\FeatureOption;

class DeleteFeatureOptionFeature extends Feature
{

    private $model;
    /**
     * DeleteFeatureOptionFeature constructor.
     */
    public function __construct(FeatureOption $FeatureOption)
    {
        $this->model = $FeatureOption;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        Score::where('feature_option_id',$this->model->id)->delete();
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'feature-options.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
