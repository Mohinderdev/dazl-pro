<?php

namespace App\Modules\Currency\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Currency\Models\Currency;

class EditCurrencyFeature extends Feature
{

    private $model;
    /**
     * EditCurrencyFeature constructor.
     */
    public function __construct(Currency $currency)
    {
        $this->model = $currency;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'currency::edit',
            'data' => ['row' => $this->model]
        ]);
    }

}
