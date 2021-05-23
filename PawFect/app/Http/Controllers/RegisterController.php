<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteUsers;
use App\Http\Controllers\Controller;
//se App\Web\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function save(Request $request)
    {
        try {


            if (Auth::check()) {
                return redirect(route('user.private'));
            }
            $validateFields = $request->validate([
                'Username' => ['required', 'min:5', 'max:16'],
                'FullName' => ['required', 'regex:/^[a-zA-Z]+ [a-zA-Z]+$/i'],
                'Password' => ['required', 'regex:/[a-zA-Z0-9,!$%^&*()_+|~=`{}\[\]:;<>?,.\/]/u', 'min:5', 'max:16'],
                'DateOfBirth' => ['required', 'regex:/^(0?[1-9]|[12][0-9]|3[01])-(0?[1-9]|[1][0-2])-[0-9]+$/i'],
                'PostalCode' => ['required', 'integer', 'min:7'],
                'City' => ['required'],
                'PhoneNumber' => ['required', 'regex:/^\\+[0-9]+-[0-9]+-[0-9]+$/i'],
                'email' => ['required', 'email'],
                'Passport' => ['required', 'regex:/^[a-zA-Z][a-zA-Z]\\d\\d\\d\\d\\d\\d\\d$/i'],
                'PhotoPath' => ['required'],
                'confirm_password' => ['same:Password', 'min:5', 'max:16']

            ]);
            if (SiteUsers::where('email', $validateFields['email'])->exists()) {
                return redirect(route('user.registration'))->withErrors([
                    'email' => "This email already Exists!"
                ]);
            }
            $user = SiteUsers::create($validateFields);

            if ($user) {
                Auth::login($user);
                return redirect(route('user.private'));
            }

            return redirect(route('user.login'));
        }
        catch (\Throwable $e)
        {
            return redirect(route('user.login'));
            //print Hello;
        }
        //return $user;
    }
    public function login(Request $request)
    {
        try {


            /*$formFields =$request->validate([
                'email'=>['required','email'],
                'Password'=>['required','min:5','max:16'],
            ]);*/
            if (Auth::check()) {
                return redirect()->intended(route('user.landing'));
            }
            $formFields = $request->only('email', 'Password');
            //$user = SiteUsers::all();
            if ($user = SiteUsers::where($formFields)->first()) {
                auth()->login($user, false);
                return redirect()->intended(route('user.landing'));
            } /*if(Auth::attempt($formFields)){

        }*/
            else {
                return redirect(route('user.login'))->withErrors([
                    'email' => " authorisation failed"
                ]);
            }
        }
        catch (\Throwable $a)
        {
            return redirect()->route('landing');
        }
    }
}
