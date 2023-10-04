<?php

namespace App\Modules\FeatureOption\Features\Api;

use App\Core\Feature;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureOption\Transformers\Api\FeatureOptionCollection;
use Illuminate\Http\Request;

class ListFeatureOptionsFeature extends Feature
{

    private $model;

    /**
     * ListFeatureOptionsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureOption();
    }

    /**
     *
     * @param Request $request
     * @return FeatureOptionyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new FeatureOptionCollection($rows);
    }

}
