<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BUS READY SYSTEM</title>

    <link rel="shortcut icon" href="{{ URL::asset('theme/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/plugins/animate-css/animate.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/plugins/node-waves/waves.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/plugins/morrisjs/morris.css') }}" rel="stylesheet" type="text/css"> 

    <link href="{{ URL::asset('theme/css/themes/all-themes.css') }}" rel="stylesheet" type="text/css"> 
  </head>

  <body class="theme-red">

    @yield('content')

      <!--main content end-->

       <!--footer start-->

      @if (Session::has('user'))

      <!-- Footer -->
      <footer>
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
        </footer>
            <!-- #Footer -->

      @endif

      <!--footer end-->
     
  </section>

    <!-- Jquery Core Js -->
   <script src="{{ URL::asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('theme/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <!-- Select Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!--waves-->
    <script src="{{ URL::asset('theme/plugins/node-waves/waves.js') }}"></script>
    <!--countto plugin-->
    <script src="{{ URL::asset('theme/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <script src="{{ URL::asset('theme/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/morrisjs/morris.js') }}"></script>


    <script src="{{ URL::asset('theme/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <script src="{{ URL::asset('theme/plugins/chartjs/Chart.bundle.js') }}"></script>

    <script src="{{ URL::asset('theme/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>
    <script src="{{ URL::asset('theme/js/pages/index.js') }}"></script>

  </body>
</html>