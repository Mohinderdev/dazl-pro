<?php

namespace App\Modules\User\Controllers\Admin;

use App\Modules\User\Models\User;
use App\Modules\User\Features\Admin\User\updateUserStatusFeature;
use App\Http\Controllers\Controller;
use App\Modules\User\Features\Admin\User\ListUsersFeature;
use App\Modules\User\Features\Admin\User\JsonUsersFeature;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use ReflectionException;

class UserController extends Controller
{
    private $model;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Display a listing of the normal users.
     *
     * @return Response
     * @throws ReflectionException
     */
    public function users()
    {
        return $this->serve(ListUsersFeature::class);
    }

    /**
     * Get datatable json.
     *
     * @return Collection
     * @throws Exception
     */
    public function jsonUsersData()
    {
        return $this->serve(JsonUsersFeature::class);
    }

    /**
     * update normal user resource.
     *
     * @param $id
     * @return Collection
     * @throws ReflectionException
     */
    public function updateUserStatus($id)
    {
        $user = $this->model->find($id);
        return $this->serve(updateUserStatusFeature::class, [
            'user' => $user
        ]);
    }

}
