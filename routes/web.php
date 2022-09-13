<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// user

Route::group(['middleware'=>'user'],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});




//super admin
Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('admin',[SuperAdminController::class,'index'])->name('superadminindex');
    Route::get('changestatus/{id}',[SuperAdminController::class,'insert'])->name('superadminchangestatus');
    Route::get('delete/{id}',[SuperAdminController::class,'destroy']);
    Route::get('edit/{id}',[SuperAdminController::class,'edit']);
    Route::put('edit/{id}',[SuperAdminController::class,'update'])->name('update');
  



});


