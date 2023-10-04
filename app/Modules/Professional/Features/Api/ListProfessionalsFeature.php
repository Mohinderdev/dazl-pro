<?php

namespace App\Modules\Professional\Features\Api;

use App\Core\Feature;
use App\Modules\Professional\Models\Professional;
use App\Modules\Professional\Transformers\Api\ProfessionalCollection;
use Illuminate\Http\Request;

class ListProfessionalsFeature extends Feature
{

    private $model;

    /**
     * ListProfessionalsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Professional();
    }

    /**
     *
     * @param Request $request
     * @return ProfessionalyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new ProfessionalCollection($rows);
    }

}
