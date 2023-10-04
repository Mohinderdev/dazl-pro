<?php
namespace App\Modules\BlogCategory\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\BlogCategory\Models\BlogCategory;
use App\Modules\BlogCategory\Features\Api\ListBlogCategoriesFeature;

class BlogCategoryController extends Controller
{
    private $model;

    public function __construct(BlogCategory $unitView)
    {
        $this->model = $unitView;
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return $this->serve(ListBlogCategoriesFeature::class);
    }

}
