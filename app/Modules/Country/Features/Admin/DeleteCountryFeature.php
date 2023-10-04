<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Country\Models\Country;

class DeleteCountryFeature extends Feature
{

    private $model;
    /**
     * DeleteCountryFeature constructor.
     */
    public function __construct(Country $country)
    {
        $this->model = $country;
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
            'route' => 'countries.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
