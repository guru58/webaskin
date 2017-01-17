@extends('layouts.master')
@section('dashboard')

<div class="container-fluid">
	<div class="row">
		<div class="menu col-sm-2 col-md-2">
			@include('admin.menu')
		</div>
		<div class="dashboard col-sm-10 col-md-10">
			<h2>Welcome To Dashboard!</h2>
			<hr/>
		</div>
	</div>
</div>

@endsection