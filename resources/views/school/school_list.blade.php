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
                    <li>
                        <a href="/#">
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
                                <a href="javascript:;">
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
        <!-- #END# Left Sidebar -->


	     <!--main content start-->
		<section class="content">
	        <div class="container-fluid">
	        	<div class="block-header">
                <h2>
                    List of School
                </h2>
            </div>
            <!-- Table start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                School Information
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        	<td>#</td>
                                        	<td>Name</td>
                                        	<td>Morning Session</td>
                                        	<td>Afternoon Session</td>
                                            <td>Address</td>
                                        	<td>Telephone</td>
                                        	<td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php $i = 1; ?>

                                        @foreach($data as $key => $d)
                                    	<tr>
                                    		<th scope="row">{{ $i++ }}</th>
                                    		<td>{{$d->sekolah_nama}}</td>
                                          	<td>{{$d->sekolah_sesi_pagi}}</td>
											<td>{{$d->sekolah_sesi_petang}}</td>
                                            <td>{{$d->sekolah_alamat}}</td>
											<td>{{$d->sekolah_tel}}</td>
											<td>
												<form method="post" action="{{ '/school/'.$d->sekolah_id}}">
                    							{{ csrf_field() }}
                    							{{ method_field('DELETE') }}
                                                    <button style="margin-bottom: 2px; display: block; width: 100px;" type="submit" class="btn btn-danger btn-xs"> Delete <i class="fa fa-trash-o "></i></button>
                                                </form>
												<form method="get" action="{{url('/school/'.$d->sekolah_id.'/edit')}}">
                                                    <button style="margin-bottom: 2px; display: block; width: 100px;" type="submit" class="btn btn-primary btn-xs"> Edit <i class="fa fa-exclamation"></i> </button>
                                                </form>

											</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <!--tutup body table-->
                                </table>
                                <!-- tutup table -->
                            </div>
                            <!--tutup class table responsive-->
                        </div>
                        <!--tutup whole table-->
                        <center>{{$data->links()}}</center>
                    </div>
                    <!--tutup card-->
                </div>
                <!--tutup column-->
            </div>
            <!-- tutup modal -->
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
    <script src="{{ URL::asset('theme/js/pages/forms/form-wizard.js') }}"></script>

    
    <script src="{{ URL::asset('theme/js/pages/index.js') }}"></script>
    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>

    @endsection
