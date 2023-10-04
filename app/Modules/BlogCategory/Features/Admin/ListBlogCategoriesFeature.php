<?php

namespace App\Modules\BlogCategory\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\BlogCategory\Models\BlogCategory;

class ListBlogCategoriesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BlogCategory();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'blog-categories::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
