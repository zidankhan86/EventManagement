
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- theme meta -->
    <meta name="theme-name" content="Event Management" />

    <title>Event Management</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    {{-- ti ti cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- PLUGINS CSS STYLE -->
    <script src="{{asset('admin/js/axios.min.js')}}"></script>
    <link href="{{asset('admin/assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel='stylesheet'>
    <link href="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel='stylesheet'>


    <link href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}" rel='stylesheet'>







    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('admin/assets/css/sleek.css')}}" />

    <!-- FAVICON -->
    <link href="admin/assets/img/favicon.png" rel="shortcut icon" />


    <script src="{{asset('admin')}}"></script>

  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <div class="wrapper">

      <!-- Github Link -->

      {{-- <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a> --}}




       @include('backend\components\sidebar')


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">



            @include('backend\components\nav')



              @yield('content');



            @include('backend\components\footer')

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <!-- Ajax -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/chart.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
    <script src="{{asset('admin/assets/js/vector-map.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/assets/js/date-range.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/sleek.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/[@mdi/font](https://cdn.jsdelivr.net/npm/%40mdi/font)@6.x.x/css/materialdesignicons.min.css">


</body>
</html>

