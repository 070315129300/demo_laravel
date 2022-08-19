@extends('layouts.app')

@section('pagetitle', $title)

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Add Friend</h2>
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				
			</div>
			@endif
			<form method="POST" action="{{route('saveprofilephoto')}}" enctype="multipart/form-data">
				@csrf
				<div>
					<label>picture</label><br>
					<input type="file" name="photo" id="photo" class="form-control"><br>
				</div>
		
				<button type="submit" class="btn btn-primary">add prifile photo</button>
				
			</form>
		</div>
	</div>
</div>
@endsection