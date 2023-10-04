<?php

namespace App\Modules\Category\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Category\Models\Category;

class DeleteCategoryFeature extends Feature
{

    private $model;
    /**
     * DeleteCategoryFeature constructor.
     */
    public function __construct(Category $Category)
    {
        $this->model = $Category;
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
            'route' => 'categories.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
