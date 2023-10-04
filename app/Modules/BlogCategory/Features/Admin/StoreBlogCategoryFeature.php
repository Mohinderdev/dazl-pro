<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BlogCategory\Models\BlogCategory;
use App\Modules\BlogCategory\Requests\Admin\CreateBlogCategoryRequest;
use Illuminate\Support\Str;

class StoreBlogCategoryFeature extends Feature
{

    private $model;
    /**
     * StoreBlogCategoryFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BlogCategory;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateBlogCategoryRequest $request)
    {
        $request->merge([
            'slug' => Str::slug($request->name, '-'),
        ]);

        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'blog-categories.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
