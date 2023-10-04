<?php

namespace App\Modules\Project\Features\Api;

use App\Core\Feature;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Transformers\Api\ProjectCollection;
use Illuminate\Http\Request;

class ListProjectsFeature extends Feature
{

    private $model;

    /**
     * ListProjectsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Project();
    }

    /**
     *
     * @param Request $request
     * @return ProjectyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new ProjectCollection($rows);
    }

}
