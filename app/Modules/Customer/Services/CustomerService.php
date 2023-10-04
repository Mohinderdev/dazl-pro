<?php


namespace App\Modules\Customer\Services;


use App\Modules\Customer\Repositories\CustomerApiRepo;
use App\Modules\Customer\Requests\Api\LoginCustomerRequest;
use App\Modules\Customer\Requests\Api\RegisterCustomerRequest;
use App\Modules\Customer\Transformers\Api\LoginCustomerDTO;
use App\Modules\Customer\Transformers\Api\RegisterCustomerDTO;

class CustomerService
{
    protected CustomerApiRepo $customerApiRepo;
    public function __construct(CustomerApiRepo $customerApiRepo){
        $this->customerApiRepo = $customerApiRepo;
    }

    public function registerClient($request){
        if(!$request->phone_number){
            $request->phone_number ='';
        }
        $user = new RegisterCustomerDTO([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'zip_code' => $request->zip_code,
        ]);
        $user = $this->customerApiRepo->create($user->toArray());

        $user->token = auth('customer')->fromUser($user);

        return $user;
    }

    public function loginClient(LoginCustomerRequest $customerRequest): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        $loginCustomerDTO = new LoginCustomerDTO([
            'email' => $customerRequest->email,
            'password' => (string) $customerRequest->password
        ]);
        $token = auth()->guard('customer')->attempt([
            'email' => $loginCustomerDTO->email ,
            'password' => $loginCustomerDTO->password
        ]);
        $user = auth('customer')->user();
        if($token){
            $user->token = $token;
        }
        return $user;
    }



    public function updateCustomer($data){
        $customer = auth('customer');
        return ($customer->user()->update($data));
    }

    public function changePassword($data){

        $customer = auth('customer');

        if (\Hash::check($data['currentpassword'],$customer->user()->password)) {

          ($customer->user()->update(['password'=>bcrypt($data['password'])]));
            $message = 'Updated Successfully';
        }
        else{

                $message = 'Current Password Does Not Match';

        }
        return  response()->json([
            'status'=>200,
            'message'=>$message
        ]);

    }
}
