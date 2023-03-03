<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:41:54 GMT -->
<head>
<meta charset="utf-8">
<title>Roses Clinic - Bootstrap Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title text-white">Login</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a href="index.html"><img src="{{asset('assets/img/roses-svg-logo.svg')}}" alt="SchoolAdmin"></a>
</div>
<form  method="POST" action="{{ route('login') }}">
	@csrf
<div class="form-group">
<label>Username or Email</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
</div>
<div class="form-group">
<label>Password</label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
</div>
<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
</div>
<div class="text-center">
<a href="forgot-password.html">Forgot your password?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from dreamguystech.com/preadmin/html/school/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 14:41:58 GMT -->
</html>