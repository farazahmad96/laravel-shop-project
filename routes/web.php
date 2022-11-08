<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
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
    // return redirect("about");
});

// Route::get('/users/{name}', function ($name) {
//     return view('users',['user' => $name]);
// });

Route::get("users/{name}",[UserController::class,
'loadView']);
// Route::view('url_name','view_name'); (we cannot pass parameter)

// Route::get('/about', function () {
//     return view('about');
// });

// Route::view('about', 'about');
// Route::view('contact', 'contact');

// calling from controller 
// Route::get('url_path',[ControllerName::class, 'function_name']);
// Route::get("users/{user}",[Users::class,'index']);