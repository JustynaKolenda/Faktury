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

        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Nowa faktura</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Dane Adresata<small></small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Faktura nr</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Nr faktury">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Odbiorca <span class="required"></span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="2" placeholder='Nazwa odbiorcy'></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NR Ddomu/Lokalu'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Miejscowość</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Miejscowość'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kod pocztowy</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Kod-pocztowy'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NIP'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesel</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Pesel'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Email'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Telefon'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Numer konta</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Dane Odbiorcy<small></small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Faktura nr</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Nr faktury">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Odbiorca <span class="required"></span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="form-control" rows="2" placeholder='Nazwa odbiorcy'></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="adres" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NR Ddomu/Lokalu'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Miejscowość</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Miejscowość'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kod pocztowy</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="postal code" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Kod-pocztowy'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="nip" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NIP'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesel</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="pesel" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Pesel'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="email" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Email'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="phone" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Telefon'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Numer konta</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input type="text" name="account" id="autocomplete-custom-append" class="form-control col-md-10" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <label class="x_content">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Lp</th>
                                        <th>Nazwa towaru/usługi</th>
                                        <th>PKWiU</th>
                                        <th>Jm</th>
                                        <th>Ilość</th>
                                        <th>Cena netto</th>
                                        <th>Rabat</th>
                                        <th>Stawka VAT</th>
                                        <th>Wartość netto</th>
                                        <th>Wartość VAT</th>
                                        <th>Wartość brutto</th>
                                    </tr>
                                    </thead>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <td> <input type="text" name="lp" class="col-sm-1"/> </td>
                                        <td> <input type="text" name="name"/> </td>
                                        <td> <input type="text" name="pkwiu"/> </td>
                                        <td> <select type="text" name="jm" class="col-sm-1"/> </td>
                                        <td> <input type="text" name="ilosc"/> </td>
                                        <td> <input type="text" name="cenanetto"/> </td>
                                        <td> <input type="text" name="rabat"/> </td>
                                        <td> <input type="text" name="stawkavat"/> </td>
                                        <td> <input type="text" name="wartoscnetto"/> </td>
                                        <td> <input type="text" name="wartoscvat"/> </td>
                                        <td> <input type="text" name="wartoscbrutto"/> </td>
                                    </div>

                                </tbody>

                                </table>

                            </label>
                        </div>
                    </div>
                </div>

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
