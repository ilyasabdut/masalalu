<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{    
	public function showLogin(){
        return view('login');
    }
   
}