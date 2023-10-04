<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Language\Models\Language;
use App\Modules\Language\Requests\Admin\UpdateLanguageRequest;

class UpdateLanguageFeature extends Feature
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
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateLanguageRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'languages.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
