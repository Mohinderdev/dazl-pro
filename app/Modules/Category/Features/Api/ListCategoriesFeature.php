<?php

namespace App\Modules\Category\Features\Api;

use App\Core\Feature;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Transformers\Api\CategoryCollection;
use Illuminate\Http\Request;

class ListCategoriesFeature extends Feature
{

    private $model;

    /**
     * ListCategoriesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Category();
    }

    /**
     *
     * @param Request $request
     * @return CategoryyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new CategoryCollection($rows);
    }

}
