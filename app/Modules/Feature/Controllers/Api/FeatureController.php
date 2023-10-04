<?php
namespace App\Modules\Feature\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Feature\Requests\Api\GetRoomFeaturesRequest;
use App\Modules\Feature\Services\FeatureService;
use App\Modules\Feature\Transformers\Api\FeatureCollection;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class FeatureController extends Controller
{
    private FeatureService $featureService;

    public function __construct(FeatureService $featureService)
    {
        $this->featureService = $featureService;
    }
    public function index()
    {
        //Todo : need to implement
    }

    public function getRoomFeatures(GetRoomFeaturesRequest $getRoomFeaturesRequest): FeatureCollection
    {
        $features = $this->featureService->getFeatureAssociatedWithRoom($getRoomFeaturesRequest->room_id);
        return new FeatureCollection($features);
    }

    public function getFeaturesoptions(Request $request)
    {
        $data=array();
        foreach ($request->feature_id as $featureid ){
           $data[]= $feature_options=DB::table('feature_options')->where('feature_id',$featureid)->get();
        }
        return response()->json([

            'data' => $data

        ], Response::HTTP_OK);
    }

}
