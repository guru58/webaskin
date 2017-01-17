<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width = device-width , initial-scale = 1.0" />
    <link rel="stylesheet" href="/fonts/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="/css/admin.css"/>
</head>
<body>
@include('admin.header')

<div id="main">
      	
      @yield('dashboard')


</div>

</body>
  
                                                                {{-- SCRIPT START HERE --}}

  <script type="text/javascript" src="js/app.js"></script>
  @yield('owl_js')


</html>
