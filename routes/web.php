<?php
/*
  |----------------------------------------------------------------------
  | @author Gagandeep<deepguru649@gmail.com>
  | @copyright 2017 Copyright 
  |----------------------------------------------------------------------
*/

/*
     |----------------------------------------------------------------------
     | This route return home.blade.php page
     |----------------------------------------------------------------------
*/   

Route::get('/', 'PostController@home')->name('home');

/*
     |----------------------------------------------------------------------
     | This route return singlepost.blade.php page and handle post request
     |----------------------------------------------------------------------
*/

Route::get('/singlepost/{id}' , 'PostController@singlepost');
Route::post('/singlepost/{id}' , 'PostController@answerSinglePost')->middleware('student');


// Route::group(['middleware' => 'visitors'] , function(){

/*
     |----------------------------------------------------------------------
     | This route will handle post request of register form
     |----------------------------------------------------------------------
*/

Route::post('/register','RegistrationController@register');

/*
     |----------------------------------------------------------------------
     | This route will handle post request of login form
     |----------------------------------------------------------------------
*/

Route::post('/login' , 'LoginController@login');

// });

/*
     |----------------------------------------------------------------------
     | This route will handle post request of logout form
     |----------------------------------------------------------------------
*/


Route::get('/admin' , 'AdminController@admin')->middleware('admin');



Route::post('/logout' , 'LoginController@logout');



/*
     |----------------------------------------------------------------------
     | This route will return user profile page
     |----------------------------------------------------------------------
*/

Route::get('/profile/{username}' , 'ProfileController@profile')->middleware('student')->name('profile');


/*
     |----------------------------------------------------------------------
     | These routes return updateprofile.blade.php page and handle post request
     |----------------------------------------------------------------------
*/

Route::get('/updateprofile/{id}' , 'ProfileController@update');
Route::post('/updateprofile/{id}' , 'ProfileController@postupdate');

/*
     |----------------------------------------------------------------------
     | These routes return updatepic.blade.php page and handle post request
     |----------------------------------------------------------------------
*/

Route::get('/updatepic/{id}' , 'ProfileController@profilepic');

Route::post('/updatepic/{id}' , 'ProfileController@postprofilepic');

/*
     |----------------------------------------------------------------------
     | This route will handle post request of ask question 
     |----------------------------------------------------------------------
*/

Route::post('/question' , 'PostController@question')->middleware('student');


/*
     |----------------------------------------------------------------------
     | This route will return dashboard panel
     |----------------------------------------------------------------------
*/



/*
     |----------------------------------------------------------------------
     | This route will activate the account
     |----------------------------------------------------------------------
*/

Route::get('/activate/{email}/{activationCode}' , 'ActivationController@activate');

