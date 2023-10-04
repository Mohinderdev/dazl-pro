<?php

namespace App\Modules\Realtor\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Realtor\Models\Realtor;

class DeleteRealtorFeature extends Feature
{

    private $model;
    /**
     * DeleteRealtorFeature constructor.
     */
    public function __construct(Realtor $Realtor)
    {
        $this->model = $Realtor;
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
            'route' => 'realtors.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
