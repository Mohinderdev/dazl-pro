<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Country\Models\Country;

class ListCountriesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Country();
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
            'view' => 'country::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
