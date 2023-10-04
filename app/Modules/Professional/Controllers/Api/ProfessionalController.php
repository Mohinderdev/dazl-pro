<?php
namespace App\Modules\Professional\Controllers\Api;

use App\Modules\Company\Models\Company;
use App\Modules\Professional\Models\ProfessionlServiceType;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Modules\Professional\Services\ProfessionalService;
use App\Modules\Professional\Transformers\Api\ProfessionalResource;
use App\Modules\Professional\Requests\Api\LoginProfessionalRequest;
use App\Modules\Professional\Requests\Api\RegisterProfessionalRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


/**
 * @group  Professionals
 *
 * APIs for managing professionals
 */
class ProfessionalController extends Controller
{
    protected ProfessionalService $professionalService;

    public function __construct(ProfessionalService $professionalService)
    {
        $this->professionalService = $professionalService;
    }
    /**
     * Register Professional.
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     * @bodyParam first_name string required Paula
     * @bodyParam last_name string required George
     * @bodyParam phone_number string required +201272575873
     * @bodyParam zip_code string required 524587
     * @bodyParam company_name string required Garden
     * @bodyParam company_city string required Alexandria
     * @bodyParam company_street_address string required NewYork Main st
     * @bodyParam state string required NewYork
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required','unique:professionals'],
            'password' => ['required','same:confirm_password'], //need to add more rules
            'confirm_password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'company_number' => ['required'],
            'zip_code' => ['required'],
            'check_box' =>['required','accepted'],
            'state' => ['required'],
            'company_name' => ['required'],
            'years'=> ['required'],
            'company_city'=> ['required'],
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            $message = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($message,500);
        }

        $user = $this->professionalService->registerClient($request);

        return new ProfessionalResource($user);
    }
    /**
     * Login Professional.
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     */
    public function login(LoginProfessionalRequest $loginProfessionalRequest): \Illuminate\Http\JsonResponse
    {
        $user = $this->professionalService->loginClient($loginProfessionalRequest);
        $userd= new ProfessionalResource($user);

        $servicetype = ProfessionlServiceType::with('service')->where('professional_id',@$userd->id)->get();

        return ($user)? response()->json(['data' =>new ProfessionalResource($user),'servicetype'=>$servicetype ])
            :
            response()->json([
                'message' => 'Please check your credentials'
            ],Response::HTTP_UNAUTHORIZED);
    }
    /**
     * Logout Professional.
     *
     */
    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('professional')->logout();
        return response()->json([
            'message' => 'Professional is logged out'
        ],Response::HTTP_ACCEPTED);
    }


}
