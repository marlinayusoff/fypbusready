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
                    <li>
                        <a href="javascript:;" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Bus Route</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/route/list-bus-route">
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
                    
                    <li class="active">
                        <a href="javascript:;" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>School Information</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
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
        <div class="container-fluid">
        	<!--form-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                           
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" action="/school/update" method="post"  id="contact_form">
                            	{{ csrf_field()}}
                                <h3>School Information</h3>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{ $item->sekolah_nama }}" name="sekolah_nama" required>
                                            <label class="form-label">School Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <table class="table table-hover table-bordered text-center clearfix">
                                          <thead class="thead-inverse">
                                            <tr>
                                                <th colspan="3">School Session</th>
                                            </tr>
                                            <tr>
                                                <td>Morning</td>
                                                <td>Afternoon</td>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control show-tick" name="sekolah_sesi_pagi">
                                                        <option <?php if($item->sekolah_sesi_pagi == "Yes") {echo "selected"; } ?>  >Yes</option>
                                                        <option  <?php if($item->sekolah_sesi_pagi == "No") {echo "selected"; } ?> >No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control show-tick"  value="{{ $item->sekolah_sesi_petang }}" name="sekolah_sesi_petang">
                                                        <option <?php if($item->sekolah_sesi_petang == "Yes") {echo "selected"; } ?>  >Yes</option>
                                                        <option  <?php if($item->sekolah_sesi_petang == "No") {echo "selected"; } ?> >No</option>
                                                    </select>
                                                </td>
                                            </tr>
                                          </tbody>
                                        </table> 
                                    </div> 
                                    <br>
                                    <div class="form-group form-float">
                                        <h2 class="card-inside-title">
                                            Address*
                                        </h2>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="textarea" rows="2" class="form-control no-resize auto-growth" value="{{ $item->sekolah_alamat }}"  name="sekolah_alamat"></input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="sekolah_tel" value="{{ $item->sekolah_tel }}" class="form-control" required>
                                            <label class="form-label">Telephone*</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="sekolah_id" value="{{ $item->sekolah_id }}">
                                         <button class="btn btn-primary waves-effect" type="submit">SAVE</button>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tutup form -->
            </div>
    </section>
    <!--tutup body page-->
        </div>
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

 @endsection