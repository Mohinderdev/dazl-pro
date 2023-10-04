<?php

namespace App\Modules\AdditionalValue\Features\Api;

use App\Core\Feature;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\AdditionalValue\Transformers\Api\AdditionalValueCollection;
use Illuminate\Http\Request;

class ListAdditionalValuesFeature extends Feature
{

    private $model;

    /**
     * ListAdditionalValuesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new AdditionalValue();
    }

    /**
     *
     * @param Request $request
     * @return AdditionalValueyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new AdditionalValueCollection($rows);
    }

}
