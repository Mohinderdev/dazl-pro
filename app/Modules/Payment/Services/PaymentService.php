<?php
namespace App\Modules\Payment\Services;

use App\Enums\PaymentStatusEnum;
use App\Modules\Payment\Repositories\PaymentRepo;
use App\ThirdParties\PaymentGateways\StripePaymentGateway;
use Illuminate\Support\Facades\Log;

class PaymentService
{
    protected PaymentRepo $paymentRepo;
    protected StripePaymentGateway $stripePaymentGateway;
    public function __construct(PaymentRepo $paymentRepo ,StripePaymentGateway $stripePaymentGateway){
        $this->paymentRepo = $paymentRepo;
        $this->stripePaymentGateway = $stripePaymentGateway;
    }

    public function makePayment(int $amount ,string $productName){
        $this->stripePaymentGateway->setSuccessPaymentURL();
        return $this->stripePaymentGateway->checkout($amount,$productName);
    }

    public function updatePaymentStatus(string $paymentId){
        $paymentStatus = $this->checkPayment($paymentId);
        $this->paymentRepo->findOneBy(['payment_id' => $paymentId])
            ->update([
                'payment_status' => $paymentStatus
        ]);
    }

    public function checkPayment(string $paymentId):string{
        $paymentStatus = $this->stripePaymentGateway->checkPaymentStatus($paymentId)->payment_status;
        return $this->mapPaymentStatus($paymentStatus);
    }

    private function mapPaymentStatus(string $status):string{
        switch ($status){
            case 'paid' :
                return PaymentStatusEnum::SUCCESSFUL;
            case 'failed' :
                return PaymentStatusEnum::FAILED;
            default :
                return PaymentStatusEnum::PENDING;
        }
    }



}
