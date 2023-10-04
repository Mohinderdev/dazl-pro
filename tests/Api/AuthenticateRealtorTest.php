<?php

namespace Tests\Api;

use App\Modules\Professional\Models\Professional;
use App\Modules\Realtor\Models\Realtor;
use App\ThirdParties\PaymentGateways\StripePaymentGateway;
use Illuminate\Http\Response;
use Mockery;
use Tests\TestCase;

class AuthenticateRealtorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */

    public function it_should_register_realtor(){
        $payment = Mockery::mock(StripePaymentGateway::class)->makePartial();
        app()->bind(StripePaymentGateway::class, function () use ($payment) {
            return $payment;
        });
        $data = $this->returnPaymentMockedResponse();
        $payment->shouldReceive(['checkout' => $data]);
        $password = $this->faker->numberBetween(1000000,888888888);
        $userData = [
            'email'=> $this->faker->email,
            'password'=> $password,
            'confirm_password'=> $password,
            'first_name'=> $this->faker->name,
            'last_name'=> $this->faker->name,
            'phone_number'=> $this->faker->phoneNumber,
            'zip_code'=> (string) $this->faker->numberBetween(8,5),
            'real_state_agency_name'=> $this->faker->state,
            'city_of_real_state_agency'=> $this->faker->city,
            'state'=> $this->faker->state,
        ];
        $response = $this->json('POST' ,'api/realtor/register',$userData);
        $result = $response->json();
        foreach ($userData as $key => $userDatum){
            if ($key === 'password' || $key === 'check_box' || $key === "confirm_password")
                continue;
            $this->assertEquals($userDatum ,$result['data'][$key]);
        }
        $this->assertNotEmpty($result['data']['token']);
    }

    /** @test */

    public function it_should_login_realtor(){
        $password = $this->faker->numberBetween(4444,5555);
        $userData = factory(Realtor::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/realtor/login',[
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

    public function it_should_not_login_realtor_if_password_wrong(){
        $password = $this->faker->numberBetween(4444,5555);
        $wrongPassword = $this->faker->numberBetween(44,55);
        $userData = factory(Professional::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/realtor/login',[
            'email' => $userData->email ,
            'password' => $wrongPassword
        ]);
        $result = $response->json();
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
        $this->assertEquals($result['message'] , "Please check your credentials");
    }

    /** @test */

    public function it_should_logout_realtor(){
        $professional = factory(Realtor::class)->create();
        $token = 'Bearer '.auth('professional')->fromUser($professional);
        $response = $this->json('POST' ,'api/realtor/logout',[],[
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
