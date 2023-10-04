<?php

namespace App\Modules\Customer\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Requests\Admin\UpdateCustomerRequest;

class UpdateCustomerFeature extends Feature
{

    private $model;
    /**
     * EditCustomerFeature constructor.
     */
    public function __construct(Customer $Customer)
    {
        $this->model = $Customer;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateCustomerRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'customers.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
