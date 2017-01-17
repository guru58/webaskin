@extends('layouts.master')
                                              {{-- OWL CAROUSEL --}}
@section('owl_carousel')
<link rel="stylesheet" href="{{URL::asset('owl-carousel/owl.carousel.css')}}" />
<link rel="stylesheet" href="{{URL::asset('owl-carousel/owl.theme.css')}}" />

<style>
.owl-demo{
    	padding: 5px 0px 10px 0px;
}
.owl-demo .item{
  margin: 10px;
}
.owl-demo .item img{
  display: block;
  width: 100%;
  height: 250px;
}
</style>
@endsection
                                              {{-- HOME PAGE --}}
@section('home')

<div class="rowQuestion">
  <div class="row">
    <div class="container">
      
                                                     <!-- CONATINER FOR RECENT QUESTIONS -->
      <div class="question_box col-sm-9 col-md-9">
        <h2>Recent Questions</h2>
        <hr>
        @foreach($questions as $question)
        <div class="panel panel-default">
          <div class="panel-heading">
          {{-- @foreach($question->users as $user) --}}
            @if($question->users->image == null)
            <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}"  alt="profile_img" />
           @else     
            <img src="{{URL::asset('images/'.$question->users->image.'')}}" alt="user image">
            @endif &nbsp;&nbsp;&nbsp;
          {{-- @endforeach   --}}
            {{$question->title}}
            <span class="timediff badge" >{{ $question->created_at->diffForHumans() }}</span>
          </div>
          <div class="panel-body">
          {!!$question->description!!}
            <a href="/singlepost/{{$question->id}}">read more</a><hr>
            <div class="col-sm-3" >
             <p class="votes">votes -> 0</p>              
            </div>
            <div class="col-sm-3">
              <p class="answers" >answers->2</p>
            </div>
            <div class="col-sm-4">
              <p class="views" >view -> 12</p>
            </div>
            <div class="col-sm-2"><span class="username badge"  >Posted By&nbsp;{{$question->users->username}}</span>
            </div>
          </div>
        </div>
         @endforeach
       

                  
        <ul class="pagination">
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
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
  
                                                 <!-- TOP MENTOR SECTION START HERE -->

<div class="_rowMentor">
  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12">
        <h2>Top Mentors</h2>
        <hr>
        <div class="owl-demo">
          <div class="item">
            <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}" alt="Owl Image">
            <a href="#" class="mentorProfile">View Profile</a>
          </div>

          <div class="item">
            <img src="{{URL::asset('images/Avatar_girl_face.png')}}" alt="Owl Image">
            <a href="#" class="mentorProfile">View Profile</a>
          </div>
          
          <div class="item">
            <img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}" alt="Owl Image">
            <a href="#" class="mentorProfile">View Profile</a>
          </div>

          <div class="item">
            <img src="{{URL::asset('images/tommy_1x.png')}}" alt="Owl Image">
            <a href="#" class="mentorProfile">View Profile</a>
          </div>
          
          <div class="item">
            <img src="{{URL::asset('images/Avatar_girl_face.png')}}" alt="Owl Image">
            <a href="#" class="mentorProfile">View Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                                                {{-- CHALLENGE SECTION START --}}
{{-- 
<div class="_rowChallenge">
  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12">
        <div class="jumbotron">
          <h2>Take learning Challenge</h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
                  
        <div class="owl-demo">
          <div class="item">
            <img src="https://i.ytimg.com/vi/_G7r5WAVwsY/maxresdefault.jpg" alt="Owl Image">
          </div>

          <div class="item">
            <img src="https://www.sololearn.com/Uploads/html-css.jpg" alt="Owl Image">
          </div>

          <div class="item">
            <img src="https://www.sitepoint.com/wp-content/themes/sitepoint/assets/images/icon.javascript.png" alt="Owl Image">
          </div>
                     
          <div class="item">
            <img src="http://media02.hongkiat.com/jquery-selectors/jquery-selectors.jpg" alt="Owl Image">
          </div>
                     
          <div class="item">
            <img src="https://www.gaslampmedia.com/media/bootstrap.png" alt="Owl Image">
          </div>
                     
          <div class="item">
            <img src="https://udemy-images.udemy.com/course/750x422/438552_478d.jpg" alt="Owl Image">
          </div>
          
          <div class="item">
            <img src="http://cdn2.photoblogstop.com/wp-content/uploads/2011/04/Photoshop-Logo-3-01_5067x333_Q100_mini.jpg" alt="Owl Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  --}}                                                {{-- NEWS SECTION START --}}
<div class="rowNews">
  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12">
        <h2>Latest News</h2>
        <hr>
        <div class="well" >
          <i class="fa fa-arrow-right" aria-hidden="true"></i>  
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div class="well">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>  
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <div class="well">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>  
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('owl_js')
  <script src="{{URL::asset('owl-carousel/owl.carousel.min.js')}}"></script> 
  <script>
    $(document).ready(function() {
      $(".owl-demo").owlCarousel({
        autoPlay:2000, //Set AutoPlay to 3 seconds
        pagination : false,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        stopOnHover : true,
      });
      });
  </script>
  <script src="{{URL::asset('js/scrollTop.js')}}"></script>
@endsection
