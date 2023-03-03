<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roses Clinic</title>
    <script src="{{ asset ('assets/js/jquery-3.6.0.min.js')}}"></script>
@yield('tok')
{{-- https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css --}}


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> --}}
    <script src="{{ asset ('assets/js/jquery-3.6.0.min.js')}}"></script>
   @livewireStyles 
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset ('assets/dt/jquery.datetimepicker.css')}}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset ('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

{{-- <link rel="stylesheet" href="{{ asset ('assets/css/fullcalendar.min.css')}}"> --}}

<link rel="stylesheet" href="{{ asset ('assets/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{ asset ('assets/plugins/morris/morris.css')}}">

<link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}">








</head>
<body>
    <div class="main-wrapper">

    


<div class="header-outer">
    <div class="header">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
    <a id="toggle_btn" class="float-left" href="javascript:void(0);">
    <img src="assets/img/sidebar/icon-21.png" alt="">
    </a>
    
    <ul class="nav float-left">
    <li>
    <div class="top-nav-search">
    <a href="javascript:void(0);" class="responsive-search">
    <i class="fa fa-search"></i>
    </a>
    <form action="https://dreamguystech.com/preadmin/html/school/light/search.html">
    <input class="form-control" type="text" placeholder="Search here">
    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
    </li>
    <li>
    <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
    </li>  

    </ul>
    
    <ul class="nav user-menu float-right">
        <li class="fa " ><div><a href="{{ route('home')}}"><img src="{{ asset ('assets/img/sidebar/icon-1.png')}}" alt="icon"><span >PORTAL</span></a></div></li>

    <li class="nav-item dropdown d-none d-sm-block">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
    <img src="assets/img/sidebar/icon-22.png" alt="">
    </a>
    <div class="dropdown-menu notifications">
    <div class="topnav-dropdown-header">
    <span>Notifications</span>
    </div>
    <div class="drop-scroll">
    <ul class="notification-list">
    <li class="notification-message">
    <a href="activities.html">
    <div class="media">
    <span class="avatar">
    <img alt="John Doe" src="assets/img/user-06.jpg" class="img-fluid rounded-circle">
    </span>
    <div class="media-body">
    <p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
    </div>
    </div>
    </a>
    </li>
    <li class="notification-message">
    <a href="activities.html">
    <div class="media">
    <span class="avatar">T</span>
    <div class="media-body">
    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
    </div>
    </div>
    </a>
    </li>
    <li class="notification-message">
    <a href="activities.html">
    <div class="media">
    <span class="avatar">L</span>
    <div class="media-body">
    <p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
    </div>
    </div>
    </a>
    </li>
    <li class="notification-message">
    <a href="activities.html">
    <div class="media">
    <span class="avatar">G</span>
    <div class="media-body">
    <p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
    </div>
    </div>
    </a>
    </li>
    <li class="notification-message">
    <a href="activities.html">
    <div class="media">
    <span class="avatar">T</span>
    <div class="media-body">
    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
    </div>
    </div>
    </a>
    </li>
    </ul>
    </div>
    <div class="topnav-dropdown-footer">
    <a href="activities.html">View all Notifications</a>
    </div>
    </div>
    </li>
    <li class="nav-item dropdown d-none d-sm-block">
    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
    </li>
     <li class="nav-item dropdown has-arrow">
    <a href="#" class=" nav-link user-link" data-toggle="dropdown">
    <span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg" width="30" alt="Admin">
    <span class="status online"></span></span>
    <span>Admin</span>
    </a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="profile.html">My Profile</a>
    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
    <a class="dropdown-item" href="settings.html">Settings</a>

    <a class="dropdown-item"  role="button"  href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form> 
    
    </div>
    </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right"> 
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="profile.html">My Profile</a>
    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
    <a class="dropdown-item" href="settings.html">Settings</a>
    <a class="dropdown-item" href="login.html">Logout</a>
    </div>
    </div>
    </div>
