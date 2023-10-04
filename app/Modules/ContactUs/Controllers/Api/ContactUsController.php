<?php
namespace App\Modules\ContactUs\Controllers\Api;

use App\Modules\ContactUs\Models\ContactUs;
use App\Modules\ContactUs\Repositories\ContactUsApiRepo;
use App\Modules\ContactUs\Requests\Api\CreateContactUsRequest;
use App\Http\Controllers\Controller;
use App\Modules\ContactUs\Features\Api\StoreContactUsFeature;
use App\Modules\ContactUs\Services\ContactUsService;
use Illuminate\Http\Response;
use ReflectionException;

class ContactUsController extends Controller
{
    protected ContactUsService $contactUsService;

    public function __construct(ContactUsService $contactUsService)
    {
        $this->contactUsService = $contactUsService;
    }

    public function store(CreateContactUsRequest $createContactUsRequest)
    {
        $data = $this->contactUsService->store($createContactUsRequest->all());
        return [
            'data' => $data
        ];
    }
}
