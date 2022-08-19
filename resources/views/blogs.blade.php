@extends('layouts.frontend')
<div class="container mt-5">
<div class="row">
	<div class="col-md-11">
		<img src="{{asset('images/wellDone1.png')}}">
		<p style="float: left;">my name is caleb<br>
		Uncaught mysqli_sql_exception: Table 'repair_it.contact_us' doesn't exist in C:\xampp\htdocs\repairIt\shared\customer.php:109 Stack trace: #0 C:\xampp\htdocs\repairIt\shared\customer.php(109): mysqli->prepare('INSERT INTO con...') #1 C:\xampp\htdocs\repairIt\contact.php(12): Customer->contactus('', '', NULL) #2 {main} thrown in </p>
	</div>

	<div class="col-md-1">
		<div class="row">
			@include('sidebar')
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-11">
		<h1>welcome</h1>
	</div>

	
</div>
<div class="row">
	<div class="col-md-4">hello
	<img src="{{asset('images/wellDone1.png')}}"></div>
	<div class="col-md-4">world
	<img src="{{asset('images/wellDone1.png')}}"></div>
	<div class="col-md-4">hello-world
	<img src="{{asset('images/wellDone1.png')}}"></div>
</div>	
</div>