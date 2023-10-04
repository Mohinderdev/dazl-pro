<?php

namespace App\Modules\Blog\Features\Api;

use App\Core\Feature;
use App\Modules\Blog\Models\Blog;
use App\Modules\Blog\Transformers\Api\BlogCollection;
use Illuminate\Http\Request;

class ListBlogsFeature extends Feature
{

    private $model;

    /**
     */
    public function __construct()
    {
        $this->model = new Blog();
    }


    /**
     *
     * @param Request $request
     * @return BlogyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->with('blogcategoy')->where('publish','<=', Now())->latest()->paginate(10);

        return $rows;
    }

}
