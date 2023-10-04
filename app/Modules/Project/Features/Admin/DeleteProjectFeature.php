<?php

namespace App\Modules\Project\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Project\Models\Project;

class DeleteProjectFeature extends Feature
{

    private $model;
    /**
     * DeleteProjectFeature constructor.
     */
    public function __construct(Project $Project)
    {
        $this->model = $Project;
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
            'route' => 'projects.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
