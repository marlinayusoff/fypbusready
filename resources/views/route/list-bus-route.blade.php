@extends('main')

@section('content')

<style type="text/css">
        #mymap {
            border:1px solid black;
            width: 100%;
            height: 400px;
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
                            <li class="active">
                                <a href="javascript:;">
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
        <div class="container-fluid">
            <!--form-->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>LIST OF CHECKPOINTS</h2>
                                </div>
                                <div class="body">
                                    <div id="mymap"></div>
                                    <br>
                                    <h4>List of saved checkpoints in this system</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>Name</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    @foreach($locations as $key => $d)
                                                    <tr>
                                                        <th scope="row">{{ $i++ }}</th>
                                                        <td>{{$d->checkpoint_nama}}</td>
                                                        <td>
                                                            <form method="post" action="{{ '/route/list-bus-route/'.$d->checkpoint_id}}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                                <button style="margin-bottom: 2px; display: block; width: 100px;" type="submit" class="btn btn-danger btn-xs"> Delete <i class="fa fa-trash-o "></i></button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <!--tutup body table-->
                                            </table>
                                            <!-- tutup table -->
                                        </div>
                                        <a style="margin-bottom: 2px; display: block; width: 100px;" type="submit" href="/route/route-marker" class="btn btn-primary btn-xs"> Add Route <i class="fa fa-plus"></i> </a>
                                </div>
                             </div> <!--tutup card-->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <script src="{{ URL::asset('theme/js/demo.js') }}"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-yX8G29yOVvQ-BVMua1ZrBxXPi5Z7M1k&libraries=places"></script>

    <script type="text/javascript">

        var locations = <?php print_r(json_encode($locations)) ?>;

        var mymap = new GMaps({
          el: '#mymap',
          lat: 3.0100,
          lng: 101.80,
          zoom:14
        });


        $.each( locations, function( index, value ){
            mymap.addMarker({
              lat: value.checkpoint_lat,
              lng: value.checkpoint_lng,
              title: value.checkpoint_nama,
              click: function(e) {
                alert('This is '+value.checkpoint_nama);
              }
            });
       });


      </script>


    @endsection