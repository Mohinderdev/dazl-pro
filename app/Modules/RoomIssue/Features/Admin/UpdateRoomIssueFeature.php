<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\RoomIssue\Requests\Admin\UpdateRoomIssueRequest;

class UpdateRoomIssueFeature extends Feature
{

    private $model;
    /**
     * EditRoomIssueFeature constructor.
     */
    public function __construct(RoomIssue $RoomIssue)
    {
        $this->model = $RoomIssue;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateRoomIssueRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $this->model->update($request->all());
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $this->model->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'room-issues.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
