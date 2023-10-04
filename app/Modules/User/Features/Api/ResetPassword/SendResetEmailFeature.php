<?php

namespace App\Modules\User\Features\Api\ResetPassword;

use Carbon\Carbon;
use App\Core\Feature;
use App\Modules\User\Models\User;
use App\Core\Response\Api\RespondWithJsonData;
use App\Modules\User\Notifications\UserResetEmail;

class SendResetEmailFeature extends Feature
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
     * @return RespondWithJsonData
     * @throws \Exception
     */
    public function handle()
    {
        // delete all old codes related to the user
        $this->user->resetPassword()->delete();

        // create reset code for the user
        $this->user->resetPassword()->create([
            'code'      => rand(11111, 99999),
            'expire_at' => Carbon::create()->addMinutes('30'),
        ]);

        $this->user->notify(new UserResetEmail($this->user));

        return $this->run(RespondWithJsonData::class, [
            'data' => 'Reset email sent successfully',
            'status' => 200
        ]);
    }

}
