@extends('layouts.frontend')

@section('pagetitle', 'Academy')

@section('content')

<div class="container mt-5">
	<h3>Student Details</h3>
	<p>
		Fullname: {{$fullname ?? ''}} <br>
		DOB: {{$dateofbirth ?? ''}}<br>

		scores:
		<ul>
			@foreach($scores as $key=>$item)
			<li>{{$key}} : {{$item}}</li>
			@endforeach
		</ul>
	</p>
</div>
@endsection