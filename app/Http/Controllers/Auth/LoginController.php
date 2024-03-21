<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
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

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(loginRequest $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user-dashboard')
                ->withSuccess('Signed in');
        }
        else{
            return redirect()->back()->with('error', 'Credentials does not match our record');
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('home');
        }
        return redirect()->back();
    }


}
