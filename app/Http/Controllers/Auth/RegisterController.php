<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->number = $request->number;
        $user->city = $request->city;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->photo = $request->photo;
        $user->member_type = $request->member_type;
        $user->ssc_roll = $request->ssc_roll;
        $user->ssc_board = $request->ssc_board;
        $user->ssc_reg = $request->ssc_reg;
        $user->ssc_document = isset($request->ssc_document) ?? $request->ssc_document;
        $user->nid_no = $request->nid_no;
        $user->nid_scanned = isset($request->nid_scaned) ?? $request->nid_scaned;
        $user->emergency_contact = $request->emergency_contact;
        $user->permanent_address = $request->permanent_address;
        $user->brn_number = $request->brn_number;
        $user->passing_year = $request->passing_year;
        $user->birth_day = $request->birth_day;
        $user->blood_group = $request->blood_group;
        $user->save();

        Auth::login($user);
        try {
            Mail::to($user->email)->send(new RegistrationMail($user));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect()->route('post-register');
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function postRegister(){
        return view('auth.post-register');
    }
}
