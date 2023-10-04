<?php

namespace App\Http\Controllers;

use App\Core\ServesFeaturesTrait;
use App\Modules\Language\Models\Language;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests, ServesFeaturesTrait;
}
