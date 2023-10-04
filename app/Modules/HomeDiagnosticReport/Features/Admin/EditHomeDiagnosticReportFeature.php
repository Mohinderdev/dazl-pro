<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\House\Models\House;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;

class EditHomeDiagnosticReportFeature extends Feature
{

    private $model;
    /**
     * EditHomeDiagnosticReportFeature constructor.
     */
    public function __construct(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        $this->model = $HomeDiagnosticReport;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $realtors = $this->getAllRealtors();
        $customers = $this->getAllCustomers();
        $houses = $this->getAllHouses();
        return $this->run(RespondWithView::class, [
            'view' => 'home-diagnostic-reports::edit',
            'data' => [
                'row' => $this->model,
                'realtors' => $realtors ,
                'customers' => $customers ,
                'houses' => $houses
            ]
        ]);
    }

    public function getAllRealtors(){
        return Realtor::all();
    }

    public function getAllCustomers(){
        return Customer::all();
    }

    public function getAllHouses(){
        return House::all();
    }

}
