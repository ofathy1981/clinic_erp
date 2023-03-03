@extends('layouts.appointments')
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/all-parents.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:02 GMT -->
<head>
<meta charset="utf-8">
<title>Roses Clinic - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>




@section('content')


<div class="page-wrapper">
	<div class="content container-fluid">
	<div class="page-header">
	<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
	<h5 class="text-uppercase mb-0 mt-0 page-title">Schedules list</h5>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
	<ul class="breadcrumb float-right p-0 mb-0">
	<li class="breadcrumb-item"><a href="index.html"><I class="fas fa-home"></i> Home</a></li>
	<li class="breadcrumb-item"><a href="index.html">Schedules</a></li>
	<li class="breadcrumb-item"><span> Schedules list</span></li>
	</ul>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-4 col-12">
	</div>
	<div class="col-sm-8 col-12 text-right add-btn-col">
	<a href="{{ route('schedule.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fas fa-plus"></i> Add schedule</a>
	<div class="view-icons">
	<a href="{{ route('schedule.index') }}"class="grid-view btn btn-link"><i class="fas fa-th"></i></a>
	<a href="{{ route('schedule.index2') }}" class="list-view btn btn-link active"><i class="fas fa-bars"></i></a>
	</div>
	</div>
	</div>
	<div class="content-page">
	<div class="row filter-row">
	<div class="col-sm-6 col-md-3">
	<div class="form-group form-focus">
	<input type="text" class="form-control floating">
	<label class="focus-label">Parents ID</label>
	</div>
	</div>
	<div class="col-sm-6 col-md-3">
	<div class="form-group form-focus">
	<input type="text" class="form-control floating">
	<label class="focus-label">Parents Name</label>
	</div>
	</div>
	<div class="col-sm-6 col-md-3">
	<div class="form-group form-focus">
	<input type="text" class="form-control floating">
	<label class="focus-label">Mobile</label>
	</div>
	</div>
	<div class="col-sm-6 col-md-3">
	<a href="#" class="btn btn-search rounded btn-block mb-3"> search </a>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12 mb-3">
	<div class="table-responsive">
	<table class="table custom-table datatable">
	<thead class="thead-light">
	<tr>
		<th></th>
		<th>patient name </th>
		<th>schedule start date</th>
		<th>schedule_end date</th>
		<th>work</th>
		<th>duration</th>
	<th class="text-right">Action</th>
	</tr>
	</thead>
	<tbody>

		@foreach ($schedule as $item)
	

	<tr>
	<td>
	<h2><a href="{{route('schedule.show',$item->id)}}" class="avatar text-white">W</a><a href="{{route('schedule.show',$item->id)}}">{{ $item->first_name}} {{ $item->father_name}}<span></span></a></h2>
	</td>

	<td>{{ $item->patient_name }}</td>
	<td>{{$item->schedule_start    }}</td>
	<td>{{$item->schedule_end}}</td>
	<td>{{$item->work}}</td>
	<td>{{$item->duration}}</td>
	<td class="text-right">
	<a href="{{  route('schedule.edit',$item->id) }}" class="btn btn-primary btn-sm mb-1">
	<i class="far fa-edit"></i>
	</a>
	<button type="submit" data-toggle="modal" data-id={{$item->id}} data-target="#delete_schedule" class="btn btn-danger btn-sm mb-1 ">
	<i class="far fa-trash-alt"></i>
	</button>
	</td>
	</tr>

@endforeach






	</tbody>
	</table>
	</div>
	</div>
	</div>
	</div>
	<div class="notification-box">
	<div class="msg-sidebar notifications msg-noti">
	<div class="topnav-dropdown-header">
	<span>Messages</span>
	</div>
	<div class="drop-scroll msg-list-scroll">
	<ul class="list-box">
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">R</span>
	</div>
	<div class="list-body">
	<span class="message-author">Richard Miles </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item new-message">
	 <div class="list-left">
	<span class="avatar">J</span>
	</div>
	<div class="list-body">
	<span class="message-author">Ruth C. Gault</span>
	<span class="message-time">1 Aug</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">T</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Tarah Shropshire </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">M</span>
	</div>
	<div class="list-body">
	<span class="message-author">Mike Litorus</span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">C</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Catherine Manseau </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">D</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Domenic Houston </span>
	 <span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">B</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Buster Wigton </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">R</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Rolland Webber </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">C</span>
	</div>
	<div class="list-body">
	<span class="message-author"> Claire Mapes </span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">M</span>
	</div>
	<div class="list-body">
	<span class="message-author">Melita Faucher</span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	 </div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">J</span>
	</div>
	<div class="list-body">
	<span class="message-author">Jeffery Lalor</span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">L</span>
	</div>
	<div class="list-body">
	<span class="message-author">Loren Gatlin</span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	<li>
	<a href="chat.html">
	<div class="list-item">
	<div class="list-left">
	<span class="avatar">T</span>
	</div>
	<div class="list-body">
	<span class="message-author">Tarah Shropshire</span>
	<span class="message-time">12:28 AM</span>
	<div class="clearfix"></div>
	<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
	</div>
	</div>
	</a>
	</li>
	</ul>
	</div>
	<div class="topnav-dropdown-footer">
	<a href="chat.html">See all messages</a>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div id="delete_schedule" class="modal" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content modal-md">
	<div class="modal-header">
	<h4 class="modal-title">Delete schedule</h4>
	</div>
			<form action="" method="POST" id="delfrm">
            @csrf
            @method('DELETE')
			<input type="hidden" name="_method" value="DELETE">

	<div class="modal-body">

	<p>Are you sure want to delete this?</p>
	<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>

			{{-- <input type="hidden" name="id" id="cat_id" value="4"> --}}

	  <button type="submit" class="btn btn-danger">Delete</button>
	</div>
	</div>
		</form>
	</div>
	</div>
	</div>
	</div>
	</div>


@endsection


{{-- <script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>
--}}

</body>
{{-- src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"  --}}
@section('scrpt')

	    <script type="text/javascript" >

$('#delete_schedule').on('show.bs.modal', function (event) {

	  

	  var pid = $(event.relatedTarget).data('id');
	  console.log(pid);
	  var form = document.getElementById('delfrm');
	  ;
	  form.action ="{{route('schedule.destroy', '')}}"+"/"+pid;

});


</script> 
	@endsection
</html>
