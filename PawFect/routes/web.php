<?php

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

//Route::get('/', [AdminController::class, 'addNewUser']);
Route::post('/admin/search', [AdminController::class, 'showSearch'])->name('searchForAdmin');
Route::get('/admin', [AdminController::class, 'showUsers'])->name('showUsersToAdmin');
Route::post('admin/delete', [AdminController::class, 'deleteItem']);
Route::get('/admin/not_found', [AdminController::class, 'firstOr']);
