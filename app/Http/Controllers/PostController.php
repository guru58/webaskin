<?php

/*
 * ------------------------------------------ 
 *  @author Gagandeep<deepguru649@gmail.com>
 *  @copyright 2017 Copyright 
 * ------------------------------------------  
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use Sentinel;
use Alert;
use Carbon;
use App\Answer;
use Redirect;
class PostController extends Controller
{
    /*
     * -------------------------------------------------------------------------   
     * @param this question method will handle http request of ask quetsion form
     * @return it will redirect to home page
     * ------------------------------------------------------------------------- 
    */
    public function question(Request $request){
        $user_id = Sentinel::getUser()->id;
        $question = new Question();
        $question->title  = $request->title;
        $question->user_id = $user_id;
        $question->category  = $request->category;
        $question->description  = $request->description;
        $question->save();
        Alert::success('Your Post has been submitted' , 'Thank You Sir');
        return redirect('/');
    }

    /*
     * -------------------------------------------------------------------------   
     * @param this home method returning home.blade.php page 
     * @return it will redirect to home page
     * ------------------------------------------------------------------------- 
    */

    public function home(){
    	$questions = Question::orderBy('id','desc')->get();
        return view('home' , compact('questions')) ;
    }

    
    /*
     * -------------------------------------------------------------------------   
     * @param this singlepost method returning singlepost.blade.php page 
     * @return it will redirect to singlepost page
     * ------------------------------------------------------------------------- 
    */

    public function singlepost($id){
    	$questions = Question::where('id' , $id)->get();
    	$answers = Answer::where('question_id' , $id)->orderBy('id','desc')->get();
    	return view('posts.singlepost' , compact('questions' , 'answers'));
    }


    /*
     * -----------------------------------------------------------------------------   
     * @param this ansewersinglepost method handle post request of singlepost.blade.php page 
     * @return it will redirect to singlepost.blade.php page
     * ----------------------------------------------------------------------------- 
    */

    public function answerSinglePost(Request $request , $id){
    	$answer = new Answer();
    	$user_id = Sentinel::getUser()->id;
    	$answer->user_id = $user_id;
    	$answer->question_id = $id;
    	$answer->description = $request->answer;
    	$answer->save();
    	Alert::success('Your Answer has been posted', 'Good Job!');
    	return Redirect::back();
    }
}
