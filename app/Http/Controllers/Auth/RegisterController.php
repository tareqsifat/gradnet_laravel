<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'city' => ['nullable','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required',  'file', 'mimes:jpeg,png,jpg', 'max:2048'],
            'member_type' => ['required', 'string', 'max:255'],
            'ssc_roll' => ['nullable', 'string', 'max:255'],
            'ssc_board' => ['nullable', 'string', 'max:255'],
            'ssc_reg' => ['nullable', 'string', 'max:255'],
            'passing_year' => ['nullable', 'string', 'max:255'],
            'ssc_document' => ['nullable', 'file', 'mimes:jpeg,png,jpg,pdf', 'max:2048'], // Allow JPEG, PNG, JPG, PDF
            'nid_no' => ['nullable','string', 'max:255'],
            'nid_scaned' => ['nullable', 'file', 'mimes:jpeg,png,jpg,pdf', 'max:2048'], // Allow JPEG, PNG, JPG, PDF
            'emergency_contact' => ['nullable','string', 'max:255'],
            'permanent_address' => ['nullable','string', 'max:255'],
            'brn_number' => ['nullable','string', 'max:255'],
            'birth_day' => ['nullable','date', 'max:255'],
            'blood_group' => ['nullable', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->number = $data['number'];
        $user->city = $data['city'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->photo = $data['photo'];
        $user->member_type = $data['member_type'];
        $user->ssc_roll = $data['ssc_roll'];
        $user->ssc_board = $data['ssc_board'];
        $user->ssc_reg = $data['ssc_reg'];
        $user->ssc_document = isset($data['ssc_document']) ?? $data['ssc_document'];
        $user->nid_no = $data['nid_no'];
        $user->nid_scanned = isset($data['nid_scaned']) ?? $data['nid_scaned'];
        $user->emergency_contact = $data['emergency_contact'];
        $user->permanent_address = $data['permanent_address'];
        $user->brn_number = $data['brn_number'];
        $user->passing_year = $data['passing_year'];
        $user->birth_day = $data['birth_day'];
        $user->blood_group = $data['blood_group'];
        $user->save();
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        return $user;
    }
    public function postRegister(){
        return view('auth.post-register');
    }
}
