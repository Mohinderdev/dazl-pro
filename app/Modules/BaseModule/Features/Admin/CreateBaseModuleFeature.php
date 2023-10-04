<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateBaseModuleFeature extends Feature
{

    /**
     * CreateBaseModuleFeature constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {

        return $this->run(RespondWithView::class, [
            'view' => 'base-modules::create'
        ]);
    }

}
