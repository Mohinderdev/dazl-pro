<?php

namespace App\Modules\Professional\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class LoginProfessionalDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
}
