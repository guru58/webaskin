<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['user_id' , 'title' , 'category' , 'description']; 

    public function users(){
	    return $this->belongsTo('App\User' , 'user_id' , 'id');
	}

    public function answers(){
	    return $this->hasMany('App\Answer' , 'question_id' , 'id');
	}
}

