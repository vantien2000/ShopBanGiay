@extends('admin.login.main')
@section('content')
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ asset('admin/index2.html') }}" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>
    
            <form id="loginForm" name="loginForm" action="{{ url('admin/login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" id="user" class="form-control" placeholder="Enter Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div id="errUser"></div>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>  
                </div>
                <div id="errPass"></div>
                <div class="row">
                    <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Remember Me
                        </label>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                @if (session('message'))
                    <div class="text-danger">{{ session('message') }}</div>
                @endif
            </form>
    
            <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
            </div>
            <!-- /.social-auth-links -->
    
            <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
            </p>
            {{-- <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
            </p> --}}
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
@endsection
