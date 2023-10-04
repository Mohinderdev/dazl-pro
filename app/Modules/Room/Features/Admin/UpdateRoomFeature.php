<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Requests\Admin\UpdateRoomRequest;
use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use DB;
class UpdateRoomFeature extends Feature
{

    private $model;
    /**
     * EditRoomFeature constructor.
     */
    public function __construct(Room $Room)
    {
        $this->model = $Room;
        $this->id = $Room->id;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateRoomRequest $request ,ImagesFactoryInterface $imagesFactory)
    {

        $data=$request->all();
        $image ="";
        if($request->file('image')){
            $image = $imagesFactory->uploadImage($request->file('image'));
        }


        $data['images']=$image;

        $this->model->update($data);
        DB::table('room_to_feature')->where('room_id',  $this->id)->delete();
        DB::table('room_to_additionals')->where('room_id',  $this->id)->delete();
        DB::table('room_to_types')->where('room_id',  $this->id)->delete();

        foreach($request->featureids as $feat){

            DB::table('room_to_feature')->insert([
                'feature_id'=>$feat,
                'room_id'=>$this->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),
            ]);
        }
        if(isset($request->additional)){
        foreach($request->additional as $feat){
            DB::table('room_to_additionals')->insert([
                'additional_values_id'=>$feat,
                'room_id'=>$this->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),
            ]);
        }
    }
        if(isset($request->types)){
        foreach($request->types as $feat){
            DB::table('room_to_types')->insert([
                'type_id'=>$feat,
                'room_id'=>$this->id,
                'created_at'=>Now(),
                'updated_at'=>Now(),
            ]);
        }
       }
        return $this->run(RespondWithRoute::class, [
            'route' => 'rooms.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
