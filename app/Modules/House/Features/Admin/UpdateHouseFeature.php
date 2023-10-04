<?php

namespace App\Modules\House\Features\Admin;

use App\Core\Feature;
use App\Modules\Realtor\Models\Realtor;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\House\Models\House;
use App\Modules\House\Requests\Admin\UpdateHouseRequest;

class UpdateHouseFeature extends Feature
{

    private $model;
    /**
     * EditHouseFeature constructor.
     */
    public function __construct(House $House)
    {
        $this->model = $House;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateHouseRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $this->model->update($request->all());
        $realtors = $this->getAllRealtors();
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $this->model->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'houses.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
            'data' => [
                'realtors' => $realtors
            ]
        ]);
    }

    private function getAllRealtors(){
        return Realtor::all();
    }

}
