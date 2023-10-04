<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Language\Models\Language;

class ListLanguagesFeature extends Feature
{

    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Language();
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
            'view' => 'language::index',
            'data' => ['rows' => $rows]
        ]);
    }

}
