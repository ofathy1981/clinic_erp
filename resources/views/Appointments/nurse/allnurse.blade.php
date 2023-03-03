@extends('layouts.appointments')
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/all-nurses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:02 GMT -->
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
			<h5 class="text-uppercase mb-0 mt-0 page-title">All nurses</h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<ul class="breadcrumb float-right p-0 mb-0">
			<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><I class="fas fa-home"></i> Home</a></li>
			<li class="breadcrumb-item"><a href="">nurses</a></li>
			<li class="breadcrumb-item"><span> All nurses</span></li>
			</ul>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-sm-4 col-11">
			</div>
			<div class="col-sm-8 col-12 text-right add-btn-col">
			<a href="{{ route('nurse.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add nurses</a>
			<div class="view-icons">
			<a href="{{ route('nurse.index') }}" class="grid-view btn btn-link active"><i class="fas fa-th"></i></a>
			<a href="{{ route('nurse.index2') }}" class="list-view btn btn-link"><i class="fas fa-bars"></i></a>
			</div>
			</div>
			</div>

<form ethod="POST" action="{{ route('nurse.search') }}">
	@csrf
			<div class="row filter-row">
			<div class="col-sm-6 col-md-3">
			<div class="form-group form-focus">
			<input type="text" class="form-control floating" name="name">
			<label class="focus-label">Nurse Name</label>
			</div>
			</div>
			<div class="col-sm-6 col-md-3">
			<div class="form-group form-focus">
			<input type="text" class="form-control floating" name="phone">
			<label class="focus-label">phone</label>
			</div>
			</div>
			<div class="col-sm-6 col-md-3">
			<div class="form-group form-focus">
			<input type="text" class="form-control floating" name="specialization">
			<label class="focus-label">specialization</label>
			</div>
			</div>
			<div class="col-sm-6 col-md-3">
			<button class="btn btn-primary mr-2" type="submit">
				search </button>
			</div>
			</div>
		</form>
			<div class="row staff-grid-row">
			@foreach ($nurse as $item)
		
			<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">


			<div class="profile-widget">
			<div class="profile-img">
			<a href="{{route('nurse.show',$item->id)}}"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
			</div>
			<div class="dropdown profile-action">
			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="edit-parent.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
			</div>
			</div>
			<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{route('nurse.show',$item->id)}}">{{   $item->name }}</a></h4>
			<div class="small text-muted"></div>
			</div>
			</div>


@endforeach



@endsection



</body>

</html>