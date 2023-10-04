<?php

namespace App\Modules\Admin\Features\Admin;

use App\Core\Feature;
use App\Modules\Admin\Models\Admin;
use App\Modules\Models\Department\Department;
use App\Modules\Department\Repositories\DepartmentRepository;
use App\Modules\Department\Transformers\Api\DepartmentResource;

class ShowLoginFeature extends Feature
{

    private $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    /**
     *
     * @return DepartmentResource
     */
    public function handle()
    {
        return view('admin::auth.login');

    }

}
