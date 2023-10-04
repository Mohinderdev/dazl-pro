<?php

namespace App\Modules\Category\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Category\Models\Category;

class EditCategoryFeature extends Feature
{

    private $model;
    /**
     * EditCategoryFeature constructor.
     */
    public function __construct(Category $Category)
    {
        $this->model = $Category;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'categories::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
