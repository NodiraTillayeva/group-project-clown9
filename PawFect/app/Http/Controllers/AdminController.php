<?php

namespace App\Http\Controllers;

use App\Models\SitePosts;
use App\Models\SiteUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
/*$flights = Flight::where('active', 1)
               ->orderBy('name')
               ->take(10)
               ->get();
*/
class AdminController extends Controller
{
    public function showSearch(Request $request)
    {

        $UsrName=$request->get('searchUserForAdmin');
        $UsersPets = SitePosts::all();

        $UsersPosts = SiteUsers::where('Username', $UsrName)->get();
        //print $UsersPosts;
        if($UsersPosts == '[]')
        {
            return view('Admin.admin_notFound');
        }
        /*return URL::signedRoute('Admin.admin_static', ['searchTag' => $UsrName], [
            'UsersPosts' =>  $UsersPosts,
            'UsersPets' => $UsersPets
        ]);*/
        return view('Admin.admin_static', [
            'UsersPosts' =>  $UsersPosts,
            'UsersPets' => $UsersPets
        ]);

    }
    public function deleteItem(Request $request)
    {
        $UsrID=$request->get('UsrID');
        $deletedRows = SitePosts::where('id', $UsrID)->delete();
        return redirect()->route('showUsersToAdmin');
    }
    public function addNewUser()
    {
      /*  $newPost = new SitePosts();
        $newPost->SiteUsers_id = 2;
        $newPost->PostName="quicky";
        $newPost->Type="Dog";
        $newPost->Breed="Terrier";
        $newPost->Age=2;
        $newPost->Price=50;
        $newPost->Description="Very beautiful friendly Dog. Lorem Ipsum bla bla bla";
        $newPost->PhotoPath="assets/products/gal5.png";
        $newPost->save();*/
       /* $user = new SiteUsers();
        $user->Username = "Jacob";

            $user->FullName = "Jacob Ivanov";
            $user->Password = "qwerty";
            $user->DateOfBirth = "2004-07-01";
            $user->PostalCode = 3434354;
            $user->City = "London";
            $user->PhoneNumber = 7175755;
            $user->email = "j.job@gmail.wa";
            $user->Passport="ZZ220111";
            $user->PhotoPath="assets/parallex.png";
            $user->save();*/
            return view('welcome');
    }
    public function showUsers()
    {
        $UsersPosts = SiteUsers::all();
        $UsersPets = SitePosts::all();
        return view('Admin.admin_static', [
            'UsersPosts' => $UsersPosts,
            'UsersPets' => $UsersPets
        ]);
    }
}
