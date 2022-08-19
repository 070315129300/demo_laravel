@extends('layouts.frontend')

@section('pagetitle', 'FAQ')

@section('content')

<div class="container">
	<h3>FAQ</h3>
	<h2>show</h2>
	<img src="{{asset('images/champ2.jpeg')}}" width="200px">
	<h4>{{$fullname}}</h4>
	<p>@php echo $mytext @endphp

	{!!$mytext!!}</p>
	<h3>list of student</h3>
	<ul>
		@foreach($students as $key=>$value)
		<li>{{$value}}</li>
		@endforeach

		@for($k = 0; $k < count($students); $k++ )
		<li>{{$students[$k]}}</li>
			@endfor
	</ul>

	


	<form method="get" action="">
		<input type="text" name="fullname">
		<button type="submit" name="submit">send</button>
	</form>

</div>
@endsection