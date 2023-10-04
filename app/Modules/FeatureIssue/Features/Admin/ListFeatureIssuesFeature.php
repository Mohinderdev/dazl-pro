<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\FeatureIssue\Models\FeatureIssue;

class ListFeatureIssuesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureIssue();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'feature-issues::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
