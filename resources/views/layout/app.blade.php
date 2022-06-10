<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="LaraMatrix" />
    <meta name="description" content="LaraMatrix" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield("titulo", "LaraMatrix")</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("matrix/assets/images/favicon.png")}}"/>
    <!-- Custom CSS -->
    <link href="{{asset("matrix/assets/libs/flot/css/float-chart.css")}}" rel="stylesheet" />
    <!-- Custom CSS for Pages -->
    @yield('style')
    <link href="{{asset("matrix/dist/css/style.min.css")}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div 
      id="main-wrapper" 
      data-layout="vertical" 
      data-navbarbg="skin5" 
      data-sidebartype="full" 
      data-sidebar-position="absolute" 
      data-header-position="absolute" 
      data-boxed-layout="full"
    >
        @include('layout.header')
        @include('layout.aside')


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @include('layout.bread')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                {{-- @yield('contenido') --}}
                @include('layout.content')
            </div>

            @include('layout.footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset("matrix/assets/libs/jquery/dist/jquery.min.js")}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset("matrix/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
    <script src="{{asset("matrix/assets/extra-libs/sparkline/sparkline.js")}}"></script>
    <!--Wave Effects -->
    <script src="{{asset("matrix/dist/js/waves.js")}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset("matrix/dist/js/sidebarmenu.js")}}"></script>
    @yield('scriptsPluggins')
    <!--Custom JavaScript -->
    <script src="{{asset("matrix/dist/js/custom.min.js")}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{asset("matrix/dist/js/pages/dashboards/dashboard1.js")}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset("matrix/assets/libs/flot/excanvas.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot/jquery.flot.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot/jquery.flot.pie.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot/jquery.flot.time.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot/jquery.flot.stack.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot/jquery.flot.crosshair.js")}}"></script>
    <script src="{{asset("matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
    <script src="{{asset("matrix/dist/js/pages/chart/chart-page-init.js")}}"></script>
    <!--Script for Pages -->
    @yield('scripts')
    
  </body>
</html>
