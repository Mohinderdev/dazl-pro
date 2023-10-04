<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature as CoreFeature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Feature\Models\Feature;
use App\Modules\Feature\Requests\Admin\CreateFeatureRequest;

class StoreFeatureFeature extends CoreFeature
{

    private $model;
    /**
     * StoreFeatureFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Feature;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateFeatureRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'features.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
