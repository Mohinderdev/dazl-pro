<?php

namespace App\Modules\Project\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Requests\Admin\UpdateProjectRequest;

class UpdateProjectFeature extends Feature
{

    private $model;
    /**
     * EditProjectFeature constructor.
     */
    public function __construct(Project $Project)
    {
        $this->model = $Project;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateProjectRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $this->model->update($request->all());

        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $this->model->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'projects.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
