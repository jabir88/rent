<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Options Admin - Responsive Web Application Kit</title>

    <!-- ========== COMMON STYLES ========== -->
    <!-- ========== COMMON STYLES ========== -->
    <link rel="stylesheet" href="{{asset('backend/css/')}}/bootstrap.min.css" media="screen" >
    <link rel="stylesheet" href="{{asset('backend/css/')}}/font-awesome.min.css" media="screen" >
    <link rel="stylesheet" href="{{asset('backend/css/')}}/animate-css/animate.min.css" media="screen" >
    <link rel="stylesheet" href="{{asset('backend/css/')}}/lobipanel/lobipanel.min.css" media="screen" >

    <!-- ========== PAGE STYLES ========== -->
    <link rel="stylesheet" href="{{asset('backend/css/')}}/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/js/')}}/DataTables/datatables.min.css"/>

    <!-- ========== THEME CSS ========== -->
    <link rel="stylesheet" href="{{asset('backend/css/')}}/main.css" media="screen" >

    <!-- ========== MODERNIZR ========== -->
    <script src="{{asset('backend/js/')}}/modernizr/modernizr.min.js"></script>



</head>
<style media="screen">
      .invalid-feedback{
    font-size: 12px;
        color: red;
  }
</style>
<body class="top-navbar-fixed">
<div class="main-wrapper">

    <!-- ========== TOP NAVBAR ========== -->
    @include('backend.inc.nav')

    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <!-- ========== LEFT SIDEBAR ========== -->
    @include('backend.inc.leftsidebar')
            <!-- /.left-sidebar -->

@yield('contents')

@include('backend.inc.rightsidebar')
            <!-- /.right-sidebar -->

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->


<!-- ========== COMMON JS FILES ========== -->
<script src="{{asset('backend/js/')}}/jquery/jquery-2.2.4.min.js"></script>
<script src="{{asset('backend/js/')}}/jquery-ui/jquery-ui.min.js"></script>
<script src="{{asset('backend/js/')}}/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('backend/js/')}}/pace/pace.min.js"></script>
<script src="{{asset('backend/js/')}}/lobipanel/lobipanel.min.js"></script>
<script src="{{asset('backend/js/')}}/iscroll/iscroll.js"></script>

<!-- ========== PAGE JS FILES ========== -->
<script src="{{asset('backend/js/')}}/prism/prism.js"></script>
<script src="{{asset('backend/js/')}}/DataTables/datatables.min.js"></script>

<!-- ========== THEME JS ========== -->
<script src="{{asset('backend/js/')}}/main.js"></script>
<script>
    $(function($) {
        $('#example').DataTable();

        $('#example2').DataTable( {
            "scrollY":        "300px",
            "scrollCollapse": true,
            "paging":         false
        } );

        $('#example3').DataTable();
    });
</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->


</body>
</html>
