<?php

namespace App\Modules\Country\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Country\Models\Country;
use App\Modules\Country\Requests\Admin\UpdateCountryRequest;

class UpdateCountryFeature extends Feature
{

    private $country;
    /**
     * EditCountryFeature constructor.
     */
    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    /**
     *
     * @param UpdateCountryRequest $request
     * @return mixed
     */
    public function handle(UpdateCountryRequest $request)
    {
        $this->country->update([
            'name' => json_encode($request->name),
            'currency_id' => $request->currency_id,
        ]);

        $this->updateFlag($this->country);

        return $this->run(RespondWithRoute::class, [
            'route' => 'countries.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
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
