<?php

namespace App\Modules\User\Features\Api\ResetPassword;

use Carbon\Carbon;
use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use App\Core\Response\Api\RespondWithJsonData;
use App\Core\Response\Api\RespondWithJsonError;

class CheckResetCodeFeature extends Feature
{
    private $user;


    /**
     * CheckResetCodeFeature constructor.
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
        $code = $this->user->resetPassword()->where('code', $request->code)->first();

        if(!$code) {
            return $this->run(RespondWithJsonError::class, [ 'message' => 'invalid code', 'status' => 404 ]);
        }

        if(Carbon::now() > $code->expire_at) {

            return $this->run(RespondWithJsonError::class, [ 'message' => 'the code is expired please request another code', 'status' => 419 ]);

        } else {
            return $this->run(RespondWithJsonData::class, [ 'data' => 'Valid code', 'status' => 200 ]);

        }

    }

}
