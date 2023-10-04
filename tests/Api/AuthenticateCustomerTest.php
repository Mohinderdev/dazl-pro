<?php

namespace Tests\Api;

use App\Modules\Customer\Models\Customer;
use App\ThirdParties\PaymentGateways\StripePaymentGateway;
use Illuminate\Http\Response;
use Stripe\Stripe;
use Stripe\StripeClient;
use Tests\TestCase;

class AuthenticateCustomerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */

    public function it_should_register_customer(){
        $password = $this->faker->numberBetween(1000000,888888888);
        $userData = [
            'email'=> $this->faker->email,
            'password'=> $password,
            'first_name'=> $this->faker->name,
            'last_name'=> $this->faker->name,
            'phone_number'=> $this->faker->phoneNumber,
            'zip_code'=> "123",
            'check_box' => true,
            'confirm_password' => $password
        ];
        $response = $this->json('POST' ,'api/customer/register',$userData);
        $result = $response->json();

        foreach ($userData as $key => $userDatum){
            if ($key === 'password' || $key === 'check_box' || $key === "confirm_password")
                continue;
            $this->assertEquals($userDatum ,$result['data'][$key]);
        }
        $this->assertNotEmpty($result['data']['token']);
    }

    /** @test */

    public function it_should_login_customer(){
        $password = $this->faker->numberBetween(4444,5555);
        $userData = factory(Customer::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/customer/login',[
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
        $userData = factory(Customer::class)->create([
            'password' => bcrypt($password)
        ]);
        $response = $this->json('POST' ,'api/customer/login',[
            'email' => $userData->email ,
            'password' => $wrongPassword
        ]);
        $result = $response->json();
        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
        $this->assertEquals($result['message'] , "Please check your credentials");
    }

    /** @test */

    public function it_should_logout_customer(){
        $customer = factory(Customer::class)->create();
        $token = 'Bearer '.auth('customer')->fromUser($customer);
        $response = $this->json('POST' ,'api/customer/logout',[],[
            'Authorization' => $token
        ]);
        $response->assertStatus(Response::HTTP_ACCEPTED);
    }


}
