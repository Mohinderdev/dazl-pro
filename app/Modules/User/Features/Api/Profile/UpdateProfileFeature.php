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

class UpdateProfileFeature extends Feature
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

        $this->user->update([
            'name'    => $request->name,
            'phone'   => $request->phone,
        ]);

        // update user image
        $this->updateImage($this->user);

        return new UserResource($this->user, false);

    }

    private function updateImage($user)
    {
        $name = time().'.'.request()->file('image')->getClientOriginalExtension();
        request()->file('image')->move(public_path('uploads/users'), $name);
        $user->update(['image' => 'uploads/users/'.$name]);
    }

}
