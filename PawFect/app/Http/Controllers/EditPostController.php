<?php

namespace App\Http\Controllers;

use App\Models\SitePosts;
use App\Models\SiteUsers;
use Illuminate\Http\Request;

class EditPostController extends Controller
{
    public function displayEditPost(){
        return view('edit-post-details');
    }
    public function showPostDetail($id)
    {
        $pets= SitePosts::find($id);
        $user = SiteUsers::find($pets->SiteUsers_id);


        return view("profile",['PostDetails'=>$pets]);
    }
}
