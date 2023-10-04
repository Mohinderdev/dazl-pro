<?php

namespace App\Exceptions;

use App\Exceptions\CustomException;

class HouseDataNotFound extends CustomException
{
    protected $code = "400";
    protected $message = "No Data Found for this house with this address";
}
