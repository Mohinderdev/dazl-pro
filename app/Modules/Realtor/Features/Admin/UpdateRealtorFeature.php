<?php

namespace App\Modules\Realtor\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Realtor\Requests\Admin\UpdateRealtorRequest;

class UpdateRealtorFeature extends Feature
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
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateRealtorRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'realtors.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
