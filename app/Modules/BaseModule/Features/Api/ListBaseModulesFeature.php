<?php

namespace App\Modules\BaseModule\Features\Api;

use App\Core\Feature;
use App\Modules\BaseModule\Models\BaseModule;
use App\Modules\BaseModule\Transformers\Api\BaseModuleCollection;
use Illuminate\Http\Request;

class ListBaseModulesFeature extends Feature
{

    private $model;

    /**
     * ListBaseModulesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BaseModule();
    }

    /**
     *
     * @param Request $request
     * @return BaseModuleyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new BaseModuleCollection($rows);
    }

}
