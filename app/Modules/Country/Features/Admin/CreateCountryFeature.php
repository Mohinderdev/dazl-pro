<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Currency\Models\Currency;

class CreateCountryFeature extends Feature
{

    /**
     * CreateCountryFeature constructor.
     */
    public function __construct()
    {
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
            'view' => 'country::create',
            'data' => [
                'currencies' => $currencies
            ]
        ]);
    }

}
