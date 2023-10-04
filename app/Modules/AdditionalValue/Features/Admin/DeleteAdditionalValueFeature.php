<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\AdditionalValue\Models\AdditionalValue;

class DeleteAdditionalValueFeature extends Feature
{

    private $model;
    /**
     * DeleteAdditionalValueFeature constructor.
     */
    public function __construct(AdditionalValue $AdditionalValue)
    {
        $this->model = $AdditionalValue;
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
            'route' => 'additional-values.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
