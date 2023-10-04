<?php

namespace App\Modules\Realtor\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Realtor\Models\Realtor;

class EditRealtorFeature extends Feature
{

    private $model;
    /**
     * EditRealtorFeature constructor.
     */
    public function __construct(Realtor $Realtor)
    {
        $this->model = $Realtor;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'realtors::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
