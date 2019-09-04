<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','this is title')</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<title>Eiser ecommerce</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/eiser/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}" />
	<link rel="stylesheet" href="{{asset('css/eiser/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/eiser/themify-icons.css')}}" />
	<link rel="stylesheet" href="{{asset('css/eiser/flaticon.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/lightbox/simpleLightbox.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/animate-css/animate.css')}}" />
	<link rel="stylesheet" href="{{asset('vendors/jquery-ui/jquery-ui.css')}}" />
	<!-- main css -->
	<link rel="stylesheet" href=" {{asset('css/eiser/style.css')}}" />
	<link rel="stylesheet" href=" {{asset('css/eiser/responsive.css')}}" />
	@yield('css')
</head>
<body>

	<header class="header_area">
		@include('includes.topmenu')
		@include('includes.mainmenu')
	</header>
	@section('container')
	@show
	@include('includes.footer')
	
</body>
</html>
