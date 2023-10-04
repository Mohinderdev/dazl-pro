<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BaseModule\Models\BaseModule;
use App\Modules\BaseModule\Requests\Admin\CreateBaseModuleRequest;

class StoreBaseModuleFeature extends Feature
{

    private $model;
    /**
     * StoreBaseModuleFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BaseModule;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateBaseModuleRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'base-modules.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
