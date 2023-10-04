<?php
namespace App\Modules\ServiceType\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\ServiceType\Models\ServiceType;
use App\Modules\ServiceType\Features\Api\ListServiceTypesFeature;

class ServiceTypeController extends Controller
{
    private $model;

    public function __construct(ServiceType $unitView)
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

        return $this->serve(ListServiceTypesFeature::class);
    }

}
