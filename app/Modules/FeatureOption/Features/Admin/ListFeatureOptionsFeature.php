<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\FeatureOption\Models\FeatureOption;

class ListFeatureOptionsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureOption();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->with('feature')->with('featureissues')->get();

        return $this->run(RespondWithView::class, [
            'view' => 'feature-options::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
