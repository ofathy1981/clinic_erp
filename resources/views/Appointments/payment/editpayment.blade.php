@extends('layouts.appointments')
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/add-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:04 GMT -->
<head>
<meta charset="utf-8">
<title>Roses clinic - Bootstrap Admin Template</title>
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
<h5 class="text-uppercase mb-0 mt-0 page-title">Edit payments</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><I class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">paymentss</a></li>
<li class="breadcrumb-item"><span> Add payments</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<form  action="{{ route('payments.update',$payment->id)}}" method="POST">
	@csrf
	@method('PUT')
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>payments name</label>
		<input type="text" class="form-control" name="patient_name" value="{{ $payment->patient_name}}">
		</div>
		
		
		<div class="form-group">
			<label>CID</label>
			<input type="text" class="form-control" name="cid" value="{{ $payment->cid}}">
			</div>
		
		
		
		
		
		
		<div class="form-group">
		<label>Payment Date</label>
		<input class="form-control datetimepicker-input datetimepicker" type="date" data-toggle="datetimepicker" name="pament_date" value="{{ $payment->pament_date}}">
		</div>
		<div class="form-group">
			<label>Total</label>
			<input type="text" class="form-control" name="total" value="{{ $payment->total}}">
			</div>
		</div>
</div>

{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Premanent Address</label>
<textarea class="form-control" rows="4"></textarea>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Parent Image</label>
<input type="file" name="pic" accept="image/*" class="form-control">
</div>

</div> --}}
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary mr-2" type="submit">Submit</button>
<button class="btn btn-secondary" type="reset">Cancel</button>
</div>
</form>

<div class="card">
	<div class="card-header">
		SERVICES 



		<table class="table custom-table datatable">
			<thead class="thead-light">
			<tr>
			<th>Service Name </th>
			<th>Service Price</th>

			<th class="text-right">Action</th>
			</tr>
			</thead>
			<tbody>
		
				@foreach ($payment_service as $item)
			
		
			<tr>

			<td>{{ $item->service_name }}</td>
			<td>{{$item->service_price    }}</td>

			<td class="text-right">
			<a href="{{  route('payment_service.edit',$item->id) }}" class="btn btn-primary btn-sm mb-1">
			<i class="far fa-edit"></i>
			</a>


			<form action="{{  route('payment_service.destroy',$item->id)}}" method="POST">
				@csrf
				@method('DELETE')
			  
			<button type="submit"   class="btn btn-danger btn-sm mb-1 ">
			<i class="far fa-trash-alt"></i>
			</button></form>
			</td>
			</tr>
		@endforeach
		<a class="btn btn-primary" href="{{  route('paymentservice.create',$payment->id) }}">+ADD</a>

		
		
		
		
		
			</tbody>
			</table>
	</div>
</div>

<div class="card">
	<div class="card-header">
		MEDICINES 



		<table class="table custom-table datatable">
			<thead class="thead-light">
			<tr>
			<th>Medicine  Name </th>
			<th>Medicine Quantity</th>

			<th class="text-right">Action</th>
			</tr>
			</thead>
			<tbody>
		
				@foreach ($payment_medicine as $item)
			
		
			<tr>

			<td>{{ $item->medicine_name }}</td>
			<td>{{$item->medicine_quantity    }}</td>

			<td class="text-right">
			<a href="{{  route('payment_medicine.edit',$item->id) }}" class="btn btn-primary btn-sm mb-1">
			<i class="far fa-edit"></i>
			</a>


			<form action="{{  route('payment_medicine.destroy',$item->id)}}" method="POST">
				@csrf
				@method('DELETE')
			  
			<button type="submit"   class="btn btn-danger btn-sm mb-1 ">
			<i class="far fa-trash-alt"></i>
			</button></form>
			</td>
			</tr>
		@endforeach
		<a class="btn btn-primary" href="{{  route('paymentmedicine.create',$payment->id) }}">+ADD</a>

		
		
		
		
		
			</tbody>
			</table>
	</div>
</div>
</div>
</div>
</div>
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

@endsection

</body>

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/add-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:04 GMT -->
</html>