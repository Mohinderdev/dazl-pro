<?php

namespace App\Modules\Customer\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Customer\Models\Customer;

class EditCustomerFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'customers::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
