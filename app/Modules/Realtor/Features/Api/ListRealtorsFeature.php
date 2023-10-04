<?php

namespace App\Modules\Realtor\Features\Api;

use App\Core\Feature;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Realtor\Transformers\Api\RealtorCollection;
use Illuminate\Http\Request;

class ListRealtorsFeature extends Feature
{

    private $model;

    /**
     * ListRealtorsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Realtor();
    }

    /**
     *
     * @param Request $request
     * @return RealtoryCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new RealtorCollection($rows);
    }

}
