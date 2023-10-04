<?php

namespace App\Modules\BlogCategory\Features\Api;

use App\Core\Feature;
use App\Modules\BlogCategory\Models\BlogCategory;
use App\Modules\BlogCategory\Transformers\Api\BlogCategoryCollection;
use Illuminate\Http\Request;

class ListBlogCategoriesFeature extends Feature
{

    private $model;

    /**
     * ListBlogCategoriesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BlogCategory();
    }

    /**
     *
     * @param Request $request
     * @return BlogCategoryyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return $rows;
    }

}
