<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Country\Models\Country;
use App\Modules\Currency\Models\Currency;

class EditCountryFeature extends Feature
{

    private $model;
    /**
     * EditCountryFeature constructor.
     */
    public function __construct(Country $country)
    {
        $this->model = $country;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $currencies = Currency::get(['name', 'id']);

        return $this->run(RespondWithView::class, [
            'view' => 'country::edit',
            'data' => [
                'row' => $this->model,
                'currencies' => $currencies
            ]
        ]);
    }

}
