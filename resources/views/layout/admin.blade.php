<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPK | Desa Mangir</title>
  <link rel = "icon" src="{{asset('template/dist/img/bwi.png')}}" type="image/x-icon">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!--css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  @stack('css')

</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{asset('template/dist/img/bwi.png')}}" alt="AdminLTELogo" height="70" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a style="text-decoration: none;" href="/" class="brand-link">
        <img src="{{asset('template/dist/img/bwi.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Desa Mangir</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('template/dist/img/admin.png')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          {{-- <a href="#" class="d-block"></a> --}}
          {{-- <a href="#" class="d-block">{{Auth::user()->name}}</a> --}}
            <a style="text-decoration: none; font-size: 14pt;" href="#" class="d-block">
              @if(!empty(auth()->user()->name))
               {{ucfirst(auth()->user()->name)}} 
               @endif
              <br>
            </a>  
            {{-- <!-- <span style="color:white">{{auth()->user()->email}}</span> --> --}}
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/warga" class="nav-link"> 
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                  Data Warga
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datasurvey" class="nav-link"> 
                <i class="nav-icon fas fa-chart-line"></i>
                <p>
                  Data Survey
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Data Kriteria
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/kriteria" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kriteria</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/subkriteria" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SubKriteria</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/rekomendasi" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Rekomendasi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/laporan" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/logout" class="nav-link">
                <i class="nav-icon fas fa-lock"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>    
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021-2022<a href="https://adminlte.io"> Sistem Pendukung Keputusan</a>.</strong>
      Desa Mangir
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('template/dist/js/adminlte.js')}}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
  <script src="{{asset('template/plugins/raphael/raphael.min.js')}}"></script>
  <script src="{{asset('template/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
  <script src="{{asset('template/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('template/plugins/chart.js/Chart.min.js')}}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('template/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('template/dist/js/pages/dashboard2.js')}}"></script>

  @stack('scripts')
</body>
</html>
