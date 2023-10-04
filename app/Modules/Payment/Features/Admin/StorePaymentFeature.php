<?php

namespace App\Modules\Payment\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Payment\Models\Payment;
use App\Modules\Payment\Requests\Admin\CreatePaymentRequest;

class StorePaymentFeature extends Feature
{

    private $model;
    /**
     * StorePaymentFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Payment;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreatePaymentRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'payments.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
