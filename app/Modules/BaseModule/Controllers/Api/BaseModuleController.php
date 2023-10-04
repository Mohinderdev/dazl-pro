<?php
namespace App\Modules\BaseModule\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\BaseModule\Models\BaseModule;
use App\Modules\BaseModule\Features\Api\ListBaseModulesFeature;

class BaseModuleController extends Controller
{
    private $model;

    public function __construct(BaseModule $unitView)
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
        return $this->serve(ListBaseModulesFeature::class);
    }

}
