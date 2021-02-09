
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SAAF | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="{{'css/app.css'}}">

</head>


<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


@include('layouts.admin.components.navbar')

@include('layouts.admin.components.sidebar')



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @yield('usuarios')

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('layouts.admin.components.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

@include('layouts.admin.components.aside')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{url('js/app.js')}}"></script>


</body>
</html>

