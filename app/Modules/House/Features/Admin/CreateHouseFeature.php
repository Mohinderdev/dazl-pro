<?php

namespace App\Modules\House\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateHouseFeature extends Feature
{

    /**
     * CreateHouseFeature constructor.
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
        return $this->run(RespondWithView::class, [
            'view' => 'houses::create',
            'data' => [
                'realtors' => $realtors,
                'customers' => $customers,
            ]
        ]);
    }

    private function getAllRealtors(){
        return Realtor::all();
    }

    private function getAllCustomers(){
        return Customer::all();
    }

}
