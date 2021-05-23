<?php

namespace App\Http\Controllers;

use App\Models\SitePosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function submit(Request $req){
        $post = new SitePosts();
        $post->SiteUsers_id = 1;
        $post->PhotoPath = "qweqweqw";
        $post->PostName = $req->input('Name');
        $post->Type = $req->input('Type');
        $post->Breed = $req->input('Breed');
        $post->Description = $req->input('Description');
        $post->Age = $req->input('Age');
        $post->Price = $req->input('Price');
        $path = $req->file('Image')->store(public_path('assets/postImages'));
        //Storage::move($path,public_path('assets/images'));
        $post->PhotoPath = $path;

        $post->save();
        return redirect('landing');

    }
}
