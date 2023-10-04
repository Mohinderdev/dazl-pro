<?php

namespace App\Modules\Realtor\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateRealtorFeature extends Feature
{

    /**
     * CreateRealtorFeature constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {

        return $this->run(RespondWithView::class, [
            'view' => 'realtors::create'
        ]);
    }

}
