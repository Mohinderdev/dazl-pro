<?php

namespace App\Modules\Feature\Features\Api;

use App\Core\Feature;
use App\Modules\Feature\Models\Feature;
use App\Modules\Feature\Transformers\Api\FeatureCollection;
use Illuminate\Http\Request;

class ListFeaturesFeature extends Feature
{

    private $model;

    /**
     * ListFeaturesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Feature();
    }

    /**
     *
     * @param Request $request
     * @return FeatureyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new FeatureCollection($rows);
    }

}
