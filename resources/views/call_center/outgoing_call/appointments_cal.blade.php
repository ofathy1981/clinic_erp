@extends('layouts.call_center')

	<head>
		<title>How to Use Fullcalendar in Laravel 9</title>
		@section('tok')
		<meta name="csrf-token" content="{{ csrf_token() }}" />
	
@endsection
	</head>
<body>

	@section('content')

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Add New Schedule</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
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
					<input type="text" class="form-control" name="patient_name" value="{{ old('patient_name') }}" >
					@error('patient_name')
					<small class="form-text text-danger">{{ $message }}</small>
					@enderror
					</div>
					<div class="form-group">
						<label>CID</label>
						<input type="text" class="form-control" id= "cc" value="3" name="cid" value="{{old('cid')}}">
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
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  {{-- <button type="button" id="savejax"  type="submit" class="btn btn-primary">Save changes</button> --}}
			</div>
		  </div>
		</div>
	  </div>

{{--*************************************************************************************  --}}

<div class="modal" tabindex="-1" id="mgmt">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title">Manage Schedules</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Choose Your Action</p>

		  <button type="button" id="updt" class="btn btn-secondary" >update</button>
		  <button type="button" id="dlt"    class="btn btn-secondary" >delete</button>

		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>


















		<div class="page-wrapper">
			{{-- <div class="content container-fluid"> --}}
	<div class="container" style="margin-bottom:10px">
		<br />
		<h1 class="text-center text-primary"><u>Appoinntments calendar </u></h1>
		<br />

<div class="row">		
		<div class="col-lg-9 col-md-9 col-sm-9 col-9">

		<div id="calendar"></div>
	

		</div>



		<div class="col-md-3 col-lg-3 col-xl-3 ">
			<div class="card">
			<div class="card-header">
			<h4 class="card-title mb-0">Service Legend</h4>
			</div>
			<div class="card-body">
			<div id="calendar-events" class="mb-3">
				
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #99004C"></i> Laser duetto</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #FF99FF"></i> Facial</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #9999FF"></i> DeerMachine/Smart Shape2</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #99FFFF"></i> IBL laser</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #99FF33"></i>Micro Blending</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #009999"></i> Dr Rowda Sercslm</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #FF0000"></i> Laser Candela</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #C0C0C0"></i>Waiiting</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #FF8000"></i> Smart Shape 1</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #FFFF00"></i> Laser Duetto 2</div>
			<div class="calendar-events" data-class="bg-info"><i class="fas fa-circle " style="color: #660066"></i> Room 10</div>

			</div>
			<div class="checkbox mb-3">
			<label for="drop-remove">
			
			</label>
			</div>

			</a>
			</div>
			</div>
			</div>


</div>








	</div>
	</div>	
{{-- </div>	</div>  --}}

