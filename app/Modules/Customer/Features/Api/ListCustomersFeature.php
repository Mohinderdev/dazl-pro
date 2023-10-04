<?php

namespace App\Modules\Customer\Features\Api;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Transformers\Api\CustomerCollection;
use Illuminate\Http\Request;

class ListCustomersFeature extends Feature
{

    private $model;

    /**
     * ListCustomersFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Customer();
    }

    /**
     *
     * @param Request $request
     * @return CustomeryCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new CustomerCollection($rows);
    }

}
