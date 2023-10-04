<?php

namespace App\Modules\Admin\Controllers\Admin\Auth;

use App\Modules\Admin\Features\Admin\LogoutFeature;
use App\Modules\Admin\Features\Admin\PostLoginFeature;
use App\Modules\Admin\Features\Admin\ShowLoginFeature;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Show login form.
     *
     * @return mixed
     *
     * @throws \ReflectionException
     */
    public function showLoginForm()
    {
        return $this->serve(ShowLoginFeature::class);
    }

    /**
     * Api login.
     *
     * @return mixed
     *
     * @throws \ReflectionException
     */
    public function login()
    {
        return $this->serve(PostLoginFeature::class);
    }

    /**
     * @return mixed
     * @throws \ReflectionException
     */
    public function logout()
    {
        return $this->serve(LogoutFeature::class);
    }

}
