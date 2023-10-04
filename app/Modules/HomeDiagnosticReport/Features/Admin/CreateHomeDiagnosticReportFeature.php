<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\House\Models\House;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateHomeDiagnosticReportFeature extends Feature
{

    /**
     * CreateHomeDiagnosticReportFeature constructor.
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
        $realtors = $this->getAllRealtors();
        $customers = $this->getAllCustomers();
        $houses = $this->getAllHouses();

        return $this->run(RespondWithView::class, [
            'view' => 'home-diagnostic-reports::create' ,
            'data' => [
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
