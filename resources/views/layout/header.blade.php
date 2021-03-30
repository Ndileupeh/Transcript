<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="TechyDevs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <title>Aduca -  Education HTML Template</title>
    
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    
        <!-- Favicon -->
        <link rel="icon" sizes="16x16" href="images/favicon.png">
    
        <!-- inject:css -->
        <link rel="stylesheet" href="addasset/css/bootstrap.min.css">
        <link rel="stylesheet" href="addasset/css/font-awesome.min.css">
        <link rel="stylesheet" href="addasset/css/line-awesome.css">
        <link rel="stylesheet" href="addasset/css/animate.min.css">
        <link rel="stylesheet" href="addasset/css/owl.carousel.min.css">
        <link rel="stylesheet" href="addasset/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="addasset/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="addasset/css/magnific-popup.css">
        <link rel="stylesheet" href="addasset/css/fancybox.css">
        <link rel="stylesheet" href="addasset/css/jquery.filer.css">
        <link rel="stylesheet" href="addasset/css/tooltipster.bundle.css">
        <link rel="stylesheet" href="addasset/css/jqvmap.css">
        <link rel="stylesheet" href="addasset/css/style.css">
        <!-- end inject -->
    </head>
<body>
    <header class="header-menu-area dashboard-header">
        <div class="header-menu-content dashboard-menu-content">
            <div class="container-fluid">
                <div class="main-menu-content py-2">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-box">
                                <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="logo"></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                            </div>
                        </div><!-- end col-lg-2 -->
                        <div class="col-lg-10">
                            <div class="menu-wrapper">
                                
                                <nav class="main-menu">
                                    <ul>
                                        {{-- <li>
                                            <a href="#">Home</a>
                                           
                                        </li>
                                        <li>
                                            <a href="#">courses</a>
                                            
                                        </li>
                                        <li>
                                            <a href="#">Student</a>
                                            
                                        </li>
                                        <li>
                                            <a href="#">pages</a>
                                            
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('home') }}">Home</a>
                                            
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul><!-- end ul -->
                                </nav><!-- end main-menu -->
                                <div class="logo-right-button d-flex align-items-center">
                                    <div class="header-action-button d-flex align-items-center">
                                        <div class="notification-wrap d-flex align-items-center">
                                            <div class="notification-item mr-3">
                                                <div class="dropdown">
                                                    <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="la la-bell"></i>
                                                        <span class="quantity">5</span>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                                        <div class="mess-dropdown">
                                                            <div class="mess__title">
                                                                <h4 class="widget-title">Notifications</h4>
                                                            </div><!-- end mess__title -->
                                                            
                                                            <div class="btn-box p-2 text-center">
                                                                <a href="dashboard.html">Show All Notifications</a>
                                                            </div><!-- end btn-box -->
                                                        </div><!-- end mess-dropdown -->
                                                    </div><!-- end dropdown-menu -->
                                                </div><!-- end dropdown -->
                                            </div>
                                            <div class="notification-item mr-3">
                                                <div class="dropdown">
                                                    <button class="notification-btn dropdown-toggle" type="button" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="la la-envelope"></i>
                                                        <span class="quantity">5</span>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="messageDropdownMenu">
                                                        <div class="mess-dropdown">
                                                            <div class="mess__title">
                                                                <h4 class="widget-title">Messages</h4>
                                                            </div><!-- end mess__title -->
                                                           
                                                            <div class="btn-box p-2 text-center">
                                                                <a href="dashboard-message.html">Show All Message</a>
                                                            </div><!-- end btn-box -->
                                                        </div><!-- end mess-dropdown -->
                                                    </div><!-- end dropdown-menu -->
                                                </div><!-- end dropdown -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- end logo-right-button -->
                                
                            </div><!-- end menu-wrapper -->
                        </div><!-- end col-lg-10 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
    </header>
    
    <section class="dashboard-area">
        <div class="dashboard-sidebar">
            <div class="dashboard-nav-trigger">
                <div class="dashboard-nav-trigger-btn">
                    <i class="la la-bars"></i> Dashboard Nav
                </div>
            </div>
            <div class="dashboard-nav-container card">
                
                <div class="side-menu-wrap">
                    <ul class="side-menu-ul">
                        <li class="sidenav__item"><br><br>
                            <a href="{{ route('transcriptdetail') }}"><i class="la la-dashboard"></i> Dashboard menu</a>
                           
                            
                        </li>
                        <li class="sidenav__item"><a href="{{ route('transcriptdetail') }}"><i class="la la-user"></i>Tarnscript</a>
                            <ul>
                                
                                {{-- <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Pending</a></li>
                                <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Complete</a></li>
                                <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Collected</a></li>
                                 --}}
                            
                            </ul>
                        </li>
                        <li class="sidenav__item"><a href="{{ route('pay') }}"><i class="la la-file-video-o"></i>Mods</a>
                            {{-- <ul>
                                <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Normal</a></li>
                                <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Fast</a></li>
                                <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Super Fast</a></li>
                            </ul> --}}
                        </li>
                        <li class="sidenav__item"><a href="{{ route('dashboard') }}"><i class="la la-bolt"></i>Payment Method</a></li>
                        <li class="sidenav__item"><a href="{{ route('home') }}"><i class="la la-bookmark"></i>Subscription</a></li>
                        <li class="sidenav__item"><a href="{{ route('home') }}"><i class="la la-graduation-cap"></i>Logout</a></li>
                        <li class="sidenav__item"><a href="{{ route('home') }}"><i class="la la-bell"></i>Message <span class="badge badge-info radius-rounded p-1 ml-1">2</span></a></li>
                        
                        
                    </ul>
                   
                    
                </div><!-- end side-menu-wrap -->
            </div>
        </div><!-- end dashboard-sidebar -->
        @yield('body')
    </section>
    

    <div  class="main">
       
       
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="copy__desc">&copy; 2020 All Rights Reserved. by <a
                                            href="https://www.ubuea.cm/facilities"> Unversity of Buea.</a></p>
                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                        </div><!-- end copyright-content -->
                    </div><!-- end col-lg-12 -->
                </div>
           </footer>
    </div>
   
       <!-- template js files -->
<script src="addasset/js/jquery-3.4.1.min.js"></script>
<script src="addasset/js/popper.min.js"></script>
<script src="addasset/js/bootstrap.min.js"></script>
<script src="addasset/js/bootstrap-select.min.js"></script>
<script src="addasset/js/owl.carousel.min.js"></script>
<script src="addasset/js/magnific-popup.min.js"></script>
<script src="addasset/js/isotope.js"></script>
<script src="addasset/js/jquery.counterup.min.js"></script>
<script src="addasset/js/fancybox.js"></script>
<script src="addasset/js/chart.js"></script>
<script src="addasset/js/bar-chart.js"></script>
<script src="addasset/js/line-chart-2.js"></script>
<script src="addasset/js/smooth-scrolling.js"></script>
<script src="addasset/js/tooltipster.bundle.min.js"></script>
<script src="addasset/js/jquery.filer.min.js"></script>
<script src="addasset/js/jquery.vmap.js"></script>
<script src="addasset/js/jquery.vmap.world.js"></script>
<script src="addasset/js/jquery.vmap.sampledata.js"></script>
<script src="addasset/js/jquery.vmap-script.js"></script>
<script src="addasset/js/progress-bar.js"></script>
<script src="addasset/js/date-time-picker.js"></script>
<script src="addasset/js/emojionearea.min.js"></script>
<script src="addasset/js/animated-skills.js"></script>
<script src="addasset/js/main.js"></script>
</body>
</html>