<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Requests\Admin\CreateRoomRequest;
use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use DB;
class StoreRoomFeature extends Feature
{

    private $model;
    /**
     * StoreRoomFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Room;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateRoomRequest $request,ImagesFactoryInterface $imagesFactory)
    {

     $data=$request->all();
        if($request->file('image')){
            $image = $imagesFactory->uploadImage($request->file('image'));
        }
        else{
            $image='';
        }

        $data['images']=$image;

       $roomid= $this->model->create($data);

       foreach($request->featureids as $feat){
            DB::table('room_to_feature')->insert([
                'feature_id'=>$feat,
                'room_id'=>$roomid->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),
            ]);
        }
        if(isset($request->additional)){
        foreach($request->additional as $feat){
            DB::table('room_to_additionals')->insert([
                'additional_values_id'=>$feat,
                'room_id'=>$roomid->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),
            ]);
        }
     }
     if(isset($request->types)){
        foreach($request->types as $feat){
            DB::table('room_to_types')->insert([
                'type_id'=>$feat,
                'room_id'=>$roomid->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),

            ]);
        }
    }
        return $this->run(RespondWithRoute::class, [
            'route' => 'rooms.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
