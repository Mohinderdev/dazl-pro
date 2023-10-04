<?php

namespace Tests\Api;

use App\Modules\Payment\Models\Payment;
use App\Modules\Professional\Models\Professional;
use App\ThirdParties\PaymentGateways\StripePaymentGateway;
use Illuminate\Http\Response;
use Tests\TestCase;
use Mockery;
class AuthenticateProfessionalTest extends TestCase
{
    public function setUp(): void
    {
        $payment = \Mockery::mock(StripePaymentGateway::class)->makePartial();
        $payment->shouldReceive([
            'checkout' => 'return value 1'
        ]);
        app()->instance(StripePaymentGateway::class , $payment);
        parent::setUp();
    }

    /** @test */

    public function it_should_register_professional(){
        $payment = Mockery::mock(StripePaymentGateway::class)->makePartial();
        app()->bind(StripePaymentGateway::class, function () use ($payment) {
            return $payment;
        });
        $data = $this->returnPaymentMockedResponse();
        $payment->shouldReceive(['checkout' => $data]);


        $password = "123123123";
        $userData = [
            'email'=> $this->faker->email,
            'password'=> $password,
            'first_name'=> $this->faker->name,
            'last_name'=> $this->faker->name,
            'phone_number'=> $this->faker->phoneNumber,
            'zip_code'=> (string) $this->faker->numberBetween(8,10),
            'company_name'=> $this->faker->company,
            'company_city'=> $this->faker->city,
            'company_street_address'=> $this->faker->streetName,
            'state'=> $this->faker->state,
            'check_box' => true,
            'confirm_password' => $password
        ];
        $response = $this->json('POST' ,'api/professional/register',$userData);
        $result = $response->json();
        foreach ($userData as $key => $userDatum){
            if ($key === 'password' || $key === 'check_box' || $key === "confirm_password")
                continue;

            $this->assertEquals($userDatum ,$result['data'][$key]);
        }
        $this->assertNotEmpty($result['data']['token']);
    }

    /** @test */

    public function it_should_login_professional(){
        $password = $this->faker->numberBetween(4444,5555);
        $userData = factory(Professional::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/professional/login',[
            'email' => $userData->email ,
            'password' => $password
        ]);
        $result = $response->json();
        foreach ($userData->toArray() as $key => $userDatum){
            if($key === 'updated_at' || $key === 'created_at' || $key === 'id'){
                continue;
            }
            $this->assertEquals($userDatum ,$result['data'][$key]);
        }
        $this->assertNotEmpty($result['data']['token']);
    }


    /** @test */

    public function it_should_not_login_user_if_password_wrong(){
        $password = $this->faker->numberBetween(4444,5555);
        $wrongPassword = $this->faker->numberBetween(44,55);
        $userData = factory(Professional::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/professional/login',[
            'email' => $userData->email ,
            'password' => $wrongPassword
        ]);
        $result = $response->json();
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
        $this->assertEquals($result['message'] , "Please check your credentials");
    }

    /** @test */

    public function it_should_logout_professional(){
        $professional = factory(Professional::class)->create();
        $token = 'Bearer '.auth('professional')->fromUser($professional);
        $response = $this->json('POST' ,'api/professional/logout',[],[
            'Authorization' => $token
        ]);
        $response->assertStatus(Response::HTTP_ACCEPTED);
    }

    private function returnPaymentMockedResponse(): \stdClass
    {
        $stdClass = new \stdClass();
        $stdClass->url = "url";
        $stdClass->id = "123133";
        return $stdClass;
    }

}
