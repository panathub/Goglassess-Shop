<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function username()
    {
       return 'username';
    }
    protected function attemptLogin(Request $request)
    {
        $user = \App\Models\User::where([
            'username' => $request->username,
            'password' =>hash('sha256', $request->get('password')."jatupron")
        ])->first();
        
        if ($user) {
            $this->guard()->login($user, $request->has('remember'));
    
            return true;
        }
    
        return false;
    }

    protected function redirectTo(){
         if(auth()->user()->isAdmin()) {
        return '/admin/dashboard';
    }else if(auth()->user()->isManager()) {
        return '/manager/dashboard';
    } else {
        return '/home';
    }
    }
    
}
