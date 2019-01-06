<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use DB;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function check(Request $req)
    {
        $username = $req->input("username");
        $email = $req->input("email");
        $password = $req->input("password");

        $checkLogin = DB::table('users')->where(['UID'=>$username, 'Email'=>$email, 'password'=>$password])->get();

        if (count($checkLogin) > 0){
            return view('dashboard.account');
        } else {
            return view('dashboard.account');
            //return back()->with('error', 'Wrong Login Informations');
            // return redirect()->to('/login')
            //     ->with('status', 'success')
            //     ->with('message', 'Please login.');
            //$this->middleware('auth')->except('logout');
        }
    }
    public function account()
    {
        return view('dashboard.account');
        //$this->middleware('auth')->except('logout');
    }
}