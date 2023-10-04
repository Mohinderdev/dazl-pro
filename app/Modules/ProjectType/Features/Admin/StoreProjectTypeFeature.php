<?php

namespace App\Modules\ProjectType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\ProjectType\Requests\Admin\CreateProjectTypeRequest;

class StoreProjectTypeFeature extends Feature
{

    private $model;
    /**
     * StoreProjectTypeFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectType;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateProjectTypeRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'project-types.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
