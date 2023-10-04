<?php

namespace App\Modules\Realtor\Transformers\Api;
use Spatie\DataTransferObject\DataTransferObject;

class RegisterRealtorDTO extends DataTransferObject
{
    public string $email ;
    public string $password ;
    public string $first_name ;
    public string $last_name ;
    public string $phone_number ;
//    public string $zip_code ;
    public string $real_state_agency_name ;
//    public string $city_of_real_state_agency ;
//    public string $state ;
}
