@extends('main')

@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="{{ URL::asset('theme/js/jquery.subwayMap-0.5.0.js') }}"></script>

<style>
 /* The main DIV for the map */

    .subway-map
    {
        margin: 0;
        width: 500px;
        height:410px;
        background-color: white;
    }

    /* Text labels */
    .text
    {
        text-decoration: none;
        color: black;

    }

    #legend
    {
        float: left;
        width: 250px;
        height:400px;
    }

    #legend div
    {
        height: 25px;
    }

    #legend span
    {
        margin: 5px 5px 5px 0;
    }
    .subway-map span
    {
        width: 200px !important;
    }

</style>
<body class="theme-orange">
    
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">BUS READY SYSTEM - ADMIN</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ URL::asset('theme/img/doctor-female.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Session::get('user')->pengurus_nama }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a class="logout" href="/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="/home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:;" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Bus Route</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/route/route-marker">
                                    <span>Route Marker</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="javascript:;">
                                    <span>Bus Route</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/attendance/attendance_list">
                            <i class="material-icons">schedule</i>
                            <span>View Daily Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu-toggle">
                            <i class="material-icons">directions_bus</i>
                            <span>Driver</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/driver/driver_list" >
                                    <span>List of Driver</span>
                                </a>
                            </li>
                            <li>
                                <a href="/driver/add_driver" >
                                    <span>Add Driver</span>
                                </a>
                            </li>
                          </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>School Information</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/school/school_list" >
                                    <span>List of School</span>
                                </a>
                            </li>
                            <li>
                                <a href="/school/add_school" >
                                    <span>Add School</span>
                                </a>
                            </li>
                          </ul>
                    </li>
                    <li>
                        <a href="/report/view_report">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Generate Report</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);"><strong>Bus<strong> Ready System</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
            
        </aside>
        <!-- #END# Left Sidebar -->

           

     <!--main content start-->
	<section class="content">
        	<!--form-->
           <!-- <div class="row clearfix">-->
                
                <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                    
                    <div class="card">
                        <div class="header">
                            <h2>BUS ROUTE</h2>
                           
                        </div>
                        <div class="body">

                            
                            <fieldset>
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table" align="center">
                                      <thead>
                                      </thead>
                                      <tr>
                                        <td bgcolor="#dff0d8""><font size="4" >Driver Name</font></td>
                                        <td bgcolor="#dff0d8""></td>
                                      </tr>
                                      <tbody>

                                        @foreach($laluan_details as $d)
                                        <tr>
                                          <td>
                                            <input id="laluan" type="text-center" style="text-align: center;" value="{{$d->pemandu_nama}}" disabled/>
                                          </td>
                                           <td align="right">
                                                <form method="get" action="{{url('/route/'.$d->pemandu_id.'/edit')}}">
                                                    <button style="margin-bottom: 2px; display: block; width: 100px;" class="btn btn-warning btn-xs" type="submit" class="btn btn-primary btn-xs">Edit</button>
                                                </form>
                                                    <button id="view" onclick="changeData({{$d->laluan_id}});" style="margin-bottom: 2px; display: block; width: 100px;" class="btn btn-success btn-xs" data-toggle="collapse" data-target="#myModal"> View </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                </div>
                            </fieldset>
                        </div>
                    </div>
               <!-- </div>
            </div>-->
             <div id="displayRoute"></div>
                   
            <!-- tutup form -->
            </div>
    </section>
    <!--tutup body page-->
        </div>
    <script src="{{URL::asset('theme/js/jquery.js')}}"></script>
     <script src="{{URL::asset('theme/js/jquery-1.8.3.min.js')}}"></script>
  <script src="{{ URL::asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.js') }}"></script>

     <!-- Select Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!--waves-->
    <script src="{{ URL::asset('theme/plugins/node-waves/waves.js') }}"></script>

     <!-- Jquery Validation Plugin Css -->
    <script src="{{ URL::asset('theme/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Autosize Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>



    <script src="{{ URL::asset('theme/js/admin.js') }}"></script>
    <script src="{{ URL::asset('theme/js/pages/forms/basic-form-elements.js') }}"></script>

    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>
    <script src="{{ URL::asset('theme/js/jquery.subwayMap-0.5.0.js') }}"></script>


    <script>

    function changeData(data){

        $.ajax({

            url: "/getRouteDetails", 

            data: {laluan_id : data },

            success: function(result){

            $("#displayRoute").html(result);

        }});

    }

  </script>

  <script type="text/javascript">
        $(".subway-map").subwayMap({ debug: true });
    </script>

    <script>
    $(document).ready(function() {
        $.ajaxSetup({
         headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>

    @endsection