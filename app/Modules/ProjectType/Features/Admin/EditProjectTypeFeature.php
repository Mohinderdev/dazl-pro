<?php

namespace App\Modules\ProjectType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ProjectType\Models\ProjectType;

class EditProjectTypeFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'project-types::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
