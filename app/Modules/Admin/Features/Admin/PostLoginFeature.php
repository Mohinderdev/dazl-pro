<?php

namespace App\Modules\Admin\Features\Admin;

use App\Core\Feature;
use App\Modules\Admin\Models\Admin;
use App\Modules\Admin\Requests\Admin\AdminLoginRequest;
use App\Modules\Department\Transformers\Api\DepartmentResource;
use Illuminate\Support\Facades\Auth;

class PostLoginFeature extends Feature
{

    private $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    /**
     *
     * @param AdminLoginRequest $request
     *
     * @return DepartmentResource
     */
    public function handle(AdminLoginRequest $request)
    {
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

            return redirect()->intended('/admin/index');
        }

        return back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'invalid credentials',
            ]);
    }

}
