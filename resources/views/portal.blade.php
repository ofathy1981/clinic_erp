<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet/less" type="text/css" href="assets/css/cards.less" /> -->
</head>
<style>
    * {
  box-sizing: border-box;
}
html,
body {
  width: 100%;
  height: 100%;
}
body {
  padding: 1rem 0;
  background: #f9f9fb;
}
.card {
  width: 220px;
  display: inline-block;
  margin: 1rem;
  border-radius: 4px;
  box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, 0.05), 0 1px 2px 0 rgba(0, 0, 0, 0.2);
  transition: all 0.2s ease;
  background: #fff;
  position: relative;
  overflow: hidden;
}
.card:hover,
.card.hover {
  transform: translateY(-4px);
  box-shadow: 0 4px 25px 0 rgba(0, 0, 0, 0.3), 0 0 1px 0 rgba(0, 0, 0, 0.25);
}
.card:hover .card-content,
.card.hover .card-content {
  box-shadow: inset 0 3px 0 0 #ccb65e;
  border-color: #ccb65e;
}
.card:hover .card-img .overlay,
.card.hover .card-img .overlay {
  background-color: rgba(25, 29, 38, 0.85);
  transition: opacity 0.2s ease;
  opacity: 1;
}
.card-img {
  position: relative;
  height: 224px;
  width: 100%;
  background-color: #fff;
  transition: opacity 0.2s ease;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}
.card-img .overlay {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  opacity: 0;
}
.card-img .overlay .overlay-content {
  line-height: 224px;
  width: 100%;
  text-align: center;
  color: #fff;
}
.card-img .overlay .overlay-content a {
  color: #fff;
  padding: 0 2rem;
  display: inline-block;
  border: 1px solid rgba(255, 255, 255, 0.4);
  height: 40px;
  line-height: 40px;
  border-radius: 20px;
  cursor: pointer;
  text-decoration: none;
}
.card-img .overlay .overlay-content a:hover,
.card-img .overlay .overlay-content a.hover {
  background: #ccb65e;
  border-color: #ccb65e;
}
.card-content {
  width: 100%;
  min-height: 104px;
  background-color: #fff;
  border-top: 1px solid #e9e9eb;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
  padding: 1rem 2rem;
  transition: all 0.2s ease;
}
.card-content a {
  text-decoration: none;
  color: #202927;
}
.card-content h2,
.card-content a h2 {
  font-size: 1rem;
  font-weight: 500;
}
.card-content p,
.card-content a p {
  font-size: 0.8rem;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  color: rgba(32, 41, 28, 0.8);
}
.navbar{
    height: 100px;
}


footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-primary ftco-navbar-light" id="ftco-navbar" style="">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
        </button>
        </div><img src="assets/img/main/clinic.png"  width="400" height="90"/></div>
        <div class="collapse navbar-collapse" id="ftco-nav">
        <!-- <ul class="navbar-nav m-auto">
        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
        <a class="dropdown-item" href="#">Page 1</a>
        <a class="dropdown-item" href="#">Page 2</a>
        <a class="dropdown-item" href="#">Page 3</a>
        <a class="dropdown-item" href="#">Page 4</a>
        </div>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Work</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul> -->
        </div>
        </div>
        </nav>
        <div class="container">
    <div class="card ">
        <div class="card-img" style="background-image:url(assets/img/main/accounting.jpg);">
            <div class="overlay">
                <div class="overlay-content">
                    <a class="hover" href="{{route('accounting.index')}}">MANAGE</a>
                </div>
            </div>
        </div>
        
        <div class="card-content">
            <a href="#!">
         <center>      <h2>ACCOUNTING</h2></center>  
                <p></p>
            </a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-img" style="background-image:url(assets/img/main/human-resource.jpg);">
            <div class="overlay">
                <div class="overlay-content">
                    <a href="{{route('hr.index')}}">MANAGE</a>
                </div>
            </div>
        </div>
        
        <div class="card-content">
            <a href="#!">
                <center>   <h2>HR</h2> </a></center> 
                <p></p>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-img" style="background-image:url(assets/img/main/medicine.jpg);">
            <div class="overlay">
                <div class="overlay-content">
                    <a href="{{route('inventory.index')}}">MANAGE</a>
                </div>
            </div>
        </div>
        
        <div class="card-content">
            <a href="#!">
                <center>  <h2> INVENTORY</h2></center> 
                <p></p>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-img" style="background-image:url(assets/img/main/callcenter.png);">
            <div class="overlay">
                <div class="overlay-content">
                  <a href="{{route('call_center.index')}}" >MANAGE</a>
                </div>
            </div>
        </div>
        
        <div class="card-content">
            <a href="#!">
            <center>   <h2>CALL CENTER</h2></center> 
                <p></p>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-img" style="background-image:url(assets/img/main/schedule.jpg);">
            <div class="overlay">
                <div class="overlay-content">
                    <a href="{{route('appointments.index')}}" >MANAGE</a>
                </div>
            </div>
        </div>
        
        <div class="card-content">
            <a href="#!">
                <center>   <h2>APPOINTMENTS</h2></center> 
                <p></p>
            </a>
        </div>
    </div>
</div>



<!--  fooooooooooooooooooooooooooooooooooooooooooter-->

    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0b6fcb;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <!-- <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button> -->
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(16, 202, 230, 0.2);">
        © 2020 Copyright:
        <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>
<script>
    $(document).ready(function() {
	
	$('.card').delay(1800).queue(function(next) {
		$(this).removeClass('hover');
		$('a.hover').removeClass('hover');
		next();
	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>