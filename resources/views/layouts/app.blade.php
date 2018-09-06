

<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<title>Dosen Jaga</title>
	

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
		<div class="container">
			<div class="row" id="app">

                @include('include.left-sidebar')
                
                <div class="vcard-main-content box-shadow-code col-sm-7">
					<div id="vcard-ascensor">
						<!-- beranda -->
						{{-- <beranda></beranda> --}}
						<router-view name="beranda"></router-view>
						<router-view></router-view>
						
					</div>
                </div>

            </div>
        </div>
    </section>
            
    <!-- End of vCard content
        
	============================================= -->
	<script src="{{ asset('public/js/app.js') }}"></script>
	<script src="{{ asset('public/js/all.js') }}"></script>

</body>
</html>