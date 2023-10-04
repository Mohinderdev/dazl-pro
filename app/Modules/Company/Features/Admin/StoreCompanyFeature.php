<?php

namespace App\Modules\Company\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Requests\Admin\CreateCompanyRequest;

class StoreCompanyFeature extends Feature
{

    private $model;
    /**
     * StoreCompanyFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Company;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateCompanyRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'companies.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
