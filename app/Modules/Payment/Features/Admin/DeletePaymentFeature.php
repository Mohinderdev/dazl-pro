<?php

namespace App\Modules\Payment\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Payment\Models\Payment;

class DeletePaymentFeature extends Feature
{

    private $model;
    /**
     * DeletePaymentFeature constructor.
     */
    public function __construct(Payment $Payment)
    {
        $this->model = $Payment;
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
            'route' => 'payments.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
