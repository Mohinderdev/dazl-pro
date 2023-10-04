<?php

namespace App\Modules\House\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\House\Models\House;
use App\Modules\House\Requests\Admin\CreateHouseRequest;

class StoreHouseFeature extends Feature
{

    private $model;
    /**
     * StoreHouseFeature constructor.
     */
    public function __construct()
    {
        $this->model = new House;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateHouseRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $house = $this->model->create($request->all());
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $house->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'houses.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
