<!DOCTYPE html>
<html lang="en">

<head>
	<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}" />
	@include('layouts.styles')
	<!-- =======================================================
    Theme Name: Moderna
    Theme URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		@include('layouts/header')
		<!-- end header -->
		@yield('content')
		
		@include('layouts/footer')
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	@include('layouts/scripts')
</body>

</html>
