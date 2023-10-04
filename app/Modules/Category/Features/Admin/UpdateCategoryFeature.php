<?php

namespace App\Modules\Category\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Requests\Admin\UpdateCategoryRequest;

class UpdateCategoryFeature extends Feature
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
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateCategoryRequest $request)
    {
        $this->model->update(['title' => json_encode($request->title)] + $request->except("title"));

        return $this->run(RespondWithRoute::class, [
            'route' => 'categories.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
