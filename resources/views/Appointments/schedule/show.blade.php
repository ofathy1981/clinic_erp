@extends('layouts.appointments')
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/about-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:04 GMT -->
<head>
<meta charset="utf-8">
<title>Preschool - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

</head>
<body>




 

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">About Schedule</h5>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Schedules</a></li>
<li class="breadcrumb-item"><span>About Schedule</span></li>
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
<h5 class="text-center mt-2">Schedule Patient Name</h5>
<p class="text-center">{{ $schedule->patient_name}}</p>
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Schedule Status</b><a href="#" class="float-right">{{ $schedule->schedule_status}}</a></li>
<li class="list-group-item"><b>Toal Number Of Services</b><a href="#" class="float-right">{{ $schedule->total_number_of_services}}</a></li>
<li class="list-group-item"><b>Total payment</b><a href="#" class="float-right">
{{ $schedule->total_payment}}</a></li>



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
About Schedule
</h4>
</div>
<div class="card-body">
<p></p>
<ul class="list-group list-group-flush">
<li class="list-group-item"><b>Patient CID</b><a href="#" class="float-right"> {{ $schedule->cid}}</a></li>
<li class="list-group-item"><b>Schedule Nurse</b><a href="#" class="float-right"> {{ $schedule->nurse}}</a></li>
<li class="list-group-item"><b>Room</b><a href="#" class="float-right">    {{ $schedule->room}}	</a></li>
<li class="list-group-item"><b>Schedule Work</b><a href="#" class="float-right">{{ $schedule->work}}</a></li>
<li class="list-group-item"><b>Associated Doctor</b><a href="#" class="float-right"> {{ $schedule->doctor}}</a></li>
<li class="list-group-item"><b>SP Buaty</b><a href="#" class="float-right"> {{ $schedule->sp_beuty}}</a></li>
<li class="list-group-item"><b>Schedule Duration</b><a href="#" class="float-right"> {{ $schedule->duration}}</a></li>

<li class="list-group-item"><b>Patient Case</b><a href="#" class="float-right"> {{ $schedule->case}}</a></li>


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
Schedule Data
</h4>
</div>
                 


           




<div class="card-body">
<div id="biography" class="biography">
<div class="row">
<div class="col-md-3 col-6"> <strong>Schedule Start Date And Time</strong>
<p class="text-muted">{{ $schedule->schedule_start}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Schedule End Date And Time </strong>
<p class="text-muted">
    {{ $schedule->schedule_end}}</p>
</div>
<div class="col-md-3 col-6"> <strong>Patient Hear About Us From</strong>
<p class="text-muted">{{ $schedule->known_us_from}}</p>
</div>
<div class="col-md-3 col-6"> <strong></strong>
<p class="text-muted"></p>
</div>
</div>
<hr>
<p></p>
<hr>
<h4>NOTES</h4>
<hr>
<ul class="list-unstyled">
<li class="list-item">{{ $schedule->notes}}</li>

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