<?php

namespace App\Modules\Company\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Requests\Admin\UpdateCompanyRequest;

class UpdateCompanyFeature extends Feature
{

    private $model;
    /**
     * EditCompanyFeature constructor.
     */
    public function __construct(Company $Company)
    {
        $this->model = $Company;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateCompanyRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        if($request->file('file')){
            $images = $imagesFactory->uploadImage($request->file('file'));


        }
        else{
            $images =$request->prev;
        }

        $request->merge([
            'insurance_certificate' => $images,
        ]);

        $this->model->update($request->all());
        if($request->file('portfolio')){
            $images = $imagesFactory->uploadImages($request->file('portfolio'));

            $this->model->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'companies.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
