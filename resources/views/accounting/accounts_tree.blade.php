@extends('layouts.accounting')

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/all-doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:42:02 GMT -->
<head>
<meta charset="utf-8">
<title>Roses Clinic - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

{{-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-glyphicons.css"> --}}
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
	.tree, .tree ul {
    margin:0;
    padding:0;
    list-style:none
}
.tree ul {
    margin-left:1em;
    position:relative
}
.tree ul ul {
    margin-left:.5em
}
.tree ul:before {
    content:"";
    display:block;
    width:0;
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    border-left:1px solid
}
.tree li {
    margin:0;
    padding:0 1em;
    line-height:2em;
    color:#369;
    font-weight:700;
    position:relative
}
.tree ul li:before {
    content:"";
    display:block;
    width:10px;
    height:0;
    border-top:1px solid;
    margin-top:-1px;
    position:absolute;
    top:1em;
    left:0
}
.tree ul li:last-child:before {
    background:#fff;
    height:auto;
    top:1em;
    bottom:0
}
.indicator {
    margin-right:5px;
}
.tree li a {
    text-decoration: none;
    color:#369;
}
.tree li button, .tree li button:active, .tree li button:focus {
    text-decoration: none;
    color:#369;
    border:none;
    background:transparent;
    margin:0px 0px 0px 0px;
    padding:0px 0px 0px 0px;
    outline: 0;
}
	</style>





@section('content')


<div class="page-wrapper">
			<div class="content container-fluid">
			<div class="page-header">
			<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<h5 class="text-uppercase mb-0 mt-0 page-title">All doctors</h5>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
			<ul class="breadcrumb float-right p-0 mb-0">
			<li class="breadcrumb-item"><a href="{{ route('appointments.index') }}"><I class="fas fa-home"></i> Home</a></li>
			<li class="breadcrumb-item"><a href="">doctors</a></li>
			<li class="breadcrumb-item"><span> All doctors</span></li>
			</ul>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-sm-4 col-11">
			</div>
			<div class="col-sm-8 col-12 text-right add-btn-col">
			<a href="{{ route('doctor.create') }}" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add doctors</a>
			<div class="view-icons">
			<a href="{{ route('doctor.index') }}" class="grid-view btn btn-link active"><i class="fas fa-th"></i></a>
			<a href="{{ route('doctor.index2') }}" class="list-view btn btn-link"><i class="fas fa-bars"></i></a>
			</div>
			</div>
			</div>

			</div>


			<div class="container" style="margin-top:30px;">
				<div class="row">
				  <div class="col-md-4">
					<ul id="tree1">
					  <p class="well" style="height:135px;"><strong>Initialization no parameters</strong>
			  
						<br /> <code>$('#tree1').treed();</code>
			  
					  </p>
					  <li><a href="#">TECH</a>
			  
						<ul>
						  <li>Company Maintenance</li>
						  <li>Employees
							<ul>
							  <li>Reports
								<ul>
								  <li>Report1</li>
								  <li>Report2</li>
								  <li>Report3</li>
								</ul>
							  </li>
							  <li>Employee Maint.</li>
							</ul>
						  </li>
						  <li>Human Resources</li>
						</ul>
					  </li>
					  <li>XRP
						<ul>
						  <li>Company Maintenance</li>
						  <li>Employees
							<ul>
							  <li>Reports
								<ul>
								  <li>Report1</li>
								  <li>Report2</li>
								  <li>Report3</li>
								</ul>
							  </li>
							  <li>Employee Maint.</li>
							</ul>
						  </li>
						  <li>Human Resources</li>
						</ul>
					  </li>
					</ul>
				  </div>

				  <
@endsection




@section('scrpt')

{{-- <script type="text/javascript" src="{{ asset ('assets/js/mdb.min.js')}}"></script> --}}

<!-- Custom scripts -->
<script type="text/javascript">
$.fn.extend({
    treed: function (o) {
      
      var openedClass = 'glyphicon-minus';
      var closedClass = 'glyphicon-plus';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});


</script>
@endsection

