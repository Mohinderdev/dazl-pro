<?php
namespace App\Modules\Category\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Features\Api\ListCategoriesFeature;

class CategoryController extends Controller
{
    private $model;

    public function __construct(Category $unitView)
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
        return $this->serve(ListCategoriesFeature::class);
    }

}
