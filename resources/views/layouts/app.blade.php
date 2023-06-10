<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>NURESENSE</title>
	<link rel="icon" href="/images/logo.png" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="www.">

	<meta property="og:title" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://.uk/index.php" />
	<meta property="og:image" content="/images/og_share.jpg" />

	<!-- Flavicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
	<link rel="manifest" href="/images/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- End Flavicon -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/bootstrap/bootstrap-4.6.0.min.css" crossorigin="anonymous">

	<!-- Montserrat font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Roboto font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Poppins font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Barlow font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

	<!-- Font Awasome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!-- Fancy box -->
	<link rel="stylesheet" href="/plugins/jquery.fancybox.min.css" />

	<!-- animate css (wow) -->
	<link rel="stylesheet" type="text/css" href="/plugins/animate.css">

	<!-- owl carousel -->
	<link rel="stylesheet" href="/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.css">

	<!-- bxslider - vertical -->
	<link rel="stylesheet" href="/plugins/jquery.bxslider.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="/css/main.css">
	
	<!-- Responsive -->
	<link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
    <div id="app">
        @include('includes.header')
            @yield('content')
        @include('includes.footer')
    </div>
    @yield('scripts')
    </body>
</html>
