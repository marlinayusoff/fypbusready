@extends('main')
@section('content')

 <body class="login-page">
  <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>BUS</b> Ready System</a>
            <small>This is test purpose</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="/" method="POST">
              <!--<div class="limiter">
                <div class="container-login100">
                  <div class="wrap-login100">
                   <form class="form-login" action="/" method="post">-->
                      {{ csrf_field() }}
                      <!--<h2 class="form-login-heading">Login</h2>
                      <div class="login-wrap">
                          <input type="text" class="form-control" name="userName" placeholder="User ID" autofocus>-->
                          <div class="msg">Sign in to start your session</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="userName" placeholder="User Id" required autofocus>
                                </div>
                            </div>
                          <!--<input type="password" class="form-control" name="userPassword" placeholder="Password">
                              <span class="pull-right">
                                <a data-toggle="modal" href="login.html#myModal"> Lupa Kata Laluan?</a>-->
                          <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="userPassword" placeholder="Password" required>
                            </div>
                        </div>

                            </span>
                          <!--<button class="btn btn-theme03 btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> LOGIN </button>
                          <hr>
                      </div>

                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Forgot Password? </h4>
                              </div>
                              <div class="modal-body">
                                  <p>Please insert the email for reset the password</p>
                                  <input type="text" name="email" placeholder="Emel" autocomplete="off" class="form-control placeholder-no-fix">

                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="button">Send</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
                  <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button> 
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>

                    </form>
                </div>
              </div>
              <!--tutup-->      

      <script src="{{ URL::asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('theme/js/bootstrap.js') }}"></script>

    <!--waves-->
    <script src="{{ URL::asset('theme/plugins/node-waves/waves.js') }}"></script>

    <script src="{{ URL::asset('theme/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ URL::asset('theme/js/admin.js') }}"></script>
  
    <script src="{{ URL::asset('theme/js/pages/examples/sign-in.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::asset('theme/js/jquery.backstretch.min.js') }}"></script>
    <!--<script>
        $.backstretch("{{ URL::asset('theme//img/login-bg.jpg') }}", {speed: 500});
    </script>-->

    @endsection
