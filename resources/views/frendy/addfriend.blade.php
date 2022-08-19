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
			<form method="POST" action="{{route('savefriend')}}">
				@csrf
				<div class="mb-3">
					<label class="form-label">Fullname</label>
					<input type="text" name="fullname" id="fullname" class="form-control" value="{{old('fullname')}}">
				</div>
				<div class="mb-3">
					<label class="form-label">Email address</label>
					<input type="email" name="emailaddress" id="emailaddress" class="form-control"  value="{{old('emailaddress')}}">
				</div>
				<div class="mb-3">
					<label class="form-label">Gender</label>
					<input type="radio" name="gender" id="gender1" class="form-check-input" value="male" @if(old('gender')=='male') checked @endif>
						<label for="gender1">male</label>

				<input type="radio" name="gender" id="gender2" class="form-check-input" value="female" @if(old('gender')=='female') checked @endif>
				<label for="gender2">female</label>
				</div>

				<div class="mb-3">
					<label class="form-label">meet at</label>
					<input type="text" name="meetat" id="meetat" class="form-control" value="{{old('meetat')}}">
				</div>
				<div class="mb-3">
					<label class="form-label">country</label>
					<select name="country" id="country" class="form-select">
						<option value="">choose country</option>
						@foreach($countries as $key=>$value)
						@if(old('country')==$value->country_id)
						<option value="{{$value->country_id}}" selected>{{$value->country_name}}</option>
						@else
							<option value="{{$value->country_id}}">{{$value->country_name}}</option>
							@endif
							@endforeach
					</select>																														
				</div>


				<div class="mb-3">
					<label class="form-label">nickname</label>
					<input type="text" name="nickname" id="nickname" class="form-control"  value="{{old('nickname')}}">
				</div>
				<div class="mb-3">
					<label class="form-label">phone number</label>
					<input type="text" name="phonenumber" id="phonenumber" class="form-control"  value="{{old('phonenumber')}}">
				</div>
				<div class="mb-3">
					<label class="form-label">short description</label>
					<textarea type="text" name="description" id="description" class="form-control"  value="{{old('description')}}"></textarea>

				</div>
				<button type="submit" class="btn btn-primary">add friend</button>
				<button type="reset" class="btn btn-primary">clear</button>
			</form>
		</div>
	</div>
</div>
@endsection