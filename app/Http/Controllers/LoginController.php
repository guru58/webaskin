<?php

/*
   @author Gagandeep<deepguru649@gmail.com>
   @copyright 2017 Copyright 
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Alert;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoginController extends Controller
{
    /*
      * --------------------------------------------------------------- 
      * @param this login method will handle http request of login form
      * ---------------------------------------------------------------
    */
       
    public function login(Request $request){
      try{
          if(Sentinel::authenticate($request->all())){
            $slug = Sentinel::getUser()->roles()->first()->slug;
            $username = Sentinel::getUser()->username;  
            if($slug == 'admin'){
              return redirect('/admin');
            }
            else if ($slug == 'student'){
              return redirect('/');
            }
          }
          else{
            Alert::error('Something went wrongs' , 'Oops');
            return redirect('/');
          }
      }
      
      catch(ThrottlingException $e){
        $delay = $e->getDelay();
        Alert::error('You are banned for $delay seconds' , 'Oops');
        return redirect('/');
      }
      
      catch(NotActivatedException $e){
        Alert::error('You account has not been activated yet!' , 'Oops');
        return redirect('/');
      }
       
    }

    /*
      * ----------------------------------------------------------- 
      * @param this logout method will logout the authenticated user
      * -----------------------------------------------------------
    */

    public function logout(Request $request){
    	Sentinel::logout();
    	return redirect('/');
    }       
}
