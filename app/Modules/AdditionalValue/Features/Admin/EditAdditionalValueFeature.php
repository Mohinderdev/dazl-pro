<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\AdditionalValue\Models\AdditionalValue;

class EditAdditionalValueFeature extends Feature
{

    private $model;
    /**
     * EditAdditionalValueFeature constructor.
     */
    public function __construct(AdditionalValue $AdditionalValue)
    {
        $this->model = $AdditionalValue;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'additional-values::edit',
            'data' => ['row' => $this->model]
        ]);
    }
}
