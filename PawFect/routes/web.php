<?php

use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [PetsController::class,'showAllPets'])->name("landing-pets");
Route::get('/order{id}', [PetsController::class,'showPostDetail'])->name("post-detail-pets");
Route::get('/catgories={categories}' , [PetsController::class,'sortByCategory'])->name("sort-post");
Route::get('/post',function (){
            return view('announcement-page');
});
Route::post('/postform','App\Http\Controllers\PostController@submit')->name('post-form');
Route::get('/landing',[PetsController::class,'showAllPets']);
Route::get('/profile{id}',[\App\Http\Controllers\ProfileController::class,'displayProfile'])->name('/profile');
Route::get('/displayEditProfile{id}',[\App\Http\Controllers\ProfileController::class,'displayEditProfile'])->name('edit-profile');
Route::post('/editProfile{id}',[\App\Http\Controllers\ProfileController::class, 'editProfileFunc'])->name('editProfile');
Route::get('/editPost',[\App\Http\Controllers\EditPostController::class, 'displayEditPost'])->name('/editPost');

//Route::get('/Products.#categories')->name("categories-jump");
