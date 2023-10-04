<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ServiceType\Models\ServiceType;

class EditServiceTypeFeature extends Feature
{

    private $model;
    /**
     * EditServiceTypeFeature constructor.
     */
    public function __construct(ServiceType $ServiceType)
    {
        $this->model = $ServiceType;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'service-types::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
