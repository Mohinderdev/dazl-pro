<?php

namespace App\Modules\User\Features\Admin\User;

use App\Core\Feature;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\User\Models\User;
use Exception;

class updateUserStatusFeature extends Feature
{
    private $model;
    private $user;

    /**
     * updateUserStatusFeature constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = new User();
        $this->user = $user;
    }

    /**
     *
     * @return RespondWithRoute
     * @throws Exception
     */
    public function handle()
    {
        $row = $this->model->find($this->user->id);

        $row->update([
            'is_active' => !$row->is_active
        ]);

        return $this->run(RespondWithRoute::class, [
            'route' => 'users.users',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }
}
