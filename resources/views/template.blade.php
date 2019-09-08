<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistem Informasi Penjualan</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="{{ url('adminlte/plugins/jquery/jquery.min.js')}}"></script> 
  <!-- jQuery -->
  {{-- https://pastebin.com/nd86mPtq   --}}
  <script type="text/javascript">
    $(function(){
      var url = window.location;
      $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
      }).addClass('active');
      $('ul.nav-treeview a').filter(function() {
        return this.href == url;
      }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open') .prev('a').addClass('active'); 
    });
  </script>  
 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

{{-- header --}}
    @include('partials.header');

{{-- sidebar --}}
    @include('partials.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

{{-- footer --}}
  @include('partials.footer');
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- Bootstrap 4 -->
<script src="{{ url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
