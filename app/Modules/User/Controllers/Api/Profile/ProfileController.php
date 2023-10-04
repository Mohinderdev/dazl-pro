<?php
namespace App\Modules\User\Controllers\Api\Profile;

use App\Modules\User\Models\User;
use App\Http\Controllers\Controller;
use App\Modules\User\Features\Api\Profile\GetProfileFeature;
use App\Modules\User\Features\Api\Profile\UpdateProfileFeature;
use App\Modules\User\Requests\Api\Profile\UpdateProfileRequest;
use App\Modules\User\Features\Api\Profile\UpdatePasswordFeature;
use App\Modules\User\Requests\Api\Profile\UpdatePasswordRequest;

class ProfileController extends Controller
{
    private $model;

    /**
     * ResetPasswordController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * get user profile.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function getProfile()
    {
        $user = auth()->user();

        return $this->serve(GetProfileFeature::class, [
            'user' => $user
        ]);
    }

    /**
     * update user password.
     *
     * @param UpdatePasswordRequest $request
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = auth()->user();

        return $this->serve(UpdatePasswordFeature::class, [
            'user' => $user
        ]);
    }

    /**
     * update user profile.
     *
     * @param UpdateProfileRequest $request
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = auth()->user();

        return $this->serve(UpdateProfileFeature::class, [
            'user' => $user
        ]);
    }


}
