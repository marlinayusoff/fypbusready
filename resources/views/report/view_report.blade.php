@extends('main')

@section('content')

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
    <nav class="navbar" id="app">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">BUS READY SYSTEM - ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                   
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
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                     <li>
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
                            <li>
                                <a href="/route/bus-route">
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
                                <a href="/driver/list_driver" >
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
                                <a href="/school/school_list">
                                    <span>List of School</span>
                                </a>
                            </li>
                            <li>
                                <a href="/school/add_school">
                                    <span>Add School</span>
                                </a>
                            </li>
                          </ul>
                    </li>
                    <li class="active">
                        <a href="javascript:;">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Generate Report</span>
                        </a>
                    </li>

                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
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
	        <div class="container-fluid">
	        	<div class="block-header">
                <h2>
                    Report
                </h2>
                </div>
            <!-- Table start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                            <!--button untuk print-->
                            <button class="btn pull-right btn-info" style="margin:10px 30px 10px 0px;" > <i class="fa fa-print"></i> Print PDF</button>
                            <br>
                            <br>
                        </div>
                        <div class="card" id="print-area-1">
                        <div class="header">
                            <h3>Basic Information</h3>
                        </div>
                        <!-- Widgets -->

                        <div class="row clearfix" style="margin:15px;">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                                <div class="info-box bg-blue hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Total School</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $total_school }}" data-speed="15" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                                <!--tutup info-box-->
                            </div>
                            <!--tutup col-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">Total Driver</div>
                                        <div class="number count-to" data-from="0" data-to="{{ $total_driver }}" data-speed="15" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                                <!--tutup info-box-->
                            </div>
                            <!--tutup col-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">NEW TASKS</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                                <!--tutup info-box-->
                            </div>
                            <!--tutup col-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">NEW TASKS</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                                <!--tutup info-box-->
                            </div>
                            <!--tutup col-->
                        </div>
                        <!--tutup row-->
                   
                    <!--start school information-->
                    <div class="row clearfix" style="margin:15px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="centered d-inline" style="font:bold; padding-top:20px;padding-bottom:20px;">
                            <div class="header">
                                <h3>School Information</h3>
                            </div>
                            <div class="row clearfix">
                                <!--loop setiap sekolah-->
                                @foreach($school as $d) 
                                <div class="col-md-6">
                                    <i class="fa fa-mortar-board" style="font-size:80px;display:block;text-align:center"></i>
                                    <h4>{{$d->sekolah_nama}}</h4>
                                      <!-- morning session -->
                                      <div class="genderText2"><i class="fa fa-calendar" aria-hidden="true"></i> Morning: {{!empty($morning_session[$d->sekolah_id]) ? $morning_session[$d->sekolah_id] : '0'}} people</div>
                                      <!-- afternoon session -->
                                      <div class="genderText2"> <i class="fa fa-calendar" aria-hidden="true"></i>  Afternoon: {{!empty($afternoon_session[$d->sekolah_id]) ? $afternoon_session[$d->sekolah_id] : '0'}} people</div>
                                </div>
                                @endforeach
                             </div>
                          </div>

                          </div>
                          <!--end school information-->

                          <!--start attendance information-->
                            <div class="row clearfix" style="margin:15px;">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" class="centered d-inline" style="font:bold; padding-top:20px;padding-bottom:20px;">
                                  <div class="header">
                                    <h3>Attendance Information (<?php echo date('Y'); ?>)</h3>
                                  </div>
                                  <div class="row clearfix">
                                      <div class="row mt">
                                        <!--CUSTOM CHART START -->
                                        <div class="body">
                                          <div class="border-head">
                                              <h3>By Months:</h3>
                                          </div>
                                          <div class="custom-bar-chart">
                                            <ul class="y-axis">
                                                <li><span>5</span></li>

                                                <li><span>4</span></li>

                                                <li><span>3</span></li>

                                                <li><span>2</span></li>

                                                <li><span>1</span></li>

                                                <li><span>0</span></li>
                                            </ul>
                                            <?php $row = array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"); 
                                              $i = 0;
                                            ?>
                                            @foreach($visit as $e)
                                            <div class="bar">
                                                <div class="title">{{ $row[$i++] }}</div>
                                                <div class="value tooltips" data-original-title="{{ $e }}" data-toggle="tooltip" data-placement="top" style="height: {{$e*20}}%;">{{ $e }}</div>
                                            </div>
                                            @endforeach
                                          </div>
                                        </div>
                                        <!--custom chart end-->
                                      </div>
                                    </div>
                                  </div>
                                  <!--end attendance information-->


                        </div>
                    <!--tutup card-->
                    </div>
                <!--tutup column-->
            </div>
            </div>
            <!-- tutup modal -->
	        </div>
    	</section>
    	<!--tutup body page-->


      </div>
  <!--main content start-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>

    <script src="{{ URL::asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('theme/js/common-scripts.js') }}"></script>

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

    <script src="{{ URL::asset('theme/js/admin.js') }}"></script>

    <script src="{{ URL::asset('theme/js/zabuto_calendar.js') }}"></script>

    
    <script src="{{ URL::asset('theme/js/pages/index.js') }}"></script>
    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>


    <script type="text/javascript">


            $("button").click(function () {

          print()

      });

        

  </script>

    @endsection
