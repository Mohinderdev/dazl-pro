<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\AdditionalValue\Requests\Admin\UpdateAdditionalValueRequest;

class UpdateAdditionalValueFeature extends Feature
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
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateAdditionalValueRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'additional-values.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
