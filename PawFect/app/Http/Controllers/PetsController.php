<?php

namespace App\Http\Controllers;

use App\Models\SiteUsers;
use Illuminate\Http\Request;
use App\Models\SitePosts;

class PetsController extends Controller
{

    public function showAllPets()
    {

        $pets = new SitePosts;
/*
            $pets->id = 11;
            $pets->Price = 200;
            $pets->SiteUsers_id =3;
            $pets->PostName = "hedgehog sell for free";
            $pets->Type = "hamster";
            $pets->Breed = "SomeBreed";
            $pets->Age = 500;
            $pets->Description = "
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci atque
blanditiis dicta dignissimos dolorum
, earum eius fuga id impedit nesciunt nostrum nulla obcaecati odio rem, repudiandae sint soluta?";
            $pets->PhotoPath = "assets/products/gal2";

    $pets->save();
*/
        return view("landing",['PostPet' => $pets->all()]);
    }


    public function showPostDetail($id)
    {
        $pets= SitePosts::find($id);
        $user = SiteUsers::find($pets->SiteUsers_id);


        return view("order-page",['PostDetails'=>$pets , 'user'=>$user->Username,'phone'=>$user->PhoneNumber]);
    }

    public function sortByCategory($category)
    {
        $pets= SitePosts::where('Type',$category)->get();
        return view("landing",['PostPet' => $pets]);


    }


}