<?php

namespace App\Modules\Category\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Requests\Admin\CreateCategoryRequest;

class StoreCategoryFeature extends Feature
{

    private $model;
    /**
     * StoreCategoryFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Category;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateCategoryRequest $request)
    {
        $this->model->create(['title' => json_encode($request->title)] + $request->except("title"));

        return $this->run(RespondWithRoute::class, [
            'route' => 'categories.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
