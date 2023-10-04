<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\BlogCategory\Models\BlogCategory;

class DeleteBlogCategoryFeature extends Feature
{

    private $model;
    /**
     * DeleteBlogCategoryFeature constructor.
     */
    public function __construct(BlogCategory $BlogCategory)
    {
        $this->model = $BlogCategory;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'blog-categories.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
