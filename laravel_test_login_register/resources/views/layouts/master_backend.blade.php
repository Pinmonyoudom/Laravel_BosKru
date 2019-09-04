<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','backend')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>Eiser ecommerce</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/eiser/bootstrap.css')}}" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/backend/sb-admin-2.min.css')}}" rel="stylesheet">
	@yield('css')
</head>
<body id="page-top">
	<div id="wrapper">
		@include('includes.backendsidebar')
		<div id="content-wrapper" class="d-flex flex-column">

		  <!-- Main Content -->
		  <div id="content">

		  	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
		  		
		  	</nav>
			@section('container')
			@show
			</div>
		</div>
	</div>
	
	
	<script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
  	<script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  	{{-- <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script> --}}

  <!-- Custom scripts for all pages-->
  	<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>
</html>
