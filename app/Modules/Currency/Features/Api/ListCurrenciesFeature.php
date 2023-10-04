<?php

namespace App\Modules\Currency\Features\Api;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\Currency\Models\Currency;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Currency\Transformers\Api\CurrencyCollection;

class ListCurrenciesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Currency();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->paginate(10);
        return new CurrencyCollection($rows);
    }
}
