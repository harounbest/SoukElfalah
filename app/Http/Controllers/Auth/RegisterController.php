<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\ContactRequest;

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
    protected $redirectTo = '/ad';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phonenumber' => 'required|numeric|digits:10'],[
            'name.required' => 'حقل الإسم مطلوب', 
            'name.max' => 'يجب أن لا يتجاوز الإسم المدخل 50 حرف', 
            'name.string' => 'يجب أن يكون إسمًا صحيحًا',     
            'password.min' => 'يجب أن لا تقل كلمة المرور عن 6 أحرف', 
            'password.string' => 'يجب أن تكون كلمة مرور صحيحة',  
            'password.confirmed' => 'يجب أن تكون كلمتي المرور متطابقتين',         
            'email.email' => 'تحقق من أن صيغة البريد الإلكتروني المُدخَل صحيحة', 
            'email.required' => 'حقل البريد الإلكتروني مطلوب', 
            'email.unique' => 'سبق إستعمال هذا البريد الإلكتروني بهذا الموقع',
            'phonenumber.digits'=>'يجب إدخال رقم هاتف صحيح',//__('auth.Login'),
            'phonenumber.required'=>'يجب إدخال رقم الهاتف',
            'phonenumber.numeric'=>'يجب أن يكون رقم الهاتف صحيح',
            ]
        
        );
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
            'password' => bcrypt($data['password']),
            'phoneNumber' => $data['phonenumber'],
        ]);
    }
}
