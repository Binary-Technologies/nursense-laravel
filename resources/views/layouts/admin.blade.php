<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nursense</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="./img/favicon.ico" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/plugins/lts/css/bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- ckeditor cdn -->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    
</head>

<body>

    @include('includes.header-admin')

    @yield('dashboardContent')

    @include('includes.footer-admin')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/plugins/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lts/js/bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>