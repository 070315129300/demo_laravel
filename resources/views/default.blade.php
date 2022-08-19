

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{config('app.name', 'Friend App')}}</title>
</head>
<body>
	<h3>Homepage</h3>
	@extends('layouts.frontend')

@section('content')
@include('slider')

<div class="container">
		<h3>homepage</h3>
</div>
@endsection
</body>
</html>