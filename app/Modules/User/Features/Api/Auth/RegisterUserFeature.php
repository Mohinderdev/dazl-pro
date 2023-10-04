<?php

namespace App\Modules\User\Features\Api\Auth;

use App\Core\Feature;
use App\Modules\User\Transformers\Api\UserDTO;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use App\Modules\User\Notifications\UserActivation;
use App\Modules\User\Transformers\Api\UserResource;

class RegisterUserFeature extends Feature
{
    private $model;
    /**
     * RegisterUserFeature constructor.
     */
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     *
     * @param Request $request
     * @return UserResource
     */
    public function handle(Request $request)
    {
        $user = new UserDTO([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone
        ]);
        $user = $this->model->create($user->toArray());

        $user->token = auth()->guard('api')->fromUser($user);

        return new UserResource($user);
    }
}
