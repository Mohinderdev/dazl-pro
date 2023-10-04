<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\AdditionalValue\Requests\Admin\CreateAdditionalValueRequest;

class StoreAdditionalValueFeature extends Feature
{

    private $model;
    /**
     * StoreAdditionalValueFeature constructor.
     */
    public function __construct()
    {
        $this->model = new AdditionalValue;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateAdditionalValueRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'additional-values.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
