<?php

/*
   @author Gagandeep<deepguru649@gmail.com>
   @copyright 2017 Copyright 
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
       
       @param this admin method will return dashboard view

    */
    public function admin(){
    	return view('admin.admin');
    }
}
