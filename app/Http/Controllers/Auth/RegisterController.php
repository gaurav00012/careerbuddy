<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\UserMaster as UserMaster;

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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   protected function create(array $data)

   {

      // dd($data);

       $usrMaster = new UserMaster;

       $usrMaster->user_code = $data['email'];

       $usrMaster->user_name = $data['email'];

       $usrMaster->first_name = $data['name'];

       $usrMaster->email_id = $data['email'];

       $usrMaster->password = $data['password'];

       $usrMaster->enc_password = Hash::make($data['password']);

       $usrMaster->verification_status = 'PENDING';

       $usrMaster->save();        
       return User::create([

           'name' => $data['name'],

           'email' => $data['email'],

           'password' => Hash::make($data['password']),

       ]);

   }
}
