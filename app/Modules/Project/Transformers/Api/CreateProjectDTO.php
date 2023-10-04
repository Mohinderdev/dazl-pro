<?php

namespace App\Modules\Professional\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class CreateProjectDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
}
