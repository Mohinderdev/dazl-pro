<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ServiceType\Models\ServiceType;
use App\Modules\ServiceType\Requests\Admin\UpdateServiceTypeRequest;

class UpdateServiceTypeFeature extends Feature
{

    private $model;
    /**
     * EditServiceTypeFeature constructor.
     */
    public function __construct(ServiceType $ServiceType)
    {
        $this->model = $ServiceType;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateServiceTypeRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'service-types.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
