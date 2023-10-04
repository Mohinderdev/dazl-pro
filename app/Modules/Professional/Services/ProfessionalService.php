<?php


namespace App\Modules\Professional\Services;

use App\Enums\PaymentStatusEnum;
use App\Enums\PricesEnum;
use App\Enums\UserTypesEnum;
use App\Modules\Company\Models\Company;
use App\Modules\Payment\Services\PaymentService;
use App\Modules\Professional\Transformers\Api\RegisterProfessionalDTO;
use App\Modules\Professional\Repositories\ProfessionalApiRepo;
use App\Modules\Professional\Requests\Api\LoginProfessionalRequest;
use App\Modules\Professional\Requests\Api\RegisterProfessionalRequest;
use App\ThirdParties\SMS\Twilio;
use App\Modules\Professional\Models\ProfessionlServiceType;

class ProfessionalService
{
    protected ProfessionalApiRepo $professionalApiRepo;
    protected PaymentService $paymentService;
    protected Twilio $twilio;
    public function __construct(
        ProfessionalApiRepo $professionalApiRepo ,
        PaymentService $paymentService,
        Twilio $twilio
    ){
        $this->professionalApiRepo = $professionalApiRepo;
        $this->paymentService = $paymentService;
        $this->twilio = $twilio;
    }

    public function registerClient($request){
        if(!$request->phone_number){
            $request->phone_number ='';
        }
        $companyid =Company::create([
            'name'=>$request->company_name,
            'address'=>$request->company_street_address,
            'phone'=>$request->company_number,
            'email'=>$request->email,
            'website'=>$request->website,
            'description'=>'',
            'business_licence'=>'',
            'project_portfolio'=>'',
            'references'=>'',
            'insurance_certificate'=>$request->insurance,
            'insurance_contact_number'=>$request->insurance_contact_number,
            'insurance_number'=>$request->insurance_number,
            'twitter'=>$request->twitter,
            'facebook'=>$request->fb,
            'years_in_business'=>$request->years,
            'images1' => $request->images1,
            'images2' => $request->images2,
            'images3' => $request->images3,
            'images4' => $request->images4,

        ]);
        $user = array(
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'zip_code' => $request->zip_code,
            'company_name' => $request->company_name,
            'company_city' => $request->company_city,
            'company_street_address' => $request->company_street_address,


            'state' => $request->state,
        );




        $user = $this->professionalApiRepo->create($user+[  'company_id' => $companyid->id,]);

        foreach ($request->services as $serv){

            ProfessionlServiceType::create(['service_type_id'=>$serv,'professional_id'=>$user->id]);

        }
        switch ($request->membershipOption) {
            case "monthly":

                $payment = $this->paymentService->makePayment(
                    PricesEnum::PROFESSIONAL_MONTHLY,
                    UserTypesEnum::PROFESSIONAL . ' Subscription'
                );
                $user->payment()->create([
                    'total' => PricesEnum::PROFESSIONAL_MONTHLY,
                    'payment_id' => $payment->id,
                    'payment_status' => PaymentStatusEnum::PENDING
                ]);
                break;
            case "yearly":
                $payment = $this->paymentService->makePayment(
                    PricesEnum::PROFESSIONAL_YEARLY,
                    UserTypesEnum::PROFESSIONAL . ' Subscription'
                );
                $user->payment()->create([
                    'total' => PricesEnum::PROFESSIONAL_YEARLY,
                    'payment_id' => $payment->id,
                    'payment_status' => PaymentStatusEnum::PENDING
                ]);
                break;
       }




        $user->paymentUrl = $payment->url;

        $user->token = auth('professional')->fromUser($user);
        return $user;
    }

    public function loginClient(LoginProfessionalRequest $customerRequest): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        $loginCustomerDTO = new LoginProfessionalRequest([
            'email' => $customerRequest->email,
            'password' => (string) $customerRequest->password
        ]);
        $token = auth()->guard('professional')->attempt([
            'email' => $loginCustomerDTO->email ,
            'password' => $loginCustomerDTO->password
        ]);
        $user = auth('professional')->user();
        if($token){
            $user->token = $token;
        }

        return $user;
    }

    public function getProsByServiceId(array $serviceIds){
        return $this->professionalApiRepo->getProsByServiceIds($serviceIds);
    }

    public function sendSMSToPros(){
//        return $this->twilio->sendBulkOfMessages('This is first test','+20127sd2575873');
    }
}
