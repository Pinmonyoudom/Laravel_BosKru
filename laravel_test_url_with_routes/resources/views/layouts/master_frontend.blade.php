<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta author="test">
    <meta description="This is test only">
    <title>@yield('title','This is title') </title>
    
</head>
<body>
    @section('sidebar')
    	This is the master sidebar
    @show
    	<div class="container">
    		@yield('content')
    	</div>
</body>
</html>