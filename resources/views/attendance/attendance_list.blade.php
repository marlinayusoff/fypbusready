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
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                 data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">BUS READY SYSTEM - ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                  <!-- #END# Tasks -->
                  
                </ul>
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
                        <a href="/#">
                            <i class="material-icons">map</i>
                            <span>Bus Route</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:;">
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
                    <li>
                        <a href="/#">
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
	     <!--main content start-->
		<section class="content">
	        <div class="container-fluid">
	        	<div class="block-header">
                    <h2>
                        List of Attendance
                    </h2>
                </div><!--tutup header-->
                 <!-- Example Tab -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Attendance
                                </h2> 
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead class="inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Driver</th>
                                            <th>Date</th>
                                            <th>Stop Pickup</th>
                                            <th>School Drop</th>
                                            <th>School Pickup</th>
                                            <th>Stop Drop</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Student ID</th>
                                            <th>Driver</th>
                                            <th>Date</th>
                                            <th>Stop Pickup</th>
                                            <th>School Drop</th>
                                            <th>School Pickup</th>
                                            <th>Stop Drop</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                            </td>
                                            <td>
                                                <select id='filterText' style='display:inline-block' onchange='filterText()'>
                                                    <option value="all" selected>Select</option>
                                                    @foreach($attendance as $b)
                                                    <option value="{{$b->pemandu_nama}}">{{$b->pemandu_nama}}</option>
                                                     @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select id='filterText2' style='display:inline-block' onchange='filterText2()'>
                                                    <option value="all" selected>Select</option>
                                                    @foreach($attendance as $c)
                                                    <option value="{{$c->jadual_tarikh}}">{{$c->jadual_tarikh}}</option>
                                                     @endforeach
                                                </select>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                                <?php $i = 1; ?>
                                        @foreach($attendance as $key => $a)
                                        <tr class="content"> 
                                            <td>{{ $i++ }}</td>
                                            <td>{{$a->pelajar_nama}}</td>
                                            <td>{{$a->pemandu_nama}}</td>
                                            <td>{{$a->jadual_tarikh}}</td>
                                            <td>{{$a->jadual_stop_pickup}}</td>
                                            <td>{{$a->jadual_sekolah_turun}}</td>
                                            <td>{{$a->jadual_sekolah_pickup}}</td>
                                            <td>{{$a->jadual_stop_turun}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div><!--tutup body-->
                        </div><!--tutup card-->
                    </div><!--tutup col-->
                </div><!--tutup row-->

                <!-- #END# Example Tab -->

	        </div><!--tutup container-->
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

     <!-- Jquery DataTable Plugin Js -->
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('theme/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ URL::asset('theme/js/admin.js') }}"></script>
    <script src="{{ URL::asset('theme/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>

    <script>
    
            function filterText()
            {  
                var rex = new RegExp($('#filterText').val());
                if(rex =="/all/"){clearFilter()}else{
                    $('.content').hide();
                    $('.content').filter(function() {
                    return rex.test($(this).text());
                    }).show();
            }
            
            }

            function filterText2()
            {  
                var rex = new RegExp($('#filterText2').val());
                if(rex =="/all/"){clearFilter()}else{
                    $('.content').hide();
                    $('.content').filter(function() {
                    return rex.test($(this).text());
                    }).show();
            }
            
            }
            
        function clearFilter()
            {
                $('.filterText').val('');
                $('.content').show();
            }
    </script>
    
   
  @endsection