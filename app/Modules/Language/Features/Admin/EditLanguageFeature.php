<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Language\Models\Language;

class EditLanguageFeature extends Feature
{

    private $model;
    /**
     * EditLanguageFeature constructor.
     */
    public function __construct(Language $language)
    {
        $this->model = $language;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'language::edit',
            'data' => ['row' => $this->model]
        ]);
    }

}
