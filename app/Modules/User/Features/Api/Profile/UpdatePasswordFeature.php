<?php

namespace App\Modules\User\Features\Api\Profile;

use Carbon\Carbon;
use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Core\Response\Api\RespondWithJsonData;
use App\Core\Response\Api\RespondWithJsonError;
use App\Modules\User\Transformers\Api\UserResource;

class UpdatePasswordFeature extends Feature
{
    private $user;


    /**
     * UpdatePasswordFeature constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithJsonData
     */
    public function handle(Request $request)
    {
        // check user password
        if (Hash::check($request->old_password, $this->user->password)) {
            $this->user->tokens()->delete();

            $this->user->update([
                'password' => bcrypt($request->password)
            ]);

            return new UserResource($this->user, true);

        } else {
            return $this->run(RespondWithJsonError::class, [
                'message' => 'Your current password is wrong',
                'status'  => 401,
                'code'    => 101
            ]);

        }

    }

}
