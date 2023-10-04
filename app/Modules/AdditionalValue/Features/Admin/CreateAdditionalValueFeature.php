<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateAdditionalValueFeature extends Feature
{

    /**
     * CreateAdditionalValueFeature constructor.
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
            'view' => 'additional-values::create'
        ]);
    }

}
