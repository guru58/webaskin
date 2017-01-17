<?php

/*
 * ------------------------------------------ 
 *  @author Gagandeep<deepguru649@gmail.com>
 *  @copyright 2017 Copyright 
 * ------------------------------------------  
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Alert;
use Redirect;

class ProfileController extends Controller
{
    
    /*
     * -------------------------------------------------------------------------   
     * @param this profile method return profile.blade.php page
     * @return it will redirect to profile.blade.php page
     * ------------------------------------------------------------------------- 
    */

    public function profile($username){
    $users =User::where('username', $username)->get(); 
    	return view('profiles.profile' , compact('users'));
    }
    

    /*
     * --------------------------------------------------------------------------   
     * @param this update method is used to open the updateprofile.blade.php page
     * @return it will redirect to updateprofile.blade.php page
     * ------------------------------------------------------------------------- 
    */

    public function update($id){
        $users =User::where('id', $id)->get(); 
    	return view('profiles.updateprofile' , compact('users'));
    }


    /*
     * -------------------------------------------------------------------------   
     * @param this postupdate method is used to update the user profile
     * @return it will redirect to update profile.blade.php page
     * ------------------------------------------------------------------------- 
    */

    public function postupdate(Request $request , $id){
    	$users = User::find($id);
        $users->username = $request->username;
    	$users->location = $request->location;
    	$users->qualification = $request->qualification;
    	$users->city = $request->city;
    	$users->dob = $request->dob;
    	$users->gender = $request->gender;
    	$users->proficiency = $request->proficiency;
    	$users->save();
        Alert::success('You Profile has been updated successfully', 'Good Job !')->persistent("Close this");
    	return Redirect::back(); 

    }

    /*
     * --------------------------------------------------------------------------   
     * @param this update method is used to open the profilepic.blade.php page
     * @return it will redirect to profilepic.blade.php page
     * ------------------------------------------------------------------------- 
    */

    public function profilepic($id){
    	$pics = User::where('id' , $id)->get();
    	return view('profiles.updatepic' , compact('pics'));
    }


    /*
     * -------------------------------------------------------------------------   
     * @param this postprofilepic method is used to update the user profile pic
     * @return it will redirect to update profilepic.blade.php page
     * ------------------------------------------------------------------------- 
    */


    public function postprofilepic($id , Request $request){
    	$pics = User::find($id);
    	$imageName = time().".".$request->image->getClientOriginalExtension();
    	$request->image->move(public_path('images'),$imageName);
    	$pics->image = $imageName;
    	$pics->save(); 
    	return Redirect::back();
    }
}
