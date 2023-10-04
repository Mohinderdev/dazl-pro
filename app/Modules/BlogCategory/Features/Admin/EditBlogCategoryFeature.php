<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\BlogCategory\Models\BlogCategory;

class EditBlogCategoryFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'blog-categories::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
