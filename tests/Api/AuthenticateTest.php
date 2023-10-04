<?php
//
//namespace Tests\Api;
//
//use App\Modules\Admin\Models\Admin;
//use App\Modules\User\Models\User;
//use Illuminate\Http\Response;
//use Tests\TestCase;
//
//class AuthenticateTest extends TestCase
//{
//    public function setUp(): void
//    {
//        parent::setUp();
//    }
//
//    /** @test */
//
////    public function it_should_register_user(){
////        $userData = [
////            'name'=> $this->faker->name,
////            'email'=> $this->faker->email,
////            'password'=> $this->faker->name,
////            'phone'=> $this->faker->phoneNumber,
////        ];
////        $response = $this->json('POST' ,'api/auth/register',$userData);
////        $result = $response->json();
////
////        foreach ($userData as $key => $userDatum){
////            $this->assertEquals($userDatum ,$result['data'][$key]);
////        }
////        $this->assertNotEmpty($result['data']['token']);
////    }
////
////    /** @test */
////
////    public function it_should_login_user(){
////        $password = 123123 ;
////        $userData = factory(User::class)->create([
////            'password' => bcrypt($password)
////        ]);
////        $response = $this->json('POST' ,'api/auth/login',[
////            'email' => $userData->email ,
////            'password' => $password
////        ]);
////        $result = $response->json();
////        foreach ($userData->toArray() as $key => $userDatum){
////            if($key === 'updated_at' || $key === 'created_at' || $key === 'id'){
////                continue;
////            }
////            $this->assertEquals($userDatum ,$result['data'][$key]);
////        }
////        $this->assertNotEmpty($result['data']['token']);
////    }
////
////
////    /** @test */
////
////    public function it_should_not_login_user_if_password_wrong(){
////        $password = 123123 ;
////        $wrongPassword = 3333 ;
////        $userData = factory(User::class)->create([
////            'password' => bcrypt($password)
////        ]);
////        $response = $this->json('POST' ,'api/auth/login',[
////            'email' => $userData->email ,
////            'password' => $wrongPassword
////        ]);
////        $result = $response->json();
////        $response->assertStatus(Response::HTTP_UNAUTHORIZED);
////        $this->assertEquals($result['errors']['message'][0] , "Please check your credentials");
////    }
//
//
//}
