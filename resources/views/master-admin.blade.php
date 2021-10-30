<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
    @yield('page-css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin" class="site_title"><i class="fa fa-paw"></i> <span>Fresh vegetables</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="/images/jjjj.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
            @include('include.left-menu')
            <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
    @include('include.top-navigation')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                @yield('breadcrumb')
                <div class="clearfix"></div>
                @yield('page-content')
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('include.footer')
    <!-- /footer content -->
    </div>
</div>
@include('include.script')
@yield('page-script')
<!-- Custom Theme Scripts -->
<script src="/build/js/custom.min.js"></script>
</body>
</html>
