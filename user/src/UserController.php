<?php

namespace Peter\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    //
    public function index(){

    	$test = "Hello from user package";
    	return view("User::index",compact("test"));
    }
}
