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
				<h3>Update Profile Pic</h3>
				<hr>
					<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                     {{csrf_field()}}
                @foreach($pics as $pic)
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="image">Image:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" value="{{$pic->image}}" name="image">
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