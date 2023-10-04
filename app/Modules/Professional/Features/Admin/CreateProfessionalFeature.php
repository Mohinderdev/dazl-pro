<?php

namespace App\Modules\Professional\Features\Admin;

use App\Core\Feature;
use App\Modules\Company\Models\Company;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateProfessionalFeature extends Feature
{

    /**
     * CreateProfessionalFeature constructor.
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
        $serviceTypes = ServiceType::all();
        $companies = Company::all();
        return $this->run(RespondWithView::class, [
            'view' => 'professionals::create',
            'data' => [
                'serviceTypes' => $serviceTypes,
                'companies' => $companies
            ]
        ]);
    }

}
