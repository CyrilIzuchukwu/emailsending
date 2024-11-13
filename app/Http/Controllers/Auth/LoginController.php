<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = '/home';


    public function authenticated()
    {
        // Check if the user is active
        if (Auth::user()->active != 1) {
            Auth::logout();
            return redirect('/login')->with('error', 'Your account have been suspended');
        }

        if (Auth::user()->role_as == '1') {
            return redirect('admin/dashboard')->with('message', 'Welcome to your Dashboard');
        } elseif (Auth::user()->role_as == '0') {
            return redirect('/home')->with('success', 'Logged in successfully');

        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
