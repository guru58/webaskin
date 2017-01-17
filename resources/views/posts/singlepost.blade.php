@extends('layouts.master')
@section('title')
singlepost
@endsection

                {{-- SINGLE POST PAGE --}}

@section('singlepost')
<div class="rowQuestion">
  <div class="row">
    <div class="container">
   
                                       <!-- CONATINER FOR SINGLE POST -->
   
      <div class="question_box col-sm-9 col-md-9">
        
        @foreach($questions as $question)
        
        <h2>Category -> {{$question->category}}</h2>
        <hr>
        
        <div class="panel panel-default">
          <div class="panel-heading">
           @if($question->users->image == null)
                  <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}"  alt="profile_img"/>
              @else
             
            <img src="{{URL::asset('images/'.$question->users->image.'')}}" alt="user image" />
            @endif 
            
            &nbsp;&nbsp;&nbsp;&nbsp;{{$question->title}}
            <span class="timediff">{{$question->category}}</span>
          </div>
          
          <div class="panel-body">
           {!!$question->description!!}
            <hr>
            <div class="col-sm-4" >
            <p class="votes">posted -> {{$question->created_at->diffForHumans()}}</p> 
            </div>
            <div class="col-sm-3">
              <p class="answers" >answers->2</p>
            </div>
            <div class="col-sm-3">
              <p class="views" >view -> 12</p>
            </div>
            <div class="col-sm-2"><span class="username badge"  >posted by &nbsp;{{$question->users->username}}</span>
            </div>
          </div>

        </div>
                
      @endforeach
    



                                                     {{-- ANSWERS HERE --}}
      @foreach($answers as $answer)
        <div class="answers_box">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if($answer->users->image == null)
                  <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}"  alt="profile_img"/>
              @else
                  <img src="{{URL::asset('images/'.$answer->users->image.'')}}" alt="user image" />
              @endif
                &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="user">posted by {{$answer->users->username}}</a> 
              <span class="timediff">{{$answer->created_at->diffForHumans()}}</span>
          </div>
          <div class="panel-body">
           {!!$answer->description!!}>
          </div>
        </div>
      </div>
    
    @endforeach        



                                                   {{-- ANSWER BOX --}}



        <div class="answer_box">
          <h3>Enter Your Answer</h3>
          <hr>           
         	<form method="POST">
          {{csrf_field()}}
                <div class="form-group">

                        <textarea class="tinymce" name="answer">Hello, World!</textarea>

                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form> 
        </div>
                                                    {{-- ANSWER BOX STOP HERE --}}


      </div>
                                                     <!-- CONTAINER FOR CATEGORY -->
      <div class="col-sm-3 col-md-3">
        <h3>Question Categories</h3>
        <hr>
        <div class="links list-group">
          <h4>Web Designing</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> HTML</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CSS</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> BOOTSTARP</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> JAVASCRIPT</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> JQUERY</a>
          <h4>Web Development</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> PHP</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> MYSQL</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> .NET</a>
             
          <h4>Web Frameworks</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> LARAVEL</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CODIGNITOR</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> CAKEPHP</a>
          <h4>Others</h4>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Blogs</a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Fan Club </a>
          <a href="#" class="list-group-item"><i class="fa fa-terminal" aria-hidden="true"></i> Downloads</a>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection
