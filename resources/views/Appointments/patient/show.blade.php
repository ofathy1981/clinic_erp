@extends('layouts.appointments')
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/about-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:04 GMT -->
<head>
<meta charset="utf-8">
<title>Patient Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

</head>
<body>




 

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">About Patient</h5>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Patients</a></li>
<li class="breadcrumb-item"><span>About Parent</span></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="aboutprofile-sidebar">
<div class="row">
<div class="col-lg-3 col-md-12 col-sm-12 col-12">
<div class="aboutprofile">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="aboutprofile-pic">
<img class="card-img-top" src="{{ asset('assets/img/user.jpg')}}"  alt="Card image">
</div>
<div class="aboutprofile-name">
<h5 class="text-center mt-2">{{ $patient->first_name}}</h5>
<p class="text-center">     {{ $patient->father_name}}</p>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>mobile</b><a href="#" class="float-right"> {{ $patient->mobile}}</a></li>
<li class="list-group-item"><b>CID</b><a href="#" class="float-right">{{ $patient->cid}}</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="aboutme-profile">
<div class="card">
<div class="card-header">
<h4 class="page-title">
About {{ $patient->first_name}}
</h4>
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Gender</b><a href="#" class="float-right">{{ $patient->gender}}</a></li>
<li class="list-group-item"><b>Date of Birth</b><a href="#" class="float-right">{{ $patient->date_of_birth}}	</a></li>
<li class="list-group-item"><b>Date of Birth</b><a href="#" class="float-right">{{ $patient->social_case}}	</a></li>

<li class="list-group-item"><b>Email</b><a href="#" class="float-right">{{ $patient->email}}</a></li>
<li class="list-group-item"><b>address area</b><a href="#" class="float-right">{{ $patient->address_area}}	</a></li>
<li class="list-group-item"><b>address </b><a href="#" class="float-right">{{ $patient->address}}	</a></li>

<li class="list-group-item"><b>Date of Birth</b><a href="#" class="float-right">10/12/1988</a></li>
<li class="list-group-item"><b>Phone number</b><a href="#" class="float-right">{{ $patient->tel}}</a></li>
<li class="list-group-item"><b>Nationality</b><a href="#" class="float-right">{{ $patient->nationality }}</a></li>
<li class="list-group-item"><b>Work Address</b><a href="#" class="float-right">{{ $patient->work_address}}</a></li>
<li class="list-group-item"><b>Hear About us From</b><a href="#" class="float-right">{{ $patient->known_us_from}}</a></li>

<li class="list-group-item"><b>Position</b><a href="#" class="float-right">{{ $patient->job}}</a></li>
<li class="list-group-item"><b>Credit Balance</b><a href="#" class="float-right">{{ $patient->credit_balance}}</a></li>
<li class="list-group-item"><b>Debit Balance</b><a href="#" class="float-right">{{ $patient->debit_balance}}</a></li>



      





</ul>
</div>
</div>
</div>
<div class="aboutprofile-address">

</div>
</div>
<div class="col-lg-9 col-md-12 col-sm-12 col-12">
<div class="profile-content">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4 class="page-title">
Medical Profile
</h4>
</div>

<div class="card-body">
<div id="biography" class="biography">
<div class="row">
<div class="col-md-3 col-6"> <strong>{{ $patient->first_name}} {{ $patient->father_name}}</strong>

</div>

</div>
<hr>

<hr>
<h4>Physical Data</h4>
<hr>

<h4>Patient Type</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->patient_type}}</li>


</ul>
<h4>Patient Blood Type</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->blood_type}} </li>
</ul>
<h4>Patient Type</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->patient_type}}</li>


</ul><h4>Smooking</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->smoking}}</li>


</ul><h4>Weight</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->weight}}</li>


</ul><h4>Length</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->length}}</li>


</ul><h4>Patient Case</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->case}}</li>


</ul><h4>has allegric to medicine</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $patient->has_allegric_to_medicine}}</li>


</ul>



















</div>
</div>
</div>
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

</div>


</body>

</html>