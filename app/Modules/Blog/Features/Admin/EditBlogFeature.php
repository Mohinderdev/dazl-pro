<?php

namespace App\Modules\Blog\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Blog\Models\Blog;

class EditBlogFeature extends Feature
{

    private $model;
    /**
     * EditBlogFeature constructor.
     */
    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $category = \App\Modules\BlogCategory\Models\BlogCategory::all();
        return $this->run(RespondWithView::class, [
            'view' => 'blogs::edit',
            'data' => ['row' => $this->model,'category' => $category ]
        ]);
    }
}
