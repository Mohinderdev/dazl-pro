<?php

namespace App\Modules\User\Features\Api\Auth;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;

class VerifyUserAccountFeature extends Feature
{

    private $user;
    /**
     * RegisterUserFeature constructor.
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
    public function handle()
    {
        $this->user->update([
            'is_verified' => 1,
            'access_token' => null
        ]);

        //TODO: redirect to frontend login page
        return 'verified successfully';
    }

}
