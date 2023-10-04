<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\BaseModule\Models\BaseModule;

class EditBaseModuleFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'base-modules::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
