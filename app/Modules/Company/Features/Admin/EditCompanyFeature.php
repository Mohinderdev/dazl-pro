<?php

namespace App\Modules\Company\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Company\Models\Company;

class EditCompanyFeature extends Feature
{

    private $model;
    /**
     * EditCompanyFeature constructor.
     */
    public function __construct(Company $Company)
    {
        $this->model = $Company;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'companies::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
