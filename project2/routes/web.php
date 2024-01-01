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
    return view('frontend.home');
});


Route::get('/admin', function () {
    // return view('backend.layouts.app');
    return view('backend.dashboard');
})->middleware('userAuth');


Route::get('/login', function () {
    // return view('backend.layouts.app');
    return view('backend.login');
});

Route::get('/teacher', function(){
    echo "Hello From Teache";
});

Route::get('/student', function(){
    echo "Hello From Student";
});


Route::post('/login', [LoginController::class, 'authenticate'])->middleware('userAuth');
Route::get('/logout', [LoginController::class, 'logout']);


