<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateLanguageFeature extends Feature
{

    /**
     * CreateLanguageFeature constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        return $this->run(RespondWithView::class, [
            'view' => 'language::create'
        ]);
    }

}
