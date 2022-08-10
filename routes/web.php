<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use GuzzleHttp\Middleware;

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


Route::post('user-Register',[CustomAuthController::class,'userRegister'])->name('user-Register');
Route::post('user-Login',[CustomAuthController::class,'userLogin'])->name('user-Login');
Route::get('logout',[CustomAuthController::class,'logout'])->name('logout');
Route::get('forgotEmail',[CustomAuthController::class,'forgotEmail'])->name('forgotEmail');
Route::post('emailSend',[CustomAuthController::class,'emailSend'])->name('emailSend');


Route::group(['middleware'=>'alreadyLoggedIn'],function(){
    Route::get('login',[CustomAuthController::class,'login'])->name('login');
    Route::get('register',[CustomAuthController::class,'register'])->name('register');

});




Route::group(['middleware'=>'isLoggedIn'],function(){
    Route::get('dashboard',[CustomAuthController::class,'dashboard'])->name('dashboard');

});

