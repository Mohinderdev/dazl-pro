<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BaseModule\Models\BaseModule;

class DeleteBaseModuleFeature extends Feature
{

    private $model;
    /**
     * DeleteBaseModuleFeature constructor.
     */
    public function __construct(BaseModule $BaseModule)
    {
        $this->model = $BaseModule;
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
            'route' => 'base-modules.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
