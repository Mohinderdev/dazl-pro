<?php

namespace App\Modules\User\Controllers\Api\Auth;

use App\Modules\User\Models\User;
use App\Http\Controllers\Controller;
use App\Modules\User\Features\Api\Auth\LoginCustomerFeature;
use App\Modules\User\Requests\Api\Auth\LoginUserRequest;
use App\Modules\User\Features\Api\Auth\RegisterCustomerFeature;
use App\Modules\User\Requests\Api\Auth\RegisterUserRequest;
use App\Modules\User\Features\Api\Auth\VerifyUserAccountFeature;
use App\Modules\User\Features\Api\Auth\CheckUserExistenceFeature;
use Illuminate\Http\Response;
use ReflectionException;



class AuthController extends Controller
{

    private $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }


    public function login(LoginUserRequest $request)
    {
        return $this->serve(LoginCustomerFeature::class);
    }

    public function register(RegisterUserRequest $request)
    {
        return $this->serve(RegisterCustomerFeature::class);
    }

    public function verifyAccount($token)
    {
        $user = $this->model->where('access_token', $token)->first();

        return $this->serve(VerifyUserAccountFeature::class, [
            'user' => $user
        ]);
    }

    public function checkUserExistence($type)
    {

        return $this->serve(CheckUserExistenceFeature::class, [
            'type' => $type
        ]);
    }

}
