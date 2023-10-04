<?php

namespace App\Modules\Language\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Language\Models\Language;

class DeleteLanguageFeature extends Feature
{

    private $model;
    /**
     * DeleteLanguageFeature constructor.
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
    public function handle()
    {
        $this->model->delete();

        return $this->run(RespondWithRoute::class, [
            'route' => 'languages.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
