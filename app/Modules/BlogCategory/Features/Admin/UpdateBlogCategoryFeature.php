<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BlogCategory\Models\BlogCategory;
use App\Modules\BlogCategory\Requests\Admin\UpdateBlogCategoryRequest;

class UpdateBlogCategoryFeature extends Feature
{

    private $model;
    /**
     * EditBlogCategoryFeature constructor.
     */
    public function __construct(BlogCategory $BlogCategory)
    {
        $this->model = $BlogCategory;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateBlogCategoryRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'blog-categories.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
