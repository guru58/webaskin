<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use Redirect;
use Activation;
use App\User;
use Mail;
use Alert;
use \Illuminate\Database\QueryException;

class RegistrationController extends Controller
{
  public function register(Request $request){
   

   try{
    // $password = $request->password;
    // $cp = $request->cp;

    $user = Sentinel::register($request->all()); 
    $activation = Activation::create($user);
    $role = Sentinel::findRoleBySlug('student');
    $role->users()->attach($user); 
    $this->sendEmail($user,$activation->code);
    Alert::info('Mail has been sent to activate your account', 'Confirmation Email')->persistent("Close this");
    return redirect::back();   
    }
catch(QueryException  $e){
      Alert::error('Username Already Exist Try another one !' , 'Oops');
        return redirect('/');
}
  }
  
  private function sendEmail($user,$code){
    Mail::send('emails.activation' , [
        'user' => $user,
        'code' => $code
        ], function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->username,activate your account"); 
        });
  }




}
