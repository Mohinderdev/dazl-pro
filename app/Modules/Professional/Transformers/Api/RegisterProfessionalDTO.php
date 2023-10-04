<?php

namespace App\Modules\Professional\Transformers\Api;
use phpDocumentor\Reflection\Types\Integer;
use Spatie\DataTransferObject\DataTransferObject;

class RegisterProfessionalDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
    public string $first_name ;
    public string $last_name ;
    public string $phone_number ;
    public string $zip_code ;
    public string $company_name ;
    public string $company_city ;
    public string $company_street_address ;

    public string $state ;
}
