<?php

namespace App\Http\Controllers;

use App\Models\SitePosts;
use App\Models\SiteUsers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function displayProfile($id){
        $user = SiteUsers::find($id);
        $pets= SitePosts::where('SiteUsers_id',$id)->get();

        return view('profile',['usersdata'=>$user,'PostDetails'=>$pets]);
    }
    public function editProfileFunc(Request $req,$id){
        $user = SiteUsers::find($id);
        $user->FullName = $req->input('FullName');
        $user->Username = $req->input('UserName');
        $user->Passport = $req->input('Passport');
        $user->PostalCode = $req->input('PostalCode');
        $user->PhoneNumber = $req->input('PhoneNumber');
        $user->DateOfBirth = $req->input('DateOfBirth');
        $user->City = $req->input('City');
        $user->email = $req->input('email');
        $path = $req->file('Image')->store('images/users');
        $user->PhotoPath = $path;

        $user->save();


        return redirect()->route('/profile',3);

    }
    public function displayEditProfile($id){
        return view('edit-profile');
    }
}
