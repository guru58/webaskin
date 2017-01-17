@extends('layouts.master')
@section('title')
profile
@endsection

                                        {{-- PROFILE PAGE START HERE --}}

@section('profile')

<div id="row_profile">
	<div class="row">
		<div class="container">
		<div class="profile_box">
		    <div class="col-sm-2"></div>
            @foreach($users as $user)
            <div class="profile col-sm-3 col-md-3">

              @if($user->image == null)
           <a href="/updatepic/{{$user->id}}" data-toggle="tooltip" title="Upload your profile pic!" ><img src="{{URL::asset('images/main-qimg-d5342af4207d0ac3a7d43a4a930ea571.png')}}" alt="profile_img" /></a>
           @else
            <a href="/updatepic/{{$user->id}}" data-toggle="tooltip" title="Update Profile Pic!" ><img src="{{URL::asset('images/'.$user->image.'')}}" alt="profile_img" /></a>
            @endif
				<hr>
				<div class="table-responsive">          
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Votes</th>
                                <th>Asks</th>
                                <th>Answers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               <td>1000</td>
                               <td>98</td>
                               <td>12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			</div>




			<div class="info col-sm-4">
			<h3>Profile Info - 
                <a href="/updateprofile/{{$user->id}}" class="editLink">
                    <button class="btn btn-info">Edit</button>
                </a>
            </h3>
			<hr>
				<div class="table-responsive">          
                    <table class="table">
                        <thead>             
                            <tr>
                                <th>Name</th>
                                <th>{{ $user->username }}</th>
                            </tr>
                            <tr>
                                <th>Proficiency</th>
                                <th>{{$user->proficiency}}</th>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <th>{{$user->location}}</th>
                            </tr>
                            <tr>
                                <th>City</th>
                                <th>{{$user->city}}</th>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <th>{{$user->gender}}</th>
                            </tr>
                            <tr>
                                <th>DOB</th>
                                <th>{{$user->dob}}</th>
                            </tr>


                               @endforeach
        
                        </thead>
                    </table>
                </div>
        	</div>
			<div class="col-sm-3 col-md-3">
				
			</div>
		</div>	
		</div>
	</div>
</div>


@endsection
