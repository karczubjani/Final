<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;

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


     protected function showRegistrationForm()
     {
         $countries = Country::all();
         return view('auth.register', compact('countries'));
     }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'orszag' => ['required'],
            'varos' => ['string', 'required'],
            'telszam'=> ['required'],
            'szuldate'=> ['date', 'required'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ],[
            'name.required' => 'A név megadása kötelező.',
            'name.max' => 'A név maximum 255 karakter lehet.',
            'email.required' => 'Az email cím megadása kötelező.',
            'email.email' => 'Az email cím formátuma érvénytelen.',
            'email.max' => 'Az email cím maximum 255 karakter lehet.',
            'email.unique' => 'Ez az email cím már foglalt.',
            'orszag.required' => 'Az ország kiválasztása kötelező.',
            'varos.required' => 'A város megadása kötelező.',
            'telszam.required' => 'A telefonszám megadása kötelező.',
            'szuldate.required' => 'A születési dátum megadása kötelező.',
            'szuldate.date' => 'A születési dátum formátuma érvénytelen.',
            'password.required' => 'A jelszó megadása kötelező.',
            'password.min' => 'A jelszó minimum 4 karakter hosszú legyen.',
            'password.confirmed' => 'A jelszavak nem egyeznek.',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'orszag' => $data['orszag'],
            'varos' => $data['varos'],
            'telszam'=> $data['telszam'],
            'szuldate'=> $data['szuldate'],
            'password' => Hash::make($data['password']),
        ]);
    }
}