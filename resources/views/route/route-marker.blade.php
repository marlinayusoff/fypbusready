@extends('main')

@section('content')
 <style>
        #googleMap {
            height: 400px;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
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
                            <h2>ROUTE MARKER</h2>

                        </div>
                        <div class="body">
                            <h5>Please fill in below to add new checkpoint</h5>
                             {!! Form::open(array('url'=>'/route/route-marker','files'=>true)) !!}
                                {{ csrf_field()}}
                                    
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" name="checkpoint_nama" placeholder="Checkpoint name" required>
                                            </div>
                                        
                                        
                                            <div class="form-group">
                                                <label class="form-label">Map</label>
                                                <input type="text" class="form-control" id="searchmap" required>
                                                <div id="googleMap"></div><br>
                                            </div>
                                        
                                        
                                            <div class="form-group">
                                                <label for="">Lat</label>
                                                <input type="text" class="form-control" name="checkpoint_lat" id="lat" placeholder="tengok lat kat sini" readonly>
                                            </div>
                                        
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="">Lng</label>
                                                <input type="text" class="form-control" name="checkpoint_lng" id="lng" placeholder="tengok lng kat sini" readonly>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary waves-effect" type="submit">Save</button>
                                        {!! Form::close() !!}
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--tutup card-->

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
        var geocoder;
        var map;
        var marker;
        var searchBox;

        /*
        * Google Map with marker
        */
            map = new google.maps.Map(document.getElementById("googleMap"), {
                center:{
                    lat: 2.929997,
                    lng: 101.7774225
                },
                zoom:15
            });

            geocoder = new google.maps.Geocoder();

            marker = new google.maps.Marker({
                position: {
                    lat: 2.929997,
                    lng: 101.7774225
                },
                map: map,
                draggable: true
            });

            searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

            google.maps.event.addListener(searchBox,'places_changed',function(){

                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i,place;

                for(i=0; place=places[i]; i++){
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }

                map.fitBounds(bounds);
                map.setZoom(15);
            });

            google.maps.event.addListener(marker,'position_changed',function(){

                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });

    </script>


    @endsection