<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\RoomIssue\Requests\Admin\CreateRoomIssueRequest;

class StoreRoomIssueFeature extends Feature
{

    private $model;
    /**
     * StoreRoomIssueFeature constructor.
     */
    public function __construct()
    {
        $this->model = new RoomIssue;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateRoomIssueRequest $request ,ImagesFactoryInterface $imagesFactory)
    {
        $roomIssue = $this->model->create($request->all());
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $roomIssue->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'room-issues.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
