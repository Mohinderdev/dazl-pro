<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature as CoreFeature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Feature\Models\Feature;

class ListFeaturesFeature extends CoreFeature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Feature();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->with('featureOptions')->get();

        return $this->run(RespondWithView::class, [
            'view' => 'features::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
