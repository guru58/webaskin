<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['user_id' , 'question_id' , 'description'];

    public function questions(){
    	return $this->belongsTo('App\Question' , 'question_id' , 'id');
    }
    public function users(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}
