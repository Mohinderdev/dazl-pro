<?php

namespace App\Modules\Realtor\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Realtor\Services\RealtorService;
use App\Modules\Realtor\Transformers\Api\RealtorResource;
use App\Modules\Realtor\Requests\Api\LoginRealtorRequest;
use App\Modules\Realtor\Requests\Api\RegisterRealtorRequest;
use Illuminate\Support\Facades\Validator;

/**
 * @group  Realtors
 *
 * APIs for managing realtors
 */
class RealtorController extends Controller
{
    protected RealtorService $realtorService;

    public function __construct(RealtorService $professionalService)
    {
        $this->realtorService = $professionalService;
    }
    /**
     * Register Realtor.
     *
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     * @bodyParam first_name string required Paula
     * @bodyParam last_name string required George
     * @bodyParam phone_number string required +201272575873
     * @bodyParam zip_code string required 524587
     * @bodyParam real_state_agency_name string required Garden
     * @bodyParam city_of_real_state_agency string required NewYork Main st
     * @bodyParam state string required NewYork
     */
    public function register(Request $registerRealtorRequest)
    {



        $validator = Validator::make($registerRealtorRequest->all(), [
            'email' => ['required', 'unique:realtors'],
            'password' => ['required', 'same:confirm_password'], //need to add more rules
            'confirm_password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            //            'phone_number' => ['required'],
//            'zip_code' => ['required'],
            'real_state_agency_name' => ['required'],
//            'city_of_real_state_agency' => ['required'],
            'check_box' => ['required', 'accepted'],
//            'state' => ['required']
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            $message = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($message, 500);
        }
        $user = $this->realtorService->registerRealtor($registerRealtorRequest);
        return response()->json(['data' => new RealtorResource($user)]);
    }
    /**
     * Login Realtor.
     *
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     */
    public function login(LoginRealtorRequest $loginRealtorRequest): \Illuminate\Http\JsonResponse
    {

        $user = $this->realtorService->loginRealtor($loginRealtorRequest);
        return ($user) ? response()->json(['data' => new RealtorResource($user)])
            :
            response()->json([
                'message' => 'Please check your credentials'
            ], Response::HTTP_UNAUTHORIZED);
    }
    /**
     * Logout Realtor.
     */
    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('realtor')->logout();
        return response()->json([
            'message' => 'Realtor is logged out'
        ], Response::HTTP_ACCEPTED);
    }


    public function update(Request $request){

        $this->realtorService->updateRealtor($request->all());
        return  response()->json([
            'status'=>200,
            'message'=>"Updated Successfully"
        ]);
    }
    public function getRealtorById(Request $request)
    {

        // $pro = Realtor::find($request->realtor_id);

        $realtor = $this->realtorService->getRealtorById($request->realtor_id);

        if (isset($realtor)) {
            return  response()->json(($realtor) ? [
                'first_name' => $realtor->first_name,
                'last_name' => $realtor->last_name,
                'phone_number' => $realtor->phone_number,
                'real_state_agency_name' => $realtor->real_state_agency_name,
                'city_of_real_state_agency' => $realtor->city_of_real_state_agency,
                'state' => $realtor->state,
                'zip_code' => $realtor->zip_code,
                'email' => $realtor->email,
            ] : []);
        } else {
            return  response()->json([
                'status' => 200,
                'message' => "Realtor Detail Not Found for this user"
            ]);
        }
    }
    public function change_password(Request $request){

        $message =   $this->realtorService->changePassword($request->all());
        return   $message ;


    }

    public function filterProject(){
        $data = $this->realtorService->filterProjects();
        return \response()->json($data);
    }

    public function customerList(){
        $data = $this->realtorService->getRealtorCustomer();
        return \response()->json($data);
    }

    public function sendNewEmail(Request $request){
        $data = $this->realtorService->sendNewEmail($request->all());
        
        return \response()->json($data);
    }


}