</div>
    
    
<div class="sidebar" id="sidebar">
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
                                    <div class="header-left">
                                    <a href="{{ route('home')}}" class="logo">
                                    <img src="{{ asset ('assets/img/Roses-svg-logo.svg')}}" width="90" height="90" alt="">
                                    {{-- <span class="text-uppercase">Roses Clinic</span> --}}
                                    </a>
                                    </div>
                                    <ul class="sidebar-ul">
                                    <li class="menu-title">Menu</li>
                                    @if(Route::current()->getName() != 'home')
                                    <li >
                                    <a href="{{ route('appointments.index') }}"><img src="{{ asset ('assets/img/sidebar/icon-1.png')}}" alt="icon"><span>Dashboard</span></a>
                                    </li>
                                    @else
                                    <li class="active">
                                        <a href="index.html"><img src="{{ asset ('assets/img/sidebar/icon-1.png')}}" alt="icon"><span>Dashboard</span></a>
                                        </li>
                                    @endif
                                    <li class="submenu">   
                                    @if(Route::current()->getName() == 'patient.index'|| Route::current()->getName() == 'patient.create'|| Route::current()->getName() == 'patient.edit')
                                    <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/icon-2.png')}}" width="35" height="35" alt="icon"> <span> Patients</span> <span class="menu-arrow"></span></a>
                                        <ul class="list-unstyled" style="display: none;">


                                    @else  
                                    <a href="#" class=""><img src="{{ asset ('assets/img/sidebar/icon-2.png')}}" width="35" height="35" alt="icon"> <span> Patients</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        @endif      

                                    @if(Route::current()->getName() == 'patient.index')
                                    
                                            <li  ><a  class="active" href="{{ route('patient.index') }}"><span>All Patients</span></a></li>
                                            <li><a href="{{ route('patient.create') }}"><span>Add Patient</span></a></li>
                                            <li><a href="{{ route('patient.index2') }}"><span>Edit Patient</span></a></li>
                                            </ul>
                                            </li>
                                    @elseif(Route::current()->getName() == 'patient.create')
                                        <li ><a  href="{{ route('patient.index') }}"><span>All Patients</span></a></li>
                                        <li><a class="active" href="{{ route('patient.create') }}"><span>Add Patient</span></a></li>
                                        <li><a href="{{ route('patient.index2') }}"><span>Edit Patient</span></a></li>
                                        </ul>
                                        </li>
                                    @elseif(Route::current()->getName() == 'patient.index2')
                                    <li ><a  href="{{ route('patient.index') }}"><span>All Patients</span></a></li>
                                    <li><a  href="{{ route('patient.create') }}"><span>Add Patient</span></a></li>
                                    <li><a class="active" href="{{ route('patient.index2') }}"><span>Edit Patient</span></a></li>
                                    </ul>
                                    </li>

                                    @else
                                    <li ><a  href="{{ route('patient.index') }}"><span>All Patients</span></a></li>
                                    <li><a  href="{{ route('patient.create') }}"><span>Add Patient</span></a></li>
                                    <li><a class="" href="{{ route('patient.index2') }}"><span>Edit Patient</span></a></li>
                                    </ul>
                                    </li>


                                    @endif


                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">



                                    @if(Route::current()->getName() == 'schedule.index'|| Route::current()->getName() == 'schedule.create'|| Route::current()->getName() == 'schedule.edit'|| Route::current()->getName() == 'schedule.calender')

                                        <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/icon-3.png')}}" width="35" height="35" alt="icon"> <span> Schedules</span> <span class="menu-arrow"></span></a>
                                        <ul class="list-unstyled" style="display: none;">
                                    @else
                                        <a href="#" class=""><img src="{{ asset ('assets/img/sidebar/icon-3.png')}}" width="35" height="35" alt="icon"> <span> Schedules</span> <span class="menu-arrow"></span></a>
                                        <ul class="list-unstyled" style="display: none;">
                                    @endif        


                                    @if(Route::current()->getName() == 'schedule.index')
                                    <li><a href="{{ route('schedule.calender') }}"><span>Appointment Scheduler</span></a></li>
                                    <li><a href="{{ route('schedule.index') }}" class="active" ><span>All Schedules</span></a></li>
                                    <li><a href="{{ route('schedule.create') }}"><span>Add Schedule</span></a></li>
                                    <li><a href="{{ route('schedule.index2') }}"><span>Edit Schedule</span></a></li>

                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'schedule.create')
                                    <li><a href="{{ route('schedule.calender') }}"><span>Appointment Scheduler</span></a></li>

                                    <li><a href="{{ route('schedule.index') }}"><span>All Schedules</span></a></li>
                                    <li><a href="{{ route('schedule.create') }}" class="active" ><span>Add Schedule</span></a></li>
                                    <li><a href="{{ route('schedule.index2') }}"><span>Edit Schedule</span></a></li>
                                    </ul>
                                    </li>
                                    @elseif(Route::current()->getName() == 'schedule.index2')
                                    <li><a href="{{ route('schedule.calender') }}"><span>Appointment Scheduler</span></a></li>

                                    <li><a href="{{ route('schedule.index') }}"><span>All Schedules</span></a></li>
                                    <li><a href="{{ route('schedule.create') }}"><span>Add Schedule</span></a></li>
                                    <li><a href="{{ route('schedule.index2') }}" class="active" ><span>Edit Schedule</span></a></li>
                                    </ul>
                                    </li>
                                    @elseif(Route::current()->getName() == 'schedule.calender')
                                    <li><a href="{{ route('schedule.calender') }}" class="active" ><span>Appointment Scheduler</span></a></li>

                                    <li><a href="{{ route('schedule.index') }}"><span>All Schedules</span></a></li>
                                    <li><a href="{{ route('schedule.create') }}"><span>Add Schedule</span></a></li>
                                    <li><a href="{{ route('schedule.index2') }}"  ><span>Edit Schedule</span></a></li>
                                    </ul>
                                    </li>
                                    @else
                                    <li><a href="{{ route('schedule.calender') }}"><span>Appointment Scheduler</span></a></li>

                                    <li><a href="{{ route('schedule.index') }}"><span>All Schedules</span></a></li>
                                    <li><a href="{{ route('schedule.create') }}"><span>Add Schedule</span></a></li>
                                    <li><a href="{{ route('schedule.index2') }}"><span>Edit Schedule</span></a></li>
                                    </ul>
                                    </li>


                                    @endif



                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">
                                    @if(Route::current()->getName() == 'doctor.index'|| Route::current()->getName() == 'doctor.create'|| Route::current()->getName() == 'doctor.edit')
                                            <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/icon-4.jpg')}}" width="35" height="35" alt="icon"> <span> Doctors</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @else
                                            <a href="#"><img src="{{ asset ('assets/img/sidebar/icon-4.jpg')}}" width="35" height="35" alt="icon"> <span> Doctors</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @endif

                                    @if(Route::current()->getName() == 'doctor.index')

                                    <li><a href="{{ route('doctor.index') }}" class="active" ><span>All Doctors</span></a></li>
                                    <li><a href="{{ route('doctor.create') }}"><span>Add Doctor</span></a></li>
                                    <li><a href="{{ route('doctor.index2') }}"><span>Edit Doctor</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'doctor.create')

                                    <li><a href="{{ route('doctor.index') }}"><span>All Doctors</span></a></li>
                                    <li><a href="{{ route('doctor.create') }}" class="active" ><span>Add Doctor</span></a></li>
                                    <li><a href="{{ route('doctor.index2') }}"><span>Edit Doctor</span></a></li>
                                    </ul>
                                    </li>
                                    @elseif(Route::current()->getName() == 'doctor.index2')

                                    <li><a href="{{ route('doctor.index') }}"><span>All Doctors</span></a></li>
                                    <li><a href="{{ route('doctor.create') }}"><span>Add Doctor</span></a></li>
                                    <li><a href="{{ route('doctor.index2') }}" class="active" ><span>Edit Doctor</span></a></li>
                                    </ul>
                                    </li>

                                    @else

                                    <li><a href="{{ route('doctor.index') }}"><span>All Doctors</span></a></li>
                                    <li><a href="{{ route('doctor.create') }}"><span>Add Doctor</span></a></li>
                                    <li><a href="{{ route('doctor.index2') }}"><span>Edit Doctor</span></a></li>
                                    </ul>
                                    </li>


                                    @endif


                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">

                                    @if(Route::current()->getName() == 'nurse.index'|| Route::current()->getName() == 'nurse.create'|| Route::current()->getName() == 'nurse.edit')
                                            <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/nurse-icon.png')}}" width="35" height="35" alt="icon"> <span> Nurses</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @else
                                            <a href="#"><img src="{{ asset ('assets/img/sidebar/nurse-icon.png')}}" width="35" height="35" alt="icon"> <span> Nurses</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @endif

                                    @if(Route::current()->getName() == 'nurse.index')
                                    <li><a href="{{ route('nurse.index') }}" class="active" ><span>All Nurses</span></a></li>
                                    <li><a href="{{ route('nurse.create') }}"><span>Add Nurse</span></a></li>
                                    <li><a href="{{ route('nurse.index2') }}"><span>Edit Nurse</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'nurse.create')
                                    <li><a href="{{ route('nurse.index') }}"><span>All Nurses</span></a></li>
                                    <li><a href="{{ route('nurse.create') }}" class="active" ><span>Add Nurse</span></a></li>
                                    <li><a href="{{ route('nurse.index2') }}"><span>Edit Nurse</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'nurse.index2')
                                    <li><a href="{{ route('nurse.index') }}"><span>All Nurses</span></a></li>
                                    <li><a href="{{ route('nurse.create') }}"><span>Add Nurse</span></a></li>
                                    <li><a href="{{ route('nurse.index2') }}" class="active" ><span>Edit Nurse</span></a></li>
                                    </ul>
                                    </li>

                                    @else
                                    <li><a href="{{ route('nurse.index') }}"><span>All Nurses</span></a></li>
                                    <li><a href="{{ route('nurse.create') }}"><span>Add Nurse</span></a></li>
                                    <li><a href="{{ route('nurse.index2') }}"><span>Edit Nurse</span></a></li>
                                    </ul>
                                    </li>


                                    @endif




                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">

                                    @if(Route::current()->getName() == 'medical_device.index'|| Route::current()->getName() == 'medical_device.create'|| Route::current()->getName() == 'medical_device.edit')


                                            <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/meddev.png')}}" width="35" height="35" alt="icon"> <span> Medical Devices</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @else
                                            <a href="#"><img src="{{ asset ('assets/img/sidebar/meddev.png')}}"" width="35" height="35" alt="icon"> <span> Medical Devices</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">

                                    @endif   



                                    @if(Route::current()->getName() == 'medical_device.index')
                                    <li><a href="{{ route('medical_device.index') }}" class="active" ><span>All Devices</span></a></li>
                                    <li><a href="{{ route('medical_device.create') }}"><span>Add Device</span></a></li>
                                    <li><a href="{{ route('medical_device.index2') }}"><span>Edit Device</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'medical_device.create')
                                    <li><a href="{{ route('medical_device.index') }}"><span>All Devices</span></a></li>
                                    <li><a href="{{ route('medical_device.create') }}" class="active" ><span>Add Device</span></a></li>
                                    <li><a href="{{ route('medical_device.index2') }}"><span>Edit Device</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'medical_device.index2')
                                    <li><a href="{{ route('medical_device.index') }}"><span>All Devices</span></a></li>
                                    <li><a href="{{ route('medical_device.create') }}"><span>Add Device</span></a></li>
                                    <li><a href="{{ route('medical_device.index2') }}" class="active" ><span>Edit Device</span></a></li>
                                    </ul>
                                    </li>

                                    @else
                                    <li><a href="{{ route('medical_device.index') }}"><span>All Devices</span></a></li>
                                    <li><a href="{{ route('medical_device.create') }}"><span>Add Device</span></a></li>
                                    <li><a href="{{ route('medical_device.index2') }}"><span>Edit Device</span></a></li>
                                    </ul>
                                    </li>


                                    @endif



                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">

                                    @if(Route::current()->getName() == 'MedicalService.index'|| Route::current()->getName() == 'MedicalService.create'|| Route::current()->getName() == 'MedicalService.edit')


                                            <a href="#" class="active"><img src="{{ asset ('assets/img/sidebar/medserv.jpg')}}"   width="35" height="35" alt="icon"> <span> Medical Services</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @else
                                            <a href="#"><img src="{{ asset ('assets/img/sidebar/medserv.jpg')}}"   width="35" height="35" alt="icon"> <span> Medical Services</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                    @endif


                                    @if(Route::current()->getName() == 'MedicalService.index')
                                    <li><a href="{{ route('MedicalService.index') }}" class="active" ><span>All Services</span></a></li>
                                    <li><a href="{{ route('MedicalService.create') }}"><span>Add Service</span></a></li>
                                    <li><a href="{{ route('MedicalService.index2') }}"><span>Edit Service</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'MedicalService.create')

                                    <li><a href="{{ route('MedicalService.index') }}"><span>All Services</span></a></li>
                                    <li><a href="{{ route('MedicalService.create') }}" class="active" ><span>Add Service</span></a></li>
                                    <li><a href="{{ route('MedicalService.index2') }}"><span>Edit Service</span></a></li>
                                    </ul>
                                    </li>
                                    @elseif(Route::current()->getName() == 'MedicalService.index2')

                                    <li><a href="{{ route('MedicalService.index') }}"><span>All Services</span></a></li>
                                    <li><a href="{{ route('MedicalService.create') }}"><span>Add Service</span></a></li>
                                    <li><a href="{{ route('MedicalService.index2') }}" class="active" ><span>Edit Service</span></a></li>
                                    </ul>
                                    </li>
                                    @else
                                    <li><a href="{{ route('MedicalService.index') }}"><span>All Services</span></a></li>
                                    <li><a href="{{ route('MedicalService.create') }}"><span>Add Service</span></a></li>
                                    <li><a href="{{ route('MedicalService.index2') }}"><span>Edit Service</span></a></li>
                                    </ul>
                                    </li>


                                    @endif



                                    {{--*******************************************************************************************************************************************************  --}}

                                        <li class="submenu">

                                    @if(Route::current()->getName() == 'Payments.index'|| Route::current()->getName() == 'Payments.create'|| Route::current()->getName() == 'Payments.edit')


                                            <a href="#" class="active" class="active"><img src="{{ asset ('assets/img/sidebar/payments.png')}}"  alt="icon" width="35" height="35"> <span> Payments</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">

                                    @else
                                                <a href="#"><img src="{{ asset ('assets/img/sidebar/payments.png')}}"  alt="icon" width="35" height="35"> <span> Payments</span> <span class="menu-arrow"></span></a>
                                                <ul class="list-unstyled" style="display: none;">
                                    @endif


                                    @if(Route::current()->getName() == 'Payments.index')
                                    <li><a href="{{ route('Payments.index') }}" class="active" ><span>All Payments</span></a></li>
                                    <li><a href="{{ route('Payments.create') }}"><span>Add Payment</span></a></li>
                                    <li><a href="{{ route('payments.index2') }}"><span>Edit Payment</span></a></li>
                                    </ul>
                                    </li>

                                    @elseif(Route::current()->getName() == 'Payments.create')
                                    <li><a href="{{ route('Payments.index') }}"><span>All Payments</span></a></li>
                                    <li><a href="{{ route('Payments.create') }}" class="active" ><span>Add Payment</span></a></li>
                                    <li><a href="{{ route('payments.index2') }}"><span>Edit Payment</span></a></li>
                                    </ul>
                                    </li>
                                    @elseif(Route::current()->getName() == 'payments.index2')
                                    <li><a href="{{ route('Payments.index') }}"><span>All Payments</span></a></li>
                                    <li><a href="{{ route('Payments.create') }}"><span>Add Payment</span></a></li>
                                    <li><a href="{{ route('payments.index2') }}" class="active" ><span>Edit Payment</span></a></li>
                                    </ul>
                                    </li>

                                    @else
                                    <li><a href="{{ route('Payments.index') }}"><span>All Payments</span></a></li>
                                    <li><a href="{{ route('Payments.create') }}"><span>Add Payment</span></a></li>
                                    <li><a href="{{ route('payments.index2') }}"><span>Edit Payment</span></a></li>
                                    </ul>
                                    </li>


                                    @endif



   


