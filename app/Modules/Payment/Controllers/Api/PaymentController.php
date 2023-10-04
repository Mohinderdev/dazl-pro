<?php
namespace App\Modules\Payment\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Payment\Models\Payment;
use App\Modules\Payment\Features\Api\ListPaymentsFeature;
use App\Modules\Payment\Requests\Api\CheckPaymentRequest;
use App\Modules\Payment\Services\PaymentService;

class PaymentController extends Controller
{
    protected PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListPaymentsFeature::class);
    }

    public function check(CheckPaymentRequest $checkPaymentRequest){
        $this->paymentService->updatePaymentStatus($checkPaymentRequest->session_id);
        return \Redirect::to(env('REDIRECT_PAYMENT'));
    }

}
