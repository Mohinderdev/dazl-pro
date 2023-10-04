<?php

namespace App\Modules\Country\Features\Api;

use App\Core\Feature;
use App\Modules\Country\Models\Country;
use App\Modules\Country\Transformers\Api\CountryCollection;
use Illuminate\Http\Request;

class ListCountriesFeature extends Feature
{
    private $model;

    /**
     * ListCountrysFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Country();
    }

    /**
     *
     * @param Request $request
     * @return CountryCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->get();
        return new CountryCollection($rows);
    }
}
