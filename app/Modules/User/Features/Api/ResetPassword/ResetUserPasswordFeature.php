<?php

namespace App\Modules\User\Features\Api\ResetPassword;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use App\Core\Response\Api\RespondWithJsonError;
use App\Modules\User\Transformers\Api\UserResource;

class ResetUserPasswordFeature extends Feature
{

    private $user;

    /**
     * SendResetEmailFeature constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     *
     * @param Request $request
     * @return UserResource
     */
    public function handle(Request $request)
    {
        $code = $this->user->resetPassword()->where('code', $request->code)->first();

        if($code) {
            $this->user->update([
                'password'      => bcrypt($request->password),
                'is_verified'   => 1
            ]);

            return new UserResource($this->user, true);
        }

        return $this->run(RespondWithJsonError::class, [ 'message' => 'Code not found', 'status' => 404 ]);
    }

}