{{-- @section('scrpt') --}}
<script  type="text/javascript" >
	$(document).ready(function () {
		$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			var schedule=@json($events);
			console.log(schedule);

		$('#calendar').fullCalendar({
			header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay,list',
                },
			events:schedule,
			selectable:true,
			selectHelper:true,
			editable:true,
			select: function(start, end, allDays) {
                    $('#exampleModal').modal('toggle');
					// alert(start);
					$('#datetimepicker1').val(start.format('YYYY-MM-DD HH:mm:ss'));
					$('#datetimepicker2').val(end.format('YYYY-MM-DD HH:mm:ss'));

			},
			eventDrop: function(event) {
									console.log(event.end);

                    var id = event.id;
                    var schedule_start = moment(event.start).format('YYYY-MM-DD HH:mm:ss');
                    var schedule_end   = moment(event.end?event.end:event.start).format('YYYY-MM-DD HH:mm:ss');
                    $.ajax({
                            url:"{{ route('schedule.updatesched', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ schedule_start, schedule_end  },
                            success:function(response)
                            {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                },
				selectAllow: function(event)
                {
                    return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                },
				eventResize: function(event) {	

                    var id = event.id;
                    var schedule_start = moment(event.start).format('YYYY-MM-DD HH:mm:ss');
                    var schedule_end   = moment(event.end?event.end:event.start).format('YYYY-MM-DD HH:mm:ss');
                    $.ajax({
                            url:"{{ route('schedule.updatesched', '') }}" +'/'+ id,
                            type:"PATCH",
                            dataType:'json',
                            data:{ schedule_start, schedule_end  },
                            success:function(response)
                            {
                                swal("Good job!", "Event Updated!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });

				},
				eventRender: function(event, element) {
                   $(element).tooltip({title: event.title});             
  },
  eventClick: function(event){
                    var id = event.id;
                    $('#mgmt').modal('toggle');

					$('#updt').click(function() {

					var url = '{{ route("schedule.edit", ":id") }}';
                    url = url.replace(':id', id);

						window.location.href = url


					});
					$('#dlt').click(function() {

                    if(confirm('Are you sure want to remove it')){
                        $.ajax({
                            url:"{{ route('schedule.scheduledel', '') }}" +'/'+ id,
                            type:"DELETE",
                            dataType:'json',
                            success:function(response)
                            {
                                $('#calendar').fullCalendar('removeEvents', response);
                                // swal("Good job!", "Event Deleted!", "success");
                            },
                            error:function(error)
                            {
                                console.log(error)
                            },
                        });
                    }
                });


                },

// this is for creat new schedule with ajax

// 					$('#savejax').click(function() {
//                         var patient_name = $('#patient_name').val();
// 						var cid = $('#cc').val();
// 						var nurse = $('#nurse').find(':selected').val();
// 						var room = $('#room').val();
// 						var work = $('#work').find(':selected').val();
// 						var doctor = $('#doctor').find(':selected').val();
// 						var known_us_from = $('#known_us_from').find(':selected').val();
// 						var sp_beuty = $('#sp_beuty').val();
// 						var duration = $('#duration').val();
// 						var pcase = $('#case').find(':selected').val();
// 						var notes = $('#notes').val();
// 						var total_payment = $('#tot').val();
// 						console.log(total_payment);
// 						var total_number_of_services = $('#tnos').val();
// 						var schedule_status = $('#schedule_status').find(':selected').val();
						
//                         var schedule_start = moment(start).format('YYYY-MM-DD');
//                         var schedule_end = moment(end).format('YYYY-MM-DD');

//                         $.ajax({
//                             url:"{{ route('schedules.save') }}",
//                             type:"POST",
//                             dataType:'json',
//                             data:{ patient_name, cid,nurse ,room ,work ,doctor ,known_us_from ,sp_beuty ,duration ,pcase,notes,total_payment,total_number_of_services,schedule_status,schedule_start, schedule_end  },
//                             success:function(response)
//                             {
//                                 $('#exampleModal').modal('hide')
//                                 $('#calendar').fullCalendar('renderEvent', {
//                                     'title': response.title,
//                                     'start' : response.start,
//                                     'end'  : response.end,
//                                     'color' : response.color
//                                 });
//                             },
//                             error:function(error)
//                             {
//                                 if(error.responseJSON.errors) {
//                                     $('#titleError').html(error.responseJSON.errors.title);
//                                 }
//                             },
//                         });
//                     });
















					
			
































		})
		console.log(event);


		$.ajax({
    url: "/laravel/public/posts/create",
    type: 'GET',
    data: { thedate: $('#datetimepicker1').val() },
    cache: false,
    success: function(data) {
      console.log(dataString);
    },
  });


var thedate=$('#datetimepicker1').val();
$.ajax({url:"{{ route('schedule.check', '') }}" +'/'+ thedate,
		type:"get",
		dataType:'json',
		success:function(response)
		{
			// $('#calendar').fullCalendar('removeEvents', response);
			// swal("Good job!", "Event Deleted!", "success");
		},
		error:function(error)
		{
			console.log(error)
		},
	});








  
	});
	  
	</script>
	{{-- <script>

document.addEventListener('DOMContentLoaded', function () {
     var calendarEl = document.getElementById('calendar');

        var calendar = new fullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid'],

            defaultView: 'dayGridTwoWeeks',
            views: {
                dayGridTwoWeeks: {
                    type: 'dayGrid',
                    duration: {weeks: 2},
                    dateIncrement:{weeks:1},
                    visibleRange: function (currentDate) {

                        return {
                            start: moment(currentDate).startOf('week').toDate(),
                            end: moment(currentDate).endOf('week').toDate()
                        };
                    },
                    
                }
            },

            firstDay: 1
            
                  });
        calendar.render();
    });
		</script> --}}
	{{-- @endsection --}}


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

</html>