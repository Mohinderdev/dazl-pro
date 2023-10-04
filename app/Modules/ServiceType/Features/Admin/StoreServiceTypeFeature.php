<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ServiceType\Models\ServiceType;
use App\Modules\ServiceType\Requests\Admin\CreateServiceTypeRequest;

class StoreServiceTypeFeature extends Feature
{

    private $model;
    /**
     * StoreServiceTypeFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ServiceType;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateServiceTypeRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'service-types.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
