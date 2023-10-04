<?php

namespace App\Modules\ContactUs\Controllers\Admin;

use App\Modules\ContactUs\Models\ContactUs;
use App\Http\Controllers\Controller;
use App\Modules\ContactUs\Features\Admin\ListContactUsFeature;
use Illuminate\Http\Response;
use ReflectionException;

class ContactUsController extends Controller
{
    private $model;

    public function __construct(ContactUs $contactUs)
    {
        $this->model = $contactUs;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @throws ReflectionException
     */
    public function index()
    {
        return $this->serve(ListContactUsFeature::class);
    }


}
