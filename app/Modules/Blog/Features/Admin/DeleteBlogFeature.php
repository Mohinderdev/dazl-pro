<?php

namespace App\Modules\Blog\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Blog\Models\Blog;

class DeleteBlogFeature extends Feature
{

    private $model;
    /**
     * DeleteBlogFeature constructor.
     */
    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;
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
            'route' => 'blogs.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
