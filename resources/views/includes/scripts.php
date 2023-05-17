<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap/bootstrap-4.6.0.bundle.min.js" crossorigin="anonymous"></script>

<!-- Font Awasome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>

<!-- Fancy Box js -->
<script src="plugins/jquery.fancybox.min.js"></script>

<!-- wow js -->
<script src="plugins/wow.js"></script>
<script>
    new WOW().init();
</script>

<!-- owl carousel -->
<!-- <script src="plugins/owl.carousel.js"></script> -->
<script src="plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="../js/owl.js"></script>

<!-- bxslider - vertical -->
<script src="plugins/jquery.bxslider.js"></script>

<!--  -->
<script src="plugins/jquery.easing.1.3.js"></script>

<!--  -->
<script src="plugins/jquery.fitvids.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

<script src="js/jquery-asPieProgress-master/dist/jquery-asPieProgress.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.pie_progress').asPieProgress({
            'namespace': 'pie_progress'
        });
        $('#button_start').on('click', function() {
            $('.pie_progress').asPieProgress('start');
        });
        $('#button_finish').on('click', function() {
            $('.pie_progress').asPieProgress('finish');
        });
        $('#button_go').on('click', function() {
            $('.pie_progress').asPieProgress('go', 50);
        });
        $('#button_go_percentage').on('click', function() {
            $('.pie_progress').asPieProgress('go', '50%');
        });
        $('#button_stop').on('click', function() {
            $('.pie_progress').asPieProgress('stop');
        });
        $('#button_reset').on('click', function() {
            $('.pie_progress').asPieProgress('reset');
        });
    });
</script>

<script type="text/javascript">
    window.onload = function() {
        setTimeout(function() {
            typeWriter();
        }, 500);
        setTimeout(function() {
            $('.pie_progress').asPieProgress('start');
        }, 500);
    };
</script>