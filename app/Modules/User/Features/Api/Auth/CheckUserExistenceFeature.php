<?php

namespace App\Modules\User\Features\Api\Auth;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use App\Core\Response\Api\RespondWithJsonData;

class CheckUserExistenceFeature extends Feature
{

    private $model;
    private $type;
    /**
     * RegisterUserFeature constructor.
     */
    public function __construct($type)
    {
        $this->model = new User();
        $this->type = $type;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithJsonData
     */
    public function handle()
    {
        $user = $this->model->where('email', $this->type)->orWhere('social_id', $this->type)->first();

        if($user) {
            return $this->run(RespondWithJsonData::class, [
                'data'    => 'user exist',
                'status'  => 200,
                'code'    => 100
            ]);
        } else {
            return $this->run(RespondWithJsonData::class, [
                'data' => 'user not exist',
                'status'  => 404,
                'code'    => 101
            ]);
        }
    }

}
