<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Activation;

class ActivationController extends Controller
{
    //

      public function activate($id,$activationCode){
    $user = User::whereId($id)->first(); 
    $sentinelUser = Sentinel::findById($user->id);
    if(Activation::complete($sentinelUser, $activationCode)){
      return redirect('/');
    }
  }
}
