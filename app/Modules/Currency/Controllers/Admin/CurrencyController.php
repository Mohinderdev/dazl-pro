<?php

namespace App\Modules\Currency\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Currency\Models\Currency;
use App\Modules\Currency\Features\Admin\EditCurrencyFeature;
use App\Modules\Currency\Features\Admin\StoreCurrencyFeature;
use App\Modules\Currency\Features\Admin\CreateCurrencyFeature;
use App\Modules\Currency\Features\Admin\DeleteCurrencyFeature;
use App\Modules\Currency\Features\Admin\JsonCurrenciesFeature;
use App\Modules\Currency\Features\Admin\ListCurrenciesFeature;
use App\Modules\Currency\Features\Admin\UpdateCurrencyFeature;

class CurrencyController extends Controller
{
    private $model;

    public function __construct(Currency $currency)
    {
        $this->model = $currency;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCurrenciesFeature::class);
    }

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonCurrenciesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {
        return $this->serve(CreateCurrencyFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCurrencyFeature::class);
    }

    /**
     * Show update form.
     *
     * @param Currency $currency
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Currency $currency)
    {
        return $this->serve(EditCurrencyFeature::class, [
            'currency' => $currency,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Currency $currency
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Currency $currency)
    {
        return $this->serve(UpdateCurrencyFeature::class, [
            'currency' => $currency,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Currency $currency
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Currency $currency)
    {
        return $this->serve(DeleteCurrencyFeature::class, [
            'currency' => $currency,
        ]);
    }
}
