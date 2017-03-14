<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faktury</title>

    <!-- Bootstrap -->
    <link href="/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendor/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/vendor/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/vendor/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Faktury</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>User</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Główna <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Moje firmy</a></li>
                                    <li><a href="#">Typy faktur</a></li>
                                    <li><a href="#">Płatności</a></li>
                                    <li><a href="#">Klienci</a></li>
                                </ul>
                            </li>
                                    <li><a><i class="fa fa-edit"></i> Faktury <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">Nowa faktura</a></li>
                                            <li><a href="form_advanced.html">Moje faktury</a></li>
                                            <!-- <li><a href="form_validation.html">Form Validation</a></li>
                                             <li><a href="form_wizards.html">Form Wizard</a></li>
                                             <li><a href="form_upload.html">Form Upload</a></li>
                                             <li><a href="form_buttons.html">Form Buttons</a></li> -->
                                        </ul>
                                    </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
    <!-- page content -->


        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>
    </div>

</div>
<!-- jQuery -->
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/vendor/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/vendor/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/vendor/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/vendor/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/vendor/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/vendor/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/vendor/Flot/jquery.flot.js"></script>
<script src="/vendor/Flot/jquery.flot.pie.js"></script>
<script src="/vendor/Flot/jquery.flot.time.js"></script>
<script src="/vendor/Flot/jquery.flot.stack.js"></script>
<script src="/vendor/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/vendor/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/vendor/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/vendor/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="/vendor/jqvmap/dist/jquery.vmap.js"></script>
<script src="/vendor/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/vendor/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/vendor/moment/min/moment.min.js"></script>
<script src="/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/vendor/jquery/dist/jquery.mask.js"></script>

<!-- Custom Theme Scripts -->
<script src="/build/js/custom.min.js"></script>


</body>
</html>
