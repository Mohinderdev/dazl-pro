<?php

namespace App\Modules\Customer\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class LoginCustomerDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
}
