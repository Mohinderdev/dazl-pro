<?php

namespace App\Modules\ProjectType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\ProjectType\Requests\Admin\UpdateProjectTypeRequest;

class UpdateProjectTypeFeature extends Feature
{

    private $model;
    /**
     * EditProjectTypeFeature constructor.
     */
    public function __construct(ProjectType $ProjectType)
    {
        $this->model = $ProjectType;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateProjectTypeRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'project-types.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
