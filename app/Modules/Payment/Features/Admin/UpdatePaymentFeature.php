<?php

namespace App\Modules\Payment\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Payment\Models\Payment;
use App\Modules\Payment\Requests\Admin\UpdatePaymentRequest;

class UpdatePaymentFeature extends Feature
{

    private $model;
    /**
     * EditPaymentFeature constructor.
     */
    public function __construct(Payment $Payment)
    {
        $this->model = $Payment;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdatePaymentRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'payments.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
