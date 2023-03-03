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
<h5 class="text-uppercase mb-0 mt-0 page-title">Edit Patient</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><I class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Patients</a></li>
<li class="breadcrumb-item"><span> Add Patient</span></li>
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
<form  action="{{ route('patient.update',$patient->id)}}" method="POST">
	@csrf
	@method('PUT')
	<input type="hidden" name="_method" value="PUT">
<div class="form-group">
<label>Firstname</label>
<input type="text" class="form-control" name="first_name"  value="{{ $patient->first_name }}">
</div>
<div class="form-group">
	<label>File Number</label>
	<input type="text" class="form-control" name="file_number"  value="{{ $patient->file_number }}">
	</div>
<div class="form-group">
<label>Nationality</label>
<input type="text" class="form-control" name="nationality"  value="{{ $patient->nationality }}">
</div>
<div class="form-group" name="social_case">
	<label>social_case</label>
	<select class="form-control select" name="social_case"  value="{{ $patient->social_case }}">

		
	<option value="Single">Single</option>
	<option value="Married">Married</option>
	</select>
</div>


<div class="form-group">
	<label>CID</label>
	<input type="text" class="form-control" name="cid"  value="{{ $patient->cid }}">
	</div>






<div class="form-group">
<label>Birth Date</label>
<input class="form-control datetimepicker-input datetimepicker" type="date" data-toggle="datetimepicker" name="date_of_birth"  value="{{ $patient->date_of_birth }}">
</div>

<div class="form-group">
	<label>Blood Type</label>
	<select style="width: 100%" class="form-control select" name="blood_type"  value="{{ $patient->blood_type }}">
	
	
	
	<option value="O_negative">O_negative</option>
	<option value="O_positive">O_positive </option>
	<option value="A_negative">A_negative </option>
	<option value="A_positive">A_positive </option>
	<option value="B_negative">B_negative</option>
	<option value="B_positive">B_positive </option>
	<option value="AB_positive">AB_positive</option>
	<option value="AB_positive">AB_positive</option>
	</select>
	</div>

	<div class="form-group">
		<label>Weight</label>
		<input type="text" class="form-control" name="weight"  value="{{ $patient->weight }}">
		</div>
		<div class="form-group">
			<label>Length</label>
			<input type="text" class="form-control" name="length"  value="{{ $patient->length }}">
			</div>
		<div class="form-group">
		<label> Patient case</label>
		<input type="text" class="form-control" name="case"  value="{{ $patient->case }}">
		</div>
		<div class="form-group">
		<label>has_allegric_to_medicine</label>
		<input type="text" class="form-control" name="has_allegric_to_medicine"  value="{{ $patient->has_allegric_to_medicine }}">
		</div>
		<div class="form-group">
		<label>credit_balance</label>
		<input type="text" class="form-control" name="credit_balance"  value="{{ $patient->credit_balance }}">
		</div>

		<div class="form-group">
		<label>known_us_from</label>
		<input type="text" class="form-control" name="known_us_from"  value="{{ $patient->known_us_from }}">
		</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">

<div class="form-group">
<label>Father Name</label>
<input type="text" class="form-control" name="father_name"  value="{{ $patient->father_name }}">
</div>
<div class="form-group">
<label>patient_type</label>
<input type="text" class="form-control" name="patient_type"  value="{{ $patient->patient_type }}">
</div>

<div class="form-group">
	<label>Gender</label>
	<select class="form-control select" name="gender"  value="{{ $patient->gender }}">
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>


<div class="form-group">
<label>Mobile number</label>
<input type="text" class="form-control" name="mobile"  value="{{ $patient->mobile }}">
</div>
<div class="form-group">
<label>Tel.</label>
<input type="text" class="form-control" name="tel"  value="{{ $patient->tel }}">
</div>

<div class="form-group" name="social_case"  >
	<label>Smoking</label>
	<select class="form-control select" name="smoking"  value="{{ $patient->smoking }}">
	<option value="Smoke">Smoke</option>
	<option value="No-Smoke">No-Smoke</option>
	</select>
</div>
<div class="form-group">
<label>Address Area</label>
<input type="text" class="form-control" name="address_area"  value="{{ $patient->address_area }}">
</div>
<div class="form-group">
	<label>Address</label>
	<input type="text" class="form-control" name="address"  value="{{ $patient->address }}">
	</div>

	<div class="form-group">
		<label>work_address</label>
		<input type="text" class="form-control" name="work_address"  value="{{ $patient->work_address }}">
		</div>

		<div class="form-group">
			<label>job </label>
			<input type="text" class="form-control" name="job"  value="{{ $patient->job }}">
			</div>
			<div class="form-group">
				<label>debit_balance</label>
				<input type="text" class="form-control" name="debit_balance"  value="{{ $patient->debit_balance }}">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email"  value="{{ $patient->email }}">
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