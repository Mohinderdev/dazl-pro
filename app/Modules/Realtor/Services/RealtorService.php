<?php


namespace App\Modules\Realtor\Services;

use App\Enums\PaymentStatusEnum;
use App\Enums\PricesEnum;
use App\Enums\UserTypesEnum;
use App\Modules\Project\Models\Project;
use App\Modules\Realtor\Repositories\RealtorApiRepo;
use App\Modules\Realtor\Requests\Api\LoginRealtorRequest;
use App\Modules\Realtor\Transformers\Api\LoginRealtorDTO;
use App\Modules\Realtor\Requests\Api\RegisterRealtorRequest;
use App\Modules\Realtor\Transformers\Api\RegisterRealtorDTO;
use App\Modules\Payment\Services\PaymentService;
use App\Modules\Realtor\Models\Realtor;
use App\Mail\SendEmail;
use Exception;
use Mail;

class RealtorService
{
    protected RealtorApiRepo $realtorApiRepo;
    protected PaymentService $paymentService;

    public function __construct(RealtorApiRepo $realtorApiRepo, PaymentService $paymentService)
    {
        $this->realtorApiRepo = $realtorApiRepo;
        $this->paymentService = $paymentService;
    }

    public function registerRealtor($registerRealtorRequest)
    {
        if (!$registerRealtorRequest->phone_number) {
            $registerRealtorRequest->phone_number = '';
        }

        $user = new RegisterRealtorDTO([
            'email' => $registerRealtorRequest->email,
            'password' => bcrypt($registerRealtorRequest->password),
            'first_name' => $registerRealtorRequest->first_name,
            'last_name' => $registerRealtorRequest->last_name,
            'phone_number' => $registerRealtorRequest->phone_number,
//            'zip_code' => $registerRealtorRequest->zip_code,
            'real_state_agency_name' => $registerRealtorRequest->real_state_agency_name,
//            'city_of_real_state_agency' => $registerRealtorRequest->city_of_real_state_agency,
//            'state' => $registerRealtorRequest->state,
        ]);
        $user = $this->realtorApiRepo->create($user->toArray());

        switch ($registerRealtorRequest->membershipOption) {
            case "monthly":

                $payment = $this->paymentService->makePayment(
                    PricesEnum::REALTOR_MONTHLY,
                    UserTypesEnum::PROFESSIONAL . ' Subscription'
                );
                $user->payment()->create([
                    'total' => PricesEnum::REALTOR_MONTHLY,
                    'payment_id' => $payment->id,
                    'payment_status' => PaymentStatusEnum::PENDING
                ]);
                break;
            case "yearly":
                $payment = $this->paymentService->makePayment(
                    PricesEnum::REALTOR_YRARLY,
                    UserTypesEnum::PROFESSIONAL . ' Subscription'
                );
                $user->payment()->create([
                    'total' => PricesEnum::REALTOR_YRARLY,
                    'payment_id' => $payment->id,
                    'payment_status' => PaymentStatusEnum::PENDING
                ]);
                break;
        }
//        $payment = $this->paymentService->makePayment(
//            PricesEnum::REALTOR,
//            UserTypesEnum::REALTOR . " Subscription"
//        );
//
//        $user->payment()->create([
//            'total' => PricesEnum::REALTOR,
//            'payment_id' => $payment->id,
//            'payment_status' => PaymentStatusEnum::PENDING
//        ]);
        $user->paymentUrl = $payment->url;

        $user->token = auth('realtor')->fromUser($user);
        return $user;
    }

    public function loginRealtor(LoginRealtorRequest $loginRealtorRequest): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        $loginRealtorDTO = new LoginRealtorDTO([
            'email' => $loginRealtorRequest->email,
            'password' => (string) $loginRealtorRequest->password
        ]);
        $token = auth('realtor')->attempt([
            'email' => $loginRealtorDTO->email,
            'password' => $loginRealtorDTO->password
        ]);
        $user = auth('realtor')->user();
        if ($token) {
            $user->token = $token;
        }
        return $user;
    }
    public function getRealtorById($realtorId)
    {

        return  Realtor::find($realtorId);
    }

    public function updateRealtor(array $data){


         $realtor = auth('realtor');
         return ($realtor->user()->update($data));
    }

    public function changePassword($data){

        $realtor = auth('realtor');

        if (\Hash::check($data['currentpassword'],$realtor->user()->password)) {

            ($realtor->user()->update(['password'=>bcrypt($data['password'])]));
            $message = 'Updated Successfully';
            return  response()->json([
                'status'=>200,
                'message'=>$message
            ]);
        }
        else{

            $message = 'Current Password Does Not Match';
            return  response()->json([
                'status'=>400,
                'message'=>$message
            ],400);
        }

    }

    public function filterProjects(){

        $projects = Project::select('customers.email', 'home_diagnostic_reports.id', 'houses.location')
            ->join('customers', 'customers.id', '=', 'projects.customer_id')
            ->join('home_diagnostic_reports', 'home_diagnostic_reports.id', '=', 'projects.home_diagnostic_report_id')
//            ->join('project_to_rooms', 'project_to_rooms.project_id', '=', 'projects.id')
            ->join('houses', 'houses.id', '=', 'home_diagnostic_reports.house_id')
            ->where('houses.realtor_id', auth('realtor')->id())
            ->get();

        $uniqueProjects = [];
        foreach ($projects as $project) {
            // Convert each project to an array and use it as a unique identifier
            $uniqueKey = json_encode($project->toArray());

            // Add the project to the uniqueProjects array if not already present
            if (!isset($uniqueProjects[$uniqueKey])) {
                $uniqueProjects[$uniqueKey] = $project->toArray();
            }
        }

// Convert the array of unique projects back to a simple indexed array
        $uniqueProjectsArray = array_values($uniqueProjects);

        return $uniqueProjectsArray;

    }
  
    public function sendNewEmail($data){
        //dd($data);
       
            $data = [
                'customer_name' => 'John Doe',
                'message' => 'This is a test email message.',
                // Add more data fields as needed
            ];
            
         // check for failures

    try {
        Mail::to('alt.x9-9ozmbc2c@yopmail.com')->send(new SendEmail($data, 'emails.project_value', 'sdsdsds'));
    } catch (Exception $e) {
      //Email sent failed.

    //   dd($e);
    }
       


        
    } 

}
