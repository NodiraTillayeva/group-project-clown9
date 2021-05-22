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
//Route::get('/Products.#categories')->name("categories-jump");
