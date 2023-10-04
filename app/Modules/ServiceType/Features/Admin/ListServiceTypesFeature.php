<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ServiceType\Models\ServiceType;

class ListServiceTypesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ServiceType();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'service-types::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
