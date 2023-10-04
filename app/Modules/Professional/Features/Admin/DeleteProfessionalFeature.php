<?php

namespace App\Modules\Professional\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Professional\Models\Professional;

class DeleteProfessionalFeature extends Feature
{

    private $model;
    /**
     * DeleteProfessionalFeature constructor.
     */
    public function __construct(Professional $Professional)
    {
        $this->model = $Professional;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'professionals.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
