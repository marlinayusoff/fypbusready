<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BUS READY FOR ADMIN</title>

    <link rel="shortcut icon" href="{{ URL::asset('theme/favicon.ico') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('theme/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <!-- Animation Css -->
    <link href="{{ URL::asset('theme/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ URL::asset('theme/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ URL::asset('theme/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <link href="{{ URL::asset('theme/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/css/zabuto_calendar.css') }}">


    <link href="{{ URL::asset('theme/css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/plugins/animate-css/animate.css') }}" rel="stylesheet" type="text/css">

     <link href="{{ URL::asset('theme/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('theme/plugins/node-waves/waves.css') }}" rel="stylesheet" type="text/css">

     <link href="{{ URL::asset('theme/plugins/morrisjs/morris.css') }}" rel="stylesheet" type="text/css"> 

    <link href="{{ URL::asset('theme/css/themes/all-themes.css') }}" rel="stylesheet" type="text/css"> 

    <link href="{{ URL::asset('theme/css/style-responsive.css') }}" rel="stylesheet" type="text/css">
    

      
    @yield('content')

      <!--main content end-->
      <!--footer start-->
     
  

<!--@if (Session::get('category') == 'staff')
@if (Request::path() !== 'Appointment')  
    <script src="{{ URL::asset('theme/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ URL::asset('theme/js/common-scripts.js') }}"></script>
    <script src="{{ URL::asset('theme/js/zabuto_calendar.js') }}"></script>

    @endif
    @endif
    @if (Session::get('category') == 'admin')
    <script src="{{ URL::asset('theme/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ URL::asset('theme/js/common-scripts.js') }}"></script>
    @endif
    @if (Session::get('category') == 'patient')
    <script src="{{ URL::asset('theme/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ URL::asset('theme/js/common-scripts.js') }}"></script>
    @endif-->

   

    <script type="text/javascript">
      $('.go-top').on('click', function() {
        $('html, body').animate({ scrollTop: 0}, 'slow');
      });
    </script>

  </body>
</html>