<?php

namespace App\Modules\Payment\Repositories;
use App\Core\Repositories\BaseRepository;
use App\Modules\Payment\Models\Payment;

class PaymentRepo extends BaseRepository
{
    public function __construct(Payment $payment)
    {
        parent::__construct($payment);
    }

}
