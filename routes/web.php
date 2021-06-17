<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'index']);
// Routes For Google login
Route::get('/login/google',[LoginController::class,'redirectToGoogle']);
Route::get('/login/google/callback',[LoginController::class,'handleGoogleCallback']);
Route::get('/login/home',[LoginController::class,'handleGoogleCallback']);

// Routes For facebook login
Route::get('/login/facebook',[LoginController::class,'redirectToFacebook']);
Route::get('/login/facebook/callback',[LoginController::class,'handleFacebookCallback']);
Route::get('/login/home',[LoginController::class,'handleFacebookCallback']);
// Routes For Github login
Route::get('/login/github',[LoginController::class,'redirectToGithub']);
Route::get('/login/github/callback',[LoginController::class,'handleGithubCallback']);
Route::get('/login/home',[LoginController::class,'handleGithubCallback']);
