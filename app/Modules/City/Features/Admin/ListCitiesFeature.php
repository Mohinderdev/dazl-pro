<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\City\Models\City;

class ListCitiesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new City();
    }

    /**
     *
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();

        return $this->run(RespondWithView::class, [
            'view' => 'city::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
