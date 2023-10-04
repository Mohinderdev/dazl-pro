<?php
namespace App\ThirdParties\PaymentGateways ;

use Stripe\StripeClient;

class StripePaymentGateway {
    public StripeClient $stripe ;
    public string $successPaymentURL ;
    public string $errorPaymentURL ;
    public function __construct()
    {
        $this->errorPaymentURL = env("PAYMENT_CANCELED");
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }

    public function checkout(int $amount ,string $productName)
    {
        return $this->stripe->checkout->sessions->create([
            'success_url' => $this->successPaymentURL,
            'cancel_url' => $this->errorPaymentURL,
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'amount' => $amount,
                    'currency' => "USD",
                    'name' => $productName,
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
        ]);
    }

    public function setSuccessPaymentURL(){
        $this->successPaymentURL = env("PAYMENT_SUCCESSFUL")."?session_id={CHECKOUT_SESSION_ID}" ;
    }

    public function checkPaymentStatus(string $paymentId): \Stripe\Checkout\Session
    {
        return $this->stripe->checkout->sessions->retrieve(
            $paymentId,
            []
        );
    }
}




