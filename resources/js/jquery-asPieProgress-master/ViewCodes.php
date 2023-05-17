<?php include '../../common/common_includes.php'; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>jQuery asPieProgress Plugin Demos</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<style type="text/css">
    
.pie_progress__content, .pie_progress__number, .pie_progress__label, .pie_progress__icon {
    width: 100%;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
}
.pie_progress__number {
    top: 60%;
    font-size: 24px;
}
.pie_progress {
    text-align: center;
    position: relative;
    transform-style: preserve-3d;
}
</style>


</head>
<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<div class="jquery-script-clear"></div>
</div>
</div>
    <section>
        <h1>jQuery asPieProgress Plugin Demos</h1>
        <section>
            <div class="row">
                <div class="pie_progress col-md-3" role="progressbar" data-goal="66">
                    <div class="pie_progress__number">0%</div>
                    <div class="pie_progress__label">New Clients</div>
                </div>
                <div class="pie_progress col-md-3" role="progressbar" data-goal="-50" data-barcolor="#3daf2c" data-barsize="10" aria-valuemin="-100" aria-valuemax="100">
                    <div class="pie_progress__content">Hello world</div>
                    <div class="pie_progress__number">0%</div>
                </div>
                <div class="pie_progress col-md-3" role="progressbar" data-goal="75" data-barcolor="#03fcc6" data-barsize="15" aria-valuemin="0" aria-valuemax="100">
                    <div class="pie_progress__content">Hello world</div>
                </div>
                <div class="pie_progress col-md-3" role="progressbar" data-goal="100" aria-valuemin="0" aria-valuemax="100">
                    <span class="pie_progress__number">0%</span>
                </div>
                <div class="col-md-3">
                    <button id="button_start">start()</button>
                    <button id="button_stop">stop()</button>
                    <button id="button_go">go('50')</button>
                    <button id="button_go_percentage">go('50%')</button>
                    <button id="button_finish">finish()</button>
                    <button id="button_reset">reset()</button>
                </div>
            </div>
        </section>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="../../vendor/jquery-asPieProgress-master/dist/jquery-asPieProgress.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('.pie_progress').asPieProgress({
            'namespace': 'pie_progress'
        });
        $('#button_start').on('click', function(){
            $('.pie_progress').asPieProgress('start');
        });
        $('#button_finish').on('click', function(){
             $('.pie_progress').asPieProgress('finish');
        });
        $('#button_go').on('click', function(){
             $('.pie_progress').asPieProgress('go',50);
        });
        $('#button_go_percentage').on('click', function(){
            $('.pie_progress').asPieProgress('go','50%');
        });
        $('#button_stop').on('click', function(){
            $('.pie_progress').asPieProgress('stop');
        });
        $('#button_reset').on('click', function(){
            $('.pie_progress').asPieProgress('reset');
        });
    });
    </script>
</body>
</html>