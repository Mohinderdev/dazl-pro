<?php

namespace App\Modules\ProjectType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectType\Models\ProjectType;

class DeleteProjectTypeFeature extends Feature
{

    private $model;
    /**
     * DeleteProjectTypeFeature constructor.
     */
    public function __construct(ProjectType $ProjectType)
    {
        $this->model = $ProjectType;
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
            'route' => 'project-types.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
