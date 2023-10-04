<?php

namespace App\Modules\Customer\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Customer\Models\Customer;

class DeleteCustomerFeature extends Feature
{

    private $model;
    /**
     * DeleteCustomerFeature constructor.
     */
    public function __construct(Customer $Customer)
    {
        $this->model = $Customer;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'customers.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
