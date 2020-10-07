<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function validateLogin(\Illuminate\Http\Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == env('USERNAME_STAGING','cmlabs') && $password == env('PASSWORD_STAGING','admin123')){
            session()->put('logged_in',true);
            return redirect('/en');
        }else{
            return redirect()->back()->withErrors(['Incorrect username or password']);
        }
    }

    public function logout()
    {
        session()->forget('logged_in');
        return redirect('/login');
    }

    public function loginView()
    {
        if (env('APP_ENV')=='development'){
            if (session()->exists('logged_in')){
                if (session('logged_in')==true){
                    return redirect('/en');
                }else{
                    return view('login');
                }
            }else{
                return view('login');
            }
        }else{
            return redirect('/en');
        }
    }
}
