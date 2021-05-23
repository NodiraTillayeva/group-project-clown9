<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteUsers;
//use App\Web\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if(Auth::check())
        {
            return redirect(route('user.landing'));
        }
        $validateFields = $request->validate([
            'fullName'=>['required', 'regex:/^[a-zA-Z]+ [a-zA-Z]+$/i'],
            'dateOfBirth'=>['required','regex:/^(0?[1-9]|[12][0-9]|3[01])-(0?[1-9]|[1][0-2])-[0-9]+$/i'],
            'userName'=>['required','min:5','max:16'],
            'email'=>['required','email'],
            'phone'=>['required','regex:/^\\+[0-9]+-[0-9]+-[0-9]+$/i'],
            'postalCode'=>['required','integer','min:7'],
            'passportNumber'=>['required','regex:/^[a-zA-Z][a-zA-Z]\\d\\d\\d\\d\\d\\d\\d$/i'],
            'password'=>['required','regex:/[a-zA-Z0-9,!$%^&*()_+|~=`{}\[\]:;<>?,.\/]/u','min:5','max:16'],
            'confirm_password'=>['same:password','min:5','max:16']
        ]);
        if(SiteUsers::where('email', $validateFields['email'])->exists()){
            return redirect(route('user.registration'))->withErrors([
                'email' => "This email already Exists!"
            ]);
        }
        $user = SiteUsers::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'));
    }
    public function login(Request $request)
    {
        if(Auth::check()){
            return redirect()->intended(route('user.landing'));
        }
        $formFields = $request->only('email', 'Password');

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.landing'));
        }
        return redirect(route('user.login'))->withErrors([
            'email' => " authorisation failed"
        ]);
    }
}
