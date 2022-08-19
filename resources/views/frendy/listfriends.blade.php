@extends('layouts.app')

@section('pagetitle', 'List Friends')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>list of friends</h2>
			<a href="{{route('addfriend')}}" class="btn btn-primary">add new friend</a>
			@if(session('success'))
				<div class="alert alert-success">{{session('success')}}</div>
			@endif
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Fullname</th>
						<th>Email Address</th>
						<th>Nickname</th>
						<th>Gender</th>
						<th>Phone Number</th>
						<th>MeetAt</th>
						<th>Country</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@php $counter = 0; @endphp 
					@foreach($friends as $key=>$value)
						<tr>
							
							<td>{{++$counter}}</td>
							<td>{{$value->fullname ?? ''}}</td>
							<td>{{$value->emailaddress ?? ''}}</td>
							<td>{{$value->nickname ?? ''}}</td>
							<td>{{$value->gender ?? ''}}</td>
							<td>{{$value->phonenumber ?? ''}}</td>
							<td>{{$value->meetat ?? ''}}</td>
							<td>{{$value->country_name ?? ''}}</td>
							<td>
								<a href="{{route('editfriend', ['id'=>$value->friend_id])}}" class="btn-warning">EDIT|</a>
								<button type="button" name="btnDelete" id="btnDelete{{$value->friend_id}}" class="btn btn-link" data-id="{{$value->friend_id}}" data-name="">Delete</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{asset('jq/jquery.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('[id^=btnDelete]').click(function(){

			var friendid = $(this).attr('data-friendid');
			var fullname =$(this).attr('data-name');
		var myconfirm = confirm('are you sure you want to delete this record'+fullname +'record?');
		var baseurl = "{{url('/')}}";

		 //alert(baseurl);
		if(myconfirm == true){
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: baseurl+"/deletefriend/"+friendid,
				type:"DELETE",
				success: function(response){
					// redirect to all
					window.location = baseurl+"allfriends";
				}
			})
		}	
		});
		
	});
</script>
@endsection