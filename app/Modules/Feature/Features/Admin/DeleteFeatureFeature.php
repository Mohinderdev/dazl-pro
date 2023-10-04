<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature as CoreFeature;
use App\Modules\Room\Models\Room_To_Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Feature\Models\Feature;

class DeleteFeatureFeature extends CoreFeature
{

    private $model;
    /**
     * DeleteFeatureFeature constructor.
     */
    public function __construct(Feature $Feature)
    {
        $this->model = $Feature;
        $this->id = $Feature->id;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        Room_To_Feature::where('feature_id',$this->id)->delete();
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'features.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
