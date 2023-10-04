<?php

namespace App\Modules\Blog\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateBlogFeature extends Feature
{

    /**
     * CreateBlogFeature constructor.
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
        $category = \App\Modules\BlogCategory\Models\BlogCategory::all();
        return $this->run(RespondWithView::class, [
            'view' => 'blogs::create',
            'data' => ['category' => $category ]
        ]);
    }

}
