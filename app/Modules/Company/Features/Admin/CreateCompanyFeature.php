<?php

namespace App\Modules\Company\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateCompanyFeature extends Feature
{

    /**
     * CreateCompanyFeature constructor.
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
            'view' => 'companies::create'
        ]);
    }

}
