<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Hash;


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
Route::get('register',[MemberController::class,'ShowRegister']);
Route::post('register-user',[MemberController::class,'registerUser'])->name('register-user');//register-user is the name of this route we use it in submit form action
Route::get('list',[MemberController::class,'show']);
Route::get('edit/{id}',[MemberController::class,'showData']);
Route::post('edit',[MemberController::class,'update']);
Route::get('delete/{id}',[MemberController::class,'delete']);




