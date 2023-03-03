@extends('layouts.call_center')
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
<h5 class="text-uppercase mb-0 mt-0 page-title">Add contact</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('call_center.index') }}"><I class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">contacts</a></li>
<li class="breadcrumb-item"><span> Add contact</span></li>
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
<form   method="POST" action="{{ route('contact.store') }}">
	@csrf
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="name">
@error('name')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>

<div class="form-group">
	<label>Phone</label>
	<input type="text" class="form-control"   name="phone">
	@error('phone')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" class="form-control" placeholder="&#xF09a; Facebook" style="font-family:Arial, FontAwesome" name="facebook">
		@error('address')
		<small class="form-text text-danger">{{ $message }}</small>
		@enderror
		</div>
		<div class="form-group">
			<label>Instagram</label>
			<input type="text" class="form-control " placeholder="&#xf16d; Instagram" style="font-family:Arial, FontAwesome" name="instgram">
			@error('address')
			<small class="form-text text-danger">{{ $message }}</small>
			@enderror
			</div>
			<div class="form-group">
				<label>Whatsapp</label>
				<input type="text" class="form-control" placeholder="&#xf232; Whatsapp" style="font-family:Arial, FontAwesome" name="whatsapp">
				@error('address')
				<small class="form-text text-danger">{{ $message }}</small>
				@enderror
				</div>

		
		





</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Gender</label>
<select type="text" class="form-control" name="gender">
	<option value="Male">Male</option>
	<option value="Female">Female</option>

</select>
@error('gender')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label>Group</label>
<select type="text" class="form-control" name="group">
	@foreach ($contact_group as $cg)
		<option value="{{ $cg->group_name }}">{{ $cg->group_name }}</option>
	@endforeach
</select>
@error('group')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
	<label>File Number</label>
	<input type="text" class="form-control" name="file_number">
	@error('file_number')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" class="form-control fa-brands fa-facebook" name="address">
		@error('address')
		<small class="form-text text-danger">{{ $message }}</small>
		@enderror
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