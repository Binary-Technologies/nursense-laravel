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

    <!-- Google Charts starts -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            packages: ['corechart', 'bar']
        });
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Level');

            data.addRows([
                [{
                    v: [8, 0, 0],
                    f: '8 am'
                }, 1],
                [{
                    v: [9, 0, 0],
                    f: '9 am'
                }, 2],
                [{
                    v: [10, 0, 0],
                    f: '10 am'
                }, 3],
                [{
                    v: [11, 0, 0],
                    f: '11 am'
                }, 4],
                [{
                    v: [12, 0, 0],
                    f: '12 pm'
                }, 5],
                [{
                    v: [13, 0, 0],
                    f: '1 pm'
                }, 6],
                [{
                    v: [14, 0, 0],
                    f: '2 pm'
                }, 7],
                [{
                    v: [15, 0, 0],
                    f: '3 pm'
                }, 8],
                [{
                    v: [16, 0, 0],
                    f: '4 pm'
                }, 9],
                [{
                    v: [17, 0, 0],
                    f: '5 pm'
                }, 10],
            ]);

            var options = {
                title: 'Level Throughout the Day',
                hAxis: {
                    title: 'Time of Day',
                    format: 'h:mm a',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: 'Rating (scale of 1-10)'
                }
            };

            var chart1 = new google.visualization.ColumnChart(
                document.getElementById('chart_div1'));
            var chart2 = new google.visualization.ColumnChart(
                document.getElementById('chart_div2'));
            var chart3 = new google.visualization.ColumnChart(
                document.getElementById('chart_div3'));

            chart1.draw(data, options);
            chart2.draw(data, options);
            chart3.draw(data, options);
        }
    </script>
    <!-- Google Charts ends -->

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

    @yield('scripts')
</body>

</html>