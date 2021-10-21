<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('backend/dist/css/dataTable.css') }}">

  <style>
    .model{
      position: absolute;
      display: none;
      min-width: 100%;
      min-height: 100%;
      background: #111;
      opacity: 0.75;
      z-index: 1500;
    }
    .create-form{
      position: absolute;
      display: none;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      align-items: center;
      justify-content: center;
    }
    #create-form{
      width: 50%;
      z-index: 1501;
    }

    .update-form{
      position: absolute;
      display: none;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      align-items: center;
      justify-content: center;
    }
    #update-form{
      width: 50%;
      z-index: 1501;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="model">
  </div>
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('Admin.layout.header')

    @include('Admin.layout.menu')
  
    @yield('content')
    
    @include('Admin.layout.footer')
  </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('.btn-create').click(function(){
      $('.model').css('display','block');
      $('.create-form').css('display','flex');
      $('.update-form').css('display','none');
      $('.input-create').val('');
    });

    $('.close').click(function(){
      $('.model').css('display','none');
      $('.create-form').css('display','none');
      $('.update-form').css('display','none');
    });

    $('.btn-update').click(function(){
      $('.model').css('display','block');
      $('.create-form').css('display','none');
      $('.update-form').css('display','flex');
    });
  });
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
{{-- Validate Form --}}
<script src="{{ asset('backend/dist/js/validateForm.js') }}"></script>
<script src="{{ asset('backend/dist/js/ajax.js') }}"></script>
</body>
</html>
