<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ServiceType\Models\ServiceType;

class DeleteServiceTypeFeature extends Feature
{

    private $model;
    /**
     * DeleteServiceTypeFeature constructor.
     */
    public function __construct(ServiceType $ServiceType)
    {
        $this->model = $ServiceType;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'service-types.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
