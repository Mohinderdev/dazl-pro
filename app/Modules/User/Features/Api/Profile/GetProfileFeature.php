<?php

namespace App\Modules\User\Features\Api\Profile;

use App\Core\Feature;
use App\Modules\User\Models\User;
use App\Core\Response\Api\RespondWithJsonData;
use App\Modules\User\Transformers\Api\UserResource;

class GetProfileFeature extends Feature
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
     * @return RespondWithJsonData
     */
    public function handle()
    {
        return new UserResource($this->user);
    }

}
