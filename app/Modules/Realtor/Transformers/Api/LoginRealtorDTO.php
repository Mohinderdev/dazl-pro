<?php

namespace App\Modules\Realtor\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class LoginRealtorDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
}
