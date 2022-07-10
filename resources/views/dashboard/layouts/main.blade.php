<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard | {{ auth()->user()->name }}</title>
            <!-- Custom fonts for this template-->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('vendor/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/vendor/admin/css/trix.css">
        <script type="text/javascript" src="/vendor/admin/js/trix.js"></script>
        <style>
          trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
          }
        </style>
  </head>
  <body>
    <div class="page-top">
      <div id="wrapper">
@include('dashboard.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
          <!-- Main Content -->
          <div id="content">
@include('dashboard.layouts.header')
    <main>
        @yield('container')
    </main>
  </div>
  </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('vendor/admin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('vendor/admin/js/demo/datatables-demo.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('vendor/admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/demo/chart-pie-demo.js') }}"></script>
    <script>
      document.addEventListener('trix-file-accept',function(e){
        e.preventDefault();
      })
    </script>
</body>
</html>
