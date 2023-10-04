<?php

namespace App\Modules\Admin\Features\Admin;

use App\Core\Feature;
use App\Modules\Admin\Models\Admin;
use App\Modules\Department\Transformers\Api\DepartmentResource;
use Illuminate\Support\Facades\Auth;

class LogoutFeature extends Feature
{

    private $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    /**
     *
     *
     * @return DepartmentResource
     */
    public function handle()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }

}
