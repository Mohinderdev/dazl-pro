<?php

namespace App\Modules\Project\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Requests\Admin\CreateProjectRequest;

class StoreProjectFeature extends Feature
{

    private $model;
    /**
     * StoreProjectFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Project;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateProjectRequest $request,ImagesFactoryInterface $imagesFactory)
    {


        $project = $this->model->create($request->all());
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $project->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'projects.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
