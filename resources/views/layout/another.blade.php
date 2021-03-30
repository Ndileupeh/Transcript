<head>

    <meta charset="utf-8">
    <title>Transcript Application</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/jquery-ui.css">

    <link rel="stylesheet" href="assets/css/sm-core-css.css" />
    <link rel="stylesheet" href="assets/css/sm-simple.css" />

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/flaticon/flaticon.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/slick/slick.css">

    <link href="assets/YoutubeVideoModalPlugin/jquery.yu2fvl.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
</head>

<body class="d-flex flex-column">
    <div id="preloader"></div>

    <header class="header-area dfoody-header shadow">
        <div class="dfoody-top-header">
            <div class="container">

            </div>
        </div>
        </div>
        </div>
        <div class="dfoody-header-box ">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-3">
                        <div class="logo-wrapper">
                            <a href="{{ route('apply') }}">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-9 col-md-9">
                        <div class="gm-box">
                            <div class="dfoody-menu-wrapper">

                                <input id="dfoodyMenu-state" type="checkbox" />
                                <label class="dfoodyMenu-btn" for="dfoodyMenu-state">
                                    <span class="dfoodyMenu-btn-icon"></span>
                                </label>
                                <ul id="dfoodyMenu" class="sm sm-simple dfoody-menu">
                                    <li><a href="{{ route('home') }}">Home</a>

                                    </li>

                                    <li>
                                        <a href="{{ route('apply') }}">Transcript Application</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('payment') }}">payment</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('search') }}">Check</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('apply') }}">Delivery Mode</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-icons">
                                <ul class="mti-list">

                                    <li>
                                        <span id="cart"><i class="flaticon-shopping-cart"></i><span
                                                class="badge">02</span></span>
                                        <div class="shopping-cart">
                                            <div class="shopping-cart-header">
                                                <div class="shopping-cart-total">

                                                </div>
                                            </div>


                                            <a href="{{ route('home') }}" class="button">Checkout</a>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>