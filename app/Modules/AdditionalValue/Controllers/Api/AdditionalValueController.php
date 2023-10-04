<?php
namespace App\Modules\AdditionalValue\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\AdditionalValue\Features\Api\ListAdditionalValuesFeature;

class AdditionalValueController extends Controller
{
    private $model;

    public function __construct(AdditionalValue $unitView)
    {
        $this->model = $unitView;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListAdditionalValuesFeature::class);
    }

}