<br/>







         </div>
    </div>
</div>




@yield('content')

</div>

</body>

<script src="{{ asset ('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset ('assets/js/jquery.slimscroll.js')}}"></script>
 
<script src="{{ asset ('assets/js/select2.min.js')}}"></script>
<script src="{{ asset ('assets/js/moment.min.js')}}"></script>
{{-- 
<script src="{{ asset ('assets/js/fullcalendar.min.js')}}"></script>
<script src="{{ asset ('assets/js/jquery.fullcalendar.js')}}"></script> --}}

<script src="{{ asset ('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset ('assets/plugins/raphael/raphael-min.js')}}"></script>
{{-- <script src="{{ asset ('assets/js/apexcharts.js')}}"></script> --}}
{{-- <script src="{{ asset ('assets/js/chart-data.js')}}" ></script> --}}
<script src="{{ asset ('assets/dt/jquery.datetimepicker.full.min.js')}}"></script>

<script src="{{ asset ('assets/js/app.js')}}"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">


    $('#delete_employee').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) 
          var cat_id = button.data('catid') 
          var modal = $(this)
          modal.find('.modal-body #cat_id').val(cat_id);
    })
    </script>  --}}

    <script type="text/javascript" >

        $('#delete_patient').on('show.bs.modal', function (event) {
    
              
    
              var pid = $(event.relatedTarget).data('id');
              console.log(pid);
              var form = document.getElementById('delfrm');
              ;
              form.action ="{{route('patient.destroy', '')}}"+"/"+pid;
    
        });
        $('#delete_doctor').on('show.bs.modal', function (event) {
    
              
    
    var pid = $(event.relatedTarget).data('id');
    console.log(pid);
    var form = document.getElementById('delfrm');
    ;
    form.action ="{{route('doctor.destroy', '')}}"+"/"+pid;

});

        </script> 

