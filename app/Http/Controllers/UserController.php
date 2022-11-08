<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function loadView($name) 
    {
        return view("users", ['name'=>$name]);
    }
}
