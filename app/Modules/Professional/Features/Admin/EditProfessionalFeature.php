<?php

namespace App\Modules\Professional\Features\Admin;

use App\Core\Feature;
use App\Modules\Company\Models\Company;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Professional\Models\Professional;
use App\Modules\ServiceType\Models\ServiceType;
class EditProfessionalFeature extends Feature
{

    private $model;
    /**
     * EditProfessionalFeature constructor.
     */
    public function __construct(Professional $Professional)
    {
        $this->model = $Professional;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $serviceTypes = ServiceType::all();
        $companies = Company::all();
        return $this->run(RespondWithView::class, [
            'view' => 'professionals::edit',
            'data' => [
                'row' => $this->model ,
                'serviceTypes' => $serviceTypes,
                'companies' => $companies
            ]
        ]);
    }
}
