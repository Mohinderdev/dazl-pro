<?php

namespace App\Modules\ContactUs\Features\Api;

use App\Core\Feature;
use App\Modules\ContactUs\Models\ContactUs;
use App\Modules\ContactUs\Transformers\Api\ContactUsResource;
use Illuminate\Http\Request;

class StoreContactUsFeature extends Feature
{
    private $model;

    /**
     * ListUnitsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ContactUs();
    }

    /**
     *
     * @param Request $request
     * @return ContactUsResource
     */
    public function handle(Request $request)
    {
        $row = ContactUs::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'message'    => $request->message
        ]);
        return new ContactUsResource($row);
    }
}
