<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DeviceController;
use App\Mail\SampleMail;
/*
|-----
| Web Routes
|-----
*/
Route::get('/', function () {
   //  return view('welcome');
   return new SampleMail();
});
Route::post("users",[UserController::class,'testRequest']);


Route::post("user",[UserAuth::class,'userLogin']);
Route::view("login",'login');


//logout
Route::get('/logout', function () {
   if(session()->has('user')){
    session()->pull('user');
   }
  return redirect('login');
});

//login
Route::get('/login', function () {
   if(session()->has('user')){
    return redirect('profile');
   }
   return view('login');
});

//add member
Route::view("add","add");
Route::post("addmember",[AddMember::class,'add']);

// upload file 
Route::view("upload","upload");
Route::post("upload", [UploadController::class,'index']);

//localization
// Route::view("profile",'profile');
Route::get('/profile/{lang}', function ($lang) {
   App::setLocale($lang);
   return view('profile');
});

//fetch data from database
 Route::get('list',[MemberController::class,'show']);

 //adding data to database 
 Route::view('add','addmember');
 Route::post('add',[MemberController::class,'addData']);

 //delete from database
 Route::get('delete/{id}',[MemberController::class,'deleteData']);

 //edit record in database
 Route::get('edit/{id}',[MemberController::class,'editData']);

 //Get edit data
 Route::post('edit',[MemberController::class,'update']);

 //query builder 
 Route::get('query',[MemberController::class,'dbOperations']);
 
 //aggrigate query (max,min,avg)
 Route::get('aggrigate',[MemberController::class,'operations']);

 //joins
 Route::get('show',[EmployeeController::class,'show']);

 //accessor
 Route::get('member_accessor',[MemberController::class,'accessor']);

 //mutator
 Route::get('member_mutator',[MemberController::class,'mutator']);

 //one to one
 Route::get("data",[MemberController::class,'oneToOne']);

 //one to many
 Route::get("one-to-many",[MemberController::class,'oneToMany']);

 //routing model binding key(id,name)
Route::get("device/{key:name}",[DeviceController::class,'index']);
