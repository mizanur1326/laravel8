<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/students', [HomeController::class, 'students']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/abc', [HomeController::class, 'store']);
Route::get('/messages', [HomeController::class, 'messages']);
Route::get('/messages/delete/{mid}', [HomeController::class, 'delete']);
Route::get('/messages/edit/{mid}', [HomeController::class, 'edit']);
Route::post('/messages/update/{mid}', [HomeController::class, 'update']);