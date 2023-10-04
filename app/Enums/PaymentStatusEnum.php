<?php
namespace App\Enums;

final class PaymentStatusEnum{

    use EnumTrait;

    const PENDING = 'PENDING';
    const SUCCESSFUL = 'SUCCESSFUL' ;
    const FAILED = 'FAILED' ;

}
