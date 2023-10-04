<?php
namespace App\Modules\Currency\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Currency\Features\Api\ListCurrenciesFeature;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCurrenciesFeature::class);
    }

}
