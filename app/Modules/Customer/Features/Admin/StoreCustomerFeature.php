<?php

namespace App\Modules\Customer\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Requests\Admin\CreateCustomerRequest;

class StoreCustomerFeature extends Feature
{

    private $model;
    /**
     * StoreCustomerFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Customer;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateCustomerRequest $request)
    {
        $this->model->create($request->all() + [
            'password' => bcrypt(uniqid())
        ]);

        return $this->run(RespondWithRoute::class, [
            'route' => 'customers.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
