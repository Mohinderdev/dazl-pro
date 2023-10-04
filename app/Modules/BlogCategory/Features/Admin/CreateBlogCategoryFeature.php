<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateBlogCategoryFeature extends Feature
{

    /**
     * CreateBlogCategoryFeature constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {

        return $this->run(RespondWithView::class, [
            'view' => 'blog-categories::create'
        ]);
    }

}
