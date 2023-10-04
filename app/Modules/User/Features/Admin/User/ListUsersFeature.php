<?php

namespace App\Modules\User\Features\Admin\User;

use App\Core\Feature;
use App\Modules\User\Models\User;
use App\Core\Response\Admin\RespondWithView;

class ListUsersFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     *
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();

        return $this->run(RespondWithView::class, [
            'view' => 'users::users.index',
            'data' => ['rows' => $rows]
        ]);
    }
}
