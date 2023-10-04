<?php
namespace App\Modules\Room\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\CounterTopType\Models\CounterTopType;
use App\Modules\FlooringType\Models\FlooringType;
use App\Modules\House\Models\House;
use App\Modules\Room\Services\RoomService;
use App\Modules\Room\Transformers\Api\RoomCollection;
use App\RoomToAdditional;
use App\RoomToType;
use Symfony\Component\HttpFoundation\Response;
use App\Modules\Room\Models\Room;
use App\Modules\Feature\Models\Feature;

use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use Illuminate\Http\Request;
use DB;
class RoomController extends Controller
{
    private RoomService $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

//    public function index(): RoomCollection
//    {
//        $rooms = $this->roomService->getAllRooms();
//
//        return new RoomCollection($rooms);
//    }


    public function featureOptions(Feature $feature)
    {
        $roomfeaturesoption=  $feature->with('featureissues','featureOptions.featureissues.serviceType')->get();


        return response()->json([
            'success' => true,
            'data' => $roomfeaturesoption,
        ], Response::HTTP_OK);


    }
      public function featureoissueslist($id){
        $featureissue = FeatureIssue::where('feature_option_id',$id)->get();
          return response()->json([
              'success' => true,
              'data' => $featureissue
          ], Response::HTTP_OK);

      }
    public function featureoptionlist($id){
  $featureoption = FeatureOption::where('feature_id',$id)->get();
        return response()->json([
            'success' => true,
            'data' => $featureoption
        ], Response::HTTP_OK);

    }
   public function gethouse($search){
        $house  = House::where('address', 'like', '%'. $search .'%')->get();
        return $house;
   }
    public function roomsfeature($id)
    {
        $roofeatures = DB::table('room_to_feature')->select('features.*')
            ->join('features', 'features.id', '=', 'room_to_feature.feature_id')
            ->where('room_to_feature.room_id', '=', $id)->orderBy('features.updated_at')->get();
//        $roomAdd= RoomToAdditional::select('additional_values_id')->with(['additional'=> function($query){$query->select('id','name');}])->where('room_id',$id)->get();
      $roomAdd = DB::table('room_to_additionals')->select('additional_values.*')
          ->join('additional_values','room_to_additionals.additional_values_id', '=','additional_values.id')
          ->where('room_to_additionals.room_id',$id)->get();
      $roomtype = RoomToType::with('type.featureOptions')->where('room_id',$id)->get();
//        $roomType = DB::table('room_to_types')->select('types.*')
//            ->join('types','room_to_types.type_id','=','types.id')
////            ->join('sub_types','sub_types.type_id','=','types.id')
//            ->where('room_to_types.room_id',$id)->get();
//print_r($roomtype);die('herer');
        return response()->json([
            'success' => true,
            'data' => $roofeatures,
            'addValueData' => $roomAdd,
            'roomtype' => $roomtype,

        ], Response::HTTP_OK);
    }


    public function index()
    {

        $rooms = Room::orderBy('name')->get();



        return response()->json([
            'success' => true,
            'data' => $rooms,
        ], Response::HTTP_OK);

    }
}


