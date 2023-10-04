<?php

namespace App\Modules\Professional\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Professional\Models\Professional;
use App\Modules\Professional\Requests\Admin\CreateProfessionalRequest;
use Illuminate\Support\Str;

class StoreProfessionalFeature extends Feature
{

    private $model;
    /**
     * StoreProfessionalFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Professional;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateProfessionalRequest $request ,ImagesFactoryInterface $imagesFactory)
    {
        if($request->file('file')){
            $images = $imagesFactory->uploadImage($request->file('file'));


        }
        $request->merge([
            'insurance_licence' => $images,
        ]);

        $this->model->create($request->except('password') + [
            'password' => bcrypt(uniqid())
        ])->serviceTypes()->attach($request->service_type_ids);

        return $this->run(RespondWithRoute::class, [
            'route' => 'professionals.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
