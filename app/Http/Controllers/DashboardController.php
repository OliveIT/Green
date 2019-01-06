<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

use Auth;

class DashboardController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles users portal
    |
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

    public function index()
    {
        return view('dashboard.dashboard');
        //success
        // return view('dashboard.account');
        //failed

        //$this->middleware('auth')->except('logout');
    }
    public function bills()
    {
        return view('dashboard.bills');
        //success
        // return view('dashboard.account');
        //failed

        //$this->middleware('auth')->except('logout');
    }
    public function payhistory()
    {
        return view('dashboard.payhistory');
        //success
        // return view('dashboard.account');
        //failed

        //$this->middleware('auth')->except('logout');
    }
}
