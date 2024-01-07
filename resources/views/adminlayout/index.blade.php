<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin AWL Syirkah</title>
  <link rel="icon" type="image/x-icon" href="/icon/favicon.ico">

  @include('adminlayout.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader row-flex justify-content-center align-items-center">
        <div class="card px-4 py-2 animation__shake bg-success rounded">
          <h3 class="text-white">AWL SYIRKAH</h3>
        </div>
  </div>

  <!-- Navbar -->
  @include('adminlayout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#0a681e">
    @include('adminlayout.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

@include('adminlayout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('adminlayout.script')
@stack('custom-scripts')
</body>
</html>
