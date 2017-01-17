@extends('layouts.master')

@section('title')
updateprofile
@endsection

                                                {{-- UPDATE PAGE START HERE --}}

@section('updateprofile')

<div id="row_updateprofile">
	<div class="row">
		<div class="container">
			<div class="updateprofile">
				<div class="col-sm-2">
					
				</div>
				<div class="update col-sm-8">
				<h3>Update Profile</h3>
				<hr>
					<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                     {{csrf_field()}}
                @foreach($users as $user)
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Username:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{$user->username}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">Proficiency:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="proficiency" placeholder="Enter proficiency" value="{{$user->proficiency}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="qualification">Qualification:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="qualification" placeholder="Enter qualification" value="{{$user->proficiency}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location">Location:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder="Enter location" value="{{$user->location}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">City:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="city" placeholder="Enter city" value="{{$user->city}}">
                            </div>
                        </div>
{{--  --}}

                     

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="city">Dob:</label>
                        
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="dob" value="{{$user->dob}}">
                            </div>
                        </div>
                          
  
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>

                        
                    </form>
				</div>
                @endforeach
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection