<?php
namespace App\Modules\ProjectType\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\ProjectType\Features\Api\ListProjectTypesFeature;

class ProjectTypeController extends Controller
{
    private $model;

    public function __construct(ProjectType $unitView)
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
        return $this->serve(ListProjectTypesFeature::class);
    }

}
