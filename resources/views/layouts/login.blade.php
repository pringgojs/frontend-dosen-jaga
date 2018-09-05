

<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>Dosen Jaga</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="description" content="Dosen jaga Polipangkep">
	<meta name="keywords" content="Dosen jaga">
	<meta name="author" content="HTMLmate">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('public/css/app.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('public/css/all.css')}}" />
     @yield('styles')
</head>
<!-- /end of head -->


<body>
	<div id="preloader"></div>

	<!-- Start of vCard content
	============================================= -->
	<section id="vcard-area" class="vcard-area-section">
		<div id="app">
			@yield('content')
		</div>
    </section>
            
    <!-- End of vCard content
        
	============================================= -->
	<script src="{{ asset('public/js/app.js') }}"></script>
	<script src="{{ asset('public/js/all.js') }}"></script>

</body>
</html>