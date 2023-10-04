<?php

namespace App\Modules\Company\Features\Api;

use App\Core\Feature;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Transformers\Api\CompanyCollection;
use Illuminate\Http\Request;

class ListCompaniesFeature extends Feature
{

    private $model;

    /**
     * ListCompaniesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Company();
    }

    /**
     *
     * @param Request $request
     * @return CompanyyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new CompanyCollection($rows);
    }

}
