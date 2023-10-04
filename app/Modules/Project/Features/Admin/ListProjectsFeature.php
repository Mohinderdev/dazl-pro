<?php

namespace App\Modules\Project\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Project\Models\Project;

class ListProjectsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Project();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'projects::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
