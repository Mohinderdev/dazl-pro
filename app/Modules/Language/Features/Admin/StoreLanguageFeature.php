<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Language\Models\Language;
use App\Modules\Language\Requests\Admin\CreateLanguageRequest;

class StoreLanguageFeature extends Feature
{

    private $model;
    /**
     * StoreLanguageFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Language;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateLanguageRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'languages.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
