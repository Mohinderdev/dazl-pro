<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Feature\Models\Feature as FeatureModel;
use App\Modules\Feature\Requests\Admin\UpdateFeatureRequest;

class UpdateFeatureFeature extends Feature
{

    private FeatureModel $model;
    /**
     * EditFeatureFeature constructor.
     */
    public function __construct(FeatureModel $Feature)
    {
        $this->model = $Feature;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateFeatureRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'features.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
