<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BaseModule\Models\BaseModule;
use App\Modules\BaseModule\Requests\Admin\UpdateBaseModuleRequest;

class UpdateBaseModuleFeature extends Feature
{

    private $model;
    /**
     * EditBaseModuleFeature constructor.
     */
    public function __construct(BaseModule $BaseModule)
    {
        $this->model = $BaseModule;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateBaseModuleRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'base-modules.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
