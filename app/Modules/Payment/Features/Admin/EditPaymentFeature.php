<?php

namespace App\Modules\Payment\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Payment\Models\Payment;

class EditPaymentFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'payments::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
