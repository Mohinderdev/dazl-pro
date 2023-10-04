<?php

namespace App\Modules\ProjectType\Features\Api;

use App\Core\Feature;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\ProjectType\Transformers\Api\ProjectTypeCollection;
use Illuminate\Http\Request;

class ListProjectTypesFeature extends Feature
{

    private $model;

    /**
     * ListProjectTypesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectType();
    }

    /**
     *
     * @param Request $request
     * @return ProjectTypeyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new ProjectTypeCollection($rows);
    }

}
