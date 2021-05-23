<?php

use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;

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

Route::name('user.')->group(function(){
    Route::view('/landing', 'landing')->middleware('auth')->name('private');
    Route::view('/landing',function (){
        return view('landing');
    })->name('landing');
    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.landing'));
        }
        return view('Auth.login');
    })->name('login');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/login');
    })->name('logout');
    Route::post('/login', [\App\Http\Controllers\RegisterController::class, 'login']);

    //Route::get('/logout', [])->name('logout');
    Route::get('/registration', function (){
        return view('Auth.register');
    })->name('registration');
    //Route::post('/login', [\App\Http\Controllers\RegisterController::class, '']);
    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});
//Route::get('/', [AdminController::class, 'addNewUser']);
Route::post('/admin/search', [AdminController::class, 'showSearch'])->name('searchForAdmin');
Route::get('/admin', [AdminController::class, 'showUsers'])->name('showUsersToAdmin');
Route::post('admin/delete', [AdminController::class, 'deleteItem']);
Route::get('/admin/not_found', [AdminController::class, 'firstOr']);

Route::get('/', [PetsController::class,'showAllPets'])->name("landing-pets");
Route::post('/products/search', [PetsController::class, 'searchForPet'])->name("searchForPet");
Route::get('/order{id}', [PetsController::class,'showPostDetail'])->name("post-detail-pets");
Route::get('admin/details/order{id}', [AdminController::class,'showDetailsToAdmin'])->name('admin-detail-pets');
Route::get('/catgories={categories}' , [PetsController::class,'sortByCategory'])->name("sort-post");
Route::get('/post',function (){
            return view('announcement-page');
});
Route::post('/postform','App\Http\Controllers\PostController@submit')->name('post-form');
Route::get('/landing',[PetsController::class,'showAllPets'])->name('landing');
Route::get('/profile{id}',[\App\Http\Controllers\ProfileController::class,'displayProfile'])->name('/profile');
Route::get('/displayEditProfile{id}',[\App\Http\Controllers\ProfileController::class,'displayEditProfile'])->name('edit-profile');
Route::post('/editProfile{id}',[\App\Http\Controllers\ProfileController::class, 'editProfileFunc'])->name('editProfile');

//Route::get('/Products.#categories')->name("categories-jump");

