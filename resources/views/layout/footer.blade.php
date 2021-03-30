<!DOCTYPE html>
<html lang="en">



    <head>
        <meta charset="UTF-8">
        <title>Payments | Fit2Go Admin Template</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- global css -->
        <link type="text/css" href="adminasset/css/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" href="adminasset/css/font-awesome.min.css" rel="stylesheet" />
        <link type="text/css" href="adminasset/css/custom_css/fitness.css" rel="stylesheet" />
        <link type="text/css" href="adminasset/css/custom_css/metisMenu.css" rel="stylesheet" />
    
        <link type="text/css" href="adminasset/css/custom_css/panel.css" rel="stylesheet" />
        <!-- end of global css -->
        <!--page level css -->
        <link type="text/css" href="adminasset/vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" type="adminasset/text/css" href="css/custom_css/payment.css">
        <!--end of page level css-->
    </head>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    


    <body>


        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar-->
                <section class="sidebar">
                    <div id="menu" role="navigation">
                        <div class="nav_profile">
                            <div class="media profile-left">
                                <a class="pull-left profile-thumb" href="#">
                                    <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                </a>
                                <div class="content-profile">
                                    <h4 class="media-heading">Nataliapery</h4>
                                    <span class="text-default">Admin</span>
                                </div>
                            </div>
                        </div>
                        <ul class="navigation">
                            <li>
                                <a href="index.html">
                                    <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                    <span class="mm-text ">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="admin_clubinfo.html">
                                    <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                    <span class="mm-text">Club Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="packages.html">
                                    <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                    <span class="mm-text">Packages</span>
                                </a>
                            </li>
                            <li>
                                <a href="personal_training.html">
                                    <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                    <span class="mm-text">Personal Training</span>
                                </a>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                    <span class="mm-text">News</span>
                                    <span class="fa fa-angle-down pull-right"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="news.html">
                                            <i class="text-primary menu-icon fa fa-inbox"></i> News
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_addnews.html">
                                            <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">
                                <a href="#">
                                    <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                    <span class="mm-text">Events</span>
                                    <span class="fa fa-angle-down pull-right"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="events_list.html">
                                            <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="event_item.html">
                                            <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                        </ul>
                        <!-- / .navigation -->
                    </div>
                    <!-- menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <!-- /.right-side -->
        </div>

        @yield('body')


    <script src="adminasset/js/jquery.min.js" type="text/javascript"></script>
    <script src="adminasset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/app.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="adminasset/vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="adminasset/js/custom_js/news.js" type="text/javascript"></script>


    <!-- global js -->
    <script src="adminasset/js/jquery.min.js" type="text/javascript"></script>
    <script src="adminasset/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="adminasset/vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!--section ends-->
    <!-- /.content -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="adminasset/js/jquery.min.js" type="text/javascript"></script>
    <script src="adminasset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/app.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="adminasset/vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="adminasset/js/custom_js/news.js" type="text/javascript"></script>

   
    <script src="adminasset/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="adminasset/vendors/chartsjs/floatchart/jquery.flot.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/chartsjs/floatchart/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/chartsjs/floatchart/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="adminasset/vendors/chartsjs/floatchart/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="adminasset/vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="adminasset/js/custom_js/payment.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>
</html>