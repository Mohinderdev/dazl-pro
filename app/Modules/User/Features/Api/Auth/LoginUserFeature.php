<?php

namespace App\Modules\User\Features\Api\Auth;

use App\Core\Feature;
use App\Core\Response\Api\RespondWithJsonData;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Core\Response\Api\RespondWithJsonError;
use App\Modules\User\Transformers\Api\UserResource;

class LoginUserFeature extends Feature
{

    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function handle(Request $request)
    {
        $token = auth()->guard('api')->attempt([
            'email' => $request->email ,
            'password' => $request->password
        ]);

        $user = auth()->guard('api')->user();

        if($token){
            $user->token = $token ;
            return new UserResource($user);
        }else{
            return $this->run(RespondWithJsonError::class, [
                'message' => 'Please check your credentials',
                'status'  => 401,
            ]);
        }



    }

}
