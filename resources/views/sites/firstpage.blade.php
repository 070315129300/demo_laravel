@extends('layouts.frontend')

@section('pagetitle', $title)

@section('content')

<div>
	<h3>our students</h3>
	@php
		echo "<pre>"; 
		print_r($students);
		echo "</pre>"; 
	@endphp
</div>

<div>
	<h3> list of students with pictures</h3>
	<div class="container">
		<div class="row">
			@php 
		 foreach($students as $key => $value){
		 	$text = $value[0];
		 	$image = $value[1];
		@endphp
			<div class="col-md-4">
				<img src="images/@php echo $image @endphp" style="width:150px;height:150px">
				<p>@php echo $text  @endphp</p>
			</div>
		</div>
		<div>
			@php
		}

			@endphp
		</div>
	</div>

</div>



@endsection