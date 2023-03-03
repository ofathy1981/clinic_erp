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
<h5 class="text-uppercase mb-0 mt-0 page-title">Add Schedule</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><I class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="">Schedules</a></li>
<li class="breadcrumb-item"><span> Add Schedule</span></li>
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

<form   method="POST" action="{{ route('schedule.store') }}">
	@csrf
<div class="form-group">
<label>patient name</label>
{{-- <input type="text" class="form-control" id="patient_name" name="patient_name" value="{{ old('patient_name') }}" > --}}
<select class="form-control select" id="patient_name" name="patient_name" value="{{ old('patient_name') }}" >
	@foreach ($patient as $item )
	<option value="{{$item->first_name }}" data-cid="{{$item->cid}} ">{{$item->first_name }}</option>
	@endforeach
	
@error('patient_name')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
	<label>CID</label>
	<input type="text" class="form-control" id= "cc"  name="cid" value="{{old('cid')}}">
	@error('cid')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
</div>

<div class="form-group" name="nurse">
	<label>Nurse</label>

	<select class="form-control select" name="nurse">

	@foreach ($nurses as $item )
		<option value="{{$item->name }}">{{$item->name }}</option>
	@endforeach
		
	
	</select>
	@error('nurse')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
</div>

<div class="form-group" name="doctor">
	<label>Doctor</label>
	<select class="form-control select" name="doctor">
		@foreach ($doctors as $item )
		<option value="{{$item->name }}">{{$item->name }}</option>
	@endforeach
		

	</select>
	@error('doctor')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
</div>
<div class="form-group">
	<label>schedule status</label>
	<select class="form-control select" name="schedule_status">
		<option value="Confirmed">Confirmed</option>
		<option value="Canceled">Canceled</option>

		</select>
	@error('schedule_status')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
	</div>



<div class="form-group">
	<label>Total payment</label>
	<input class="form-control " id="tot" type="number"  name="total_payment" ><button id="clc" class="btn btn-info">Calc</button>
	@error('total_payment')
	<small class="form-text text-danger">{{ $message }}</small>
	@enderror
	</div>

	<div class="form-group">
		<label>Total Number Of Services</label>
		<input  type="number" id="tnos"  class="form-control" name="total_number_of_services" value="">
		@error('total_number_of_services')
		<small class="form-text text-danger">{{ $message }}</small>
		@enderror
		</div>







</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">


	<div class="form-group">
		<label>schedule start date</label>
		<input class="form-control datetimepicker-input "  id="datetimepicker1"  autocomplete="off" name="schedule_start" value="{{old('schedule_start')}}">
		@error('schedule_start')
		<small class="form-text text-danger">{{ $message }}</small>
		@enderror
		</div>

		<div class="form-group">
			<label>schedule end date</label>
			<input class="form-control datetimepicker-input "id="datetimepicker2" autoComplete='off'  name="schedule_end" value="{{old('schedule_end')}}">
			@error('schedule_end')
			<small class="form-text text-danger">{{ $message }}</small>
			@enderror
			</div>		


			<div class="form-group">
				<label>known_us_from</label>
				<select class="form-control select" name="known_us_from">
				<option value="Facebook">Facebook</option>
				<option value="youtube">youtube</option>
				<option value="Instgram">Instgram</option>
				<option value="whatsapp">whatsapp</option>
				<option value="Magazine">Magazine</option>
				<option value="Friend">Friend</option>
				<option value="other">other</option>
			
			
				</select>
				@error('known_us_from')
				<small class="form-text text-danger">{{ $message }}</small>
				@enderror
				</div>
			
			
			<div class="form-group" name="case"  >
				<label>Patient Case</label>
				<select class="form-control select" name="case">
				<option value="c1">c1</option>
				<option value=""></option>
				</select>
				@error('case')
				<small class="form-text text-danger">{{ $message }}</small>
				@enderror
			</div>

<div class="form-group">
<label>Room</label>
<input type="text" class="form-control" name="room" >
@error('room')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label>Work</label>
<select class="form-control select" name="work">
	<option value="Laser duetto">Laser duetto</option>
	<option value="Facial">Facial</option>
	<option value="DeerMachine/Smart Shape2">DeerMachine/Smart Shape2</option>
	<option value="IBL laser">IBL laser</option>
	<option value="Micro Blending">Micro Blending</option>
	<option value="Dr Rowda Sercslm">Dr Rowda Sercslm</option>
	<option value="Laser Candela">Laser Candela</option>
	<option value="Waiiting">Waiiting</option>
	<option value="Smart Shape 1">Smart Shape 1</option>
	<option value="laser Duetto 2">laser Duetto 2</option>
	<option value="room10">room10</option>
	</select>
@error('work')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>


	

<div class="form-group">
<label>sp_beuty</label>
<input type="text" class="form-control" name="sp_beuty" value="{{old('sp_beuty')}}">
@error('sp_beuty')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
<div class="form-group">
<label>Duration</label>
<input type="text" class="form-control" name="duration" value="{{old('duration')}}">
@error('duration')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>



</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">

<div class="form-group">
<label>Notes</label>
<textarea class="form-control" rows="4" name="notes"></textarea>
@error('notes')
<small class="form-text text-danger">{{ $message }}</small>
@enderror
</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-12">
{{-- ///////////////////////////////////// --}}

<div class="card">
	<div class="card-header">
		SERVICES 
	</div>
@livewire('schedule-service')

</div>
{{--//////////////////////////////////////  --}}
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
@section('scrpt')
<script>
	
// $( document ).ready(function() {
	$('#datetimepicker2').change(function() { 
//   $.ajax({
//     url: "/checkdate",
//     type: 'GET',
//     data: { startdate: $('#datetimepicker1').val(),enddate: $('#datetimepicker2').val()},
//     cache: false,
//     success: function(data) {
//       console.log(data);
//     },
//   });
  var schedule_start=$('#datetimepicker1').val();
  var schedule_end= $('#datetimepicker2').val();


  $.ajax({
			url:"{{ route('schedule.check') }}" ,
			type:"GET",
			dataType:'json',
			data:{schedule_start:$('#datetimepicker1').val(), schedule_end:$('#datetimepicker2').val()  },
			success:function(res)
			{

				if(res)
                {

					console.log(res);
                    // $.each(res,function(key,value){
                    //     $('#nation_id').append($("<option/>", {
                    //        value: key,
                    //        text: value
                    //     }));
                    // });


				// swal("Good job!", "Event Updated!", res);


//in swal 
let messages = '';

// $.each(res, function (key, value) {
// 	$.each(value, function(i, message) {
// 		messages += '<li>'+message+'</li>';
// 	});
// });
// for(let i = 0; i < res.length; i++) {
//     let obj = res[i];

//     console.log(obj.id);
// }

res.forEach(function(item){

	messages += '<li class="list-group-item list-group-item-success">'+item.service_name+'</li>';

});
// swal("Avilable Services In chosen period", parseHTML(messages),"success" ); 
var htmlContent = document.createElement("div");
htmlContent.innerHTML =messages;
swal({
  title: "Avilable Services In chosen period",
  content: htmlContent,
  html: true, // add this if you want to show HTML
  type: "info" // type can be error/warning/success
});

                }



			},
			error:function(error)
			{
				console.log(error)
			},
		});











  });

// });
	</script>@endsection
<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/add-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:04 GMT -->
</html>
