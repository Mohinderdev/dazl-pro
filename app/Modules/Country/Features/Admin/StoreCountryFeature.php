<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use App\Core\Response\Admin\RespondWithView;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Country\Models\Country;
use App\Modules\Country\Requests\Admin\CreateCountryRequest;

class StoreCountryFeature extends Feature
{

    private $model;
    /**
     * StoreCountryFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Country;
    }

    /**
     *
     * @param CreateCountryRequest $request
     * @return RespondWithView
     */
    public function handle(CreateCountryRequest $request)
    {
        $row = $this->model->create([
            'name' => json_encode($request->name),
            'currency_id' => $request->currency_id,
        ]);

        $this->updateFlag($row);

        return $this->run(RespondWithRoute::class, [
            'route' => 'countries.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

    private function updateFlag($row)
    {
        if (request()->file('flag')){
            $name = time().'.'.request()->file('flag')->getClientOriginalExtension();
            request()->file('flag')->move(public_path('uploads/countries'), $name);
            $row->update(['flag' => 'uploads/countries/'.$name]);
        }
    }

}
