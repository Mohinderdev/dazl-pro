<?php

namespace App\Modules\Payment\Features\Api;

use App\Core\Feature;
use App\Modules\Payment\Models\Payment;
use App\Modules\Payment\Transformers\Api\PaymentCollection;
use Illuminate\Http\Request;

class ListPaymentsFeature extends Feature
{

    private $model;

    /**
     * ListPaymentsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Payment();
    }

    /**
     *
     * @param Request $request
     * @return PaymentyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new PaymentCollection($rows);
    }

}