@livewireScripts

<script >	  


    $( document ).ready(function() {
    var totalPrice = 0;

    $("#clc").click(function(e) {
        var totalPrice = 0;

        e.preventDefault();
        var numberofsrvs=$('#numos').val();
        $('#tnos').val(numberofsrvs); 

        $("input[id^='subprice']").each( function() {

        var val=$(this).val();  
        totalPrice += parseFloat(val);
        console.log(totalPrice);
        //   alert(val);               
   
          $('#tot').val(totalPrice); 
      });
        })



});
  


$( document ).ready(function() {
    var totalPrice = 0;
    var totalPrice2 = 0;

    $("#clc2").click(function(e) {
        var totalPrice = 0;
        var totalPrice2 = 0;

        e.preventDefault();
        // var numberofsrvs=$('#numos').val();
        // $('#tnos').val(numberofsrvs); 

        $("input[id^='pmntsubprice']").each( function() {

        var val=$(this).val();  
        totalPrice += parseFloat(val);
        console.log(totalPrice);
        //   alert(val);               
   
          $('#totalpayment').val(totalPrice); 
      });

      


      $("input[id^='srvname']").each( function() {

        $("input[id^='srvname']").on('change',function(){


            // $(this).attr('disabled', 'disabled');
            $(this).prepend('<option disabled="disabled">My disabled Option</option>');


        });

});



      

      $("input[id^='totalsubprice']").each( function() {

var val=$(this).val();  
totalPrice2 += parseFloat(val);
console.log(totalPrice2);
//   alert(val);               

  $('#totalpayment').val(totalPrice2+totalPrice); 
});


        })



});
     
      </script>

<script src="  https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	
	// $(document).ready(function () {
	// 	$('#calendar').fullCalendar({
			
	// 	})
	// });
    jQuery('#datetimepicker1').datetimepicker();
    jQuery('#datetimepicker2').datetimepicker();

	</script>


@yield('scrpt')

<script>
	$('#patient_name').on('change', function() {
  $('#cc')
  .val(
    $(this).find(':selected').data('cid')
  );

  console.log($(this).find(':selected').data('cid'));
});
</script>
</html>