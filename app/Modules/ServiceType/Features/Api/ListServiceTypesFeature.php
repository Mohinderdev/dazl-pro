<?php

namespace App\Modules\ServiceType\Features\Api;

use App\Core\Feature;
use App\Modules\ServiceType\Models\ServiceType;
use App\Modules\ServiceType\Transformers\Api\ServiceTypeCollection;
use Illuminate\Http\Request;

class ListServiceTypesFeature extends Feature
{

    private $model;

    /**
     * ListServiceTypesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ServiceType();
    }

    /**
     *
     * @param Request $request
     * @return ServiceTypeyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->get();
        return new ServiceTypeCollection($rows);
    }

}
