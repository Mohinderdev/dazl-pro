<?php

namespace App\Modules\Company\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Company\Models\Company;

class DeleteCompanyFeature extends Feature
{

    private $model;
    /**
     * DeleteCompanyFeature constructor.
     */
    public function __construct(Company $Company)
    {
        $this->model = $Company;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'companies.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
