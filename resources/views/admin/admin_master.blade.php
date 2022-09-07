
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Veltrix - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="{{ asset('backend/assets/plugins/chartist/css/chartist.min.css')}}">
            <!-- DataTables -->
            <link href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
            <!-- Responsive datatable examples -->
            <link href="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             @include('admin.body.header');
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar');
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('admin')

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{ asset('backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('backend/assets/js/waves.min.js')}}"></script>
        <!-- Datatable --> 
          <!-- Required datatable js -->
          <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
          <!-- Buttons examples -->
          <script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/jszip.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/pdfmake.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/vfs_fonts.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/buttons.print.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
          <!-- Responsive examples -->
          <script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
          <script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
  
          <!-- Datatable init js -->
          <script src="{{ asset('backend/assets/pages/datatables.init.js')}}"></script>       
        <!-- fin datatable -->
        <!--Chartist Chart-->
        <script src="{{ asset('backend/assets/plugins/chartist/js/chartist.min.js')}}"></script>
        <script src="{{ asset('backend/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>

        <!-- peity JS -->
        <script src="{{ asset('backend/assets/plugins/peity-chart/jquery.peity.min.js')}}"></script>

        <script src="{{ asset('backend/assets/pages/dashboard.js')}}"></script>
        <!--{{ asset('backend/')}}-->
        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js')}}"></script>
        
    </body>
</html>