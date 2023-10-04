<?php
namespace App\Modules\Customer\Controllers\Api;

use App\Modules\Customer\Models\Customer;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Customer\Services\CustomerService;
use App\Modules\Customer\Transformers\Api\CustomerResource;
use App\Modules\Customer\Requests\Api\LoginCustomerRequest;
use App\Modules\Customer\Requests\Api\RegisterCustomerRequest;
use Illuminate\Support\Facades\Validator;

/**
 * @group  Customers
 *
 * APIs for managing customers
 */
class CustomerController extends Controller
{
    private CustomerService $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    /**
     * Register Customer.
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     * @bodyParam first_name string required Paula
     * @bodyParam last_name string required George
     * @bodyParam phone_number string required +201272575873
     * @bodyParam zip_code string required 524587
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required','unique:customers'],
            'password' => ['required','same:confirm_password'], //need to add more rules
            'confirm_password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
//            'phone_number' => ['required'],
            'zip_code' => ['required'],
            'check_box' =>['required','accepted'],
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            $message = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($message,500);
        }
        $user = $this->customerService->registerClient($request);
        return new CustomerResource($user);
    }


    /**
     * Login Customer.
     * @bodyParam email string required polagorge@gmail.com
     * @bodyParam password string required 123123
     */
    public function login(LoginCustomerRequest $customerRequest): \Illuminate\Http\JsonResponse
    {
        $user = $this->customerService->loginClient($customerRequest);
        return ($user)? response()->json(['data' =>new CustomerResource($user) ])
        :
        response()->json([
            'message' => 'Please check your credentials'
        ],Response::HTTP_UNAUTHORIZED);
    }
    /**
     * Logout Customer.
     *
     */



    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('customer')->logout();
        return response()->json([
            'message' => 'Customer is logged out'
        ],Response::HTTP_ACCEPTED);
    }
    public function update(Request $request){

        $this->customerService->updateCustomer($request->all());
        return  response()->json([
            'status'=>200,
            'message'=>"Updated Successfully"
        ]);
    }
    public function change_password(Request $request){

     $message =   $this->customerService->changePassword($request->all());
     return   $message ;


    }
}
