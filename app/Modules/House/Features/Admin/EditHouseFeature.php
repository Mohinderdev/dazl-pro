<?php

namespace App\Modules\House\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\House\Models\House;

class EditHouseFeature extends Feature
{

    private $model;
    /**
     * EditHouseFeature constructor.
     */
    public function __construct(House $House)
    {
        $this->model = $House;
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
            'view' => 'houses::edit',
            'data' => ['row' => $this->model , 'realtors' => $realtors , 'customers' => $customers]
        ]);
    }

    private function getAllRealtors(){
        return Realtor::all();
    }

    private function getAllCustomers(){
        return Customer::all();
    }

}
