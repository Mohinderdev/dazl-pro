<?php

namespace App\Modules\House\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\House\Models\House;

class DeleteHouseFeature extends Feature
{

    private $model;
    /**
     * DeleteHouseFeature constructor.
     */
    public function __construct(House $House)
    {
        $this->model = $House;
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
            'route' => 'houses.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
