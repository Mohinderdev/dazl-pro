<?php

namespace App\Modules\Customer\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class RegisterCustomerDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
    public string $first_name ;
    public string $last_name ;
    public string $phone_number ;
    public string $zip_code ;
}
