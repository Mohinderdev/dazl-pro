<?php

namespace App\Modules\Realtor\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Realtor\Requests\Admin\CreateRealtorRequest;

class StoreRealtorFeature extends Feature
{

    private $model;
    /**
     * StoreRealtorFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Realtor;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateRealtorRequest $request)
    {
        $this->model->create($request->except('password') + [
            'password' => bcrypt(uniqid())
        ]);

        return $this->run(RespondWithRoute::class, [
            'route' => 'realtors.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
