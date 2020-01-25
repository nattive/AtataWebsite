<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- css/Vendor CSS-->
    <link href="{{ asset('css/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('css/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/summernote/summernote-bs4.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/vendor/richtext.min.css') }}" rel="stylesheet" media="all">
    <script src="{{ asset('css/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        {{-- <div class="section">
            <div class="row">
                <div class="d-flex">
                    <h6>Seller's Admin</h6>
                </div>
            </div>
        </div> --}}
        <header class="header-desktop3 d-none d-lg-block nav navbar-fixed-top">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{ asset('img/logo.png') }}" alt="Atata57" />
                        </a>
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('supplier.dashboard')}}">
                                    {{-- <<i class="fas fa-tachometer-alt"></i> --}}
                                    <span class="bot-line"></span>Dashboard</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    {{-- <i class="fas fa-shopping-basket"></i>--}}

                                    <span class="bot-line"></span> Manage Product
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="{{route('supplier.addProduct')}}">Upload new Item</a>
                                    </li>
                                    <li>
                                        <a href="{{route('supplier.manageProduct')}}">Manage Items</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Trash</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    {{-- <<i class="fas fa-tachometer-alt"></i> --}}
                                    <span class="bot-line"></span>Quotations
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    {{-- <i class="fas fa-shopping-basket"></i> --}}
                                    <span class="bot-line"></span>Promotions</a>
                            </li>
                            <li>
                                <a href="#">
                                    {{-- <i class="fas fa-shopping-basket"></i> --}}
                                    <span class="bot-line"></span>Transactions</a>
                            </li>
                            <li>
                                <a href="#">
                                    {{-- <i class="fas fa-shopping-basket"></i> --}}
                                    <span class="bot-line"></span>Service Center</a>
                            </li>
                            {{-- <li>
                                <div class="has-noti js-item-menu">
                                    <a href="#">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="bot-line"></span>Message Centre</a>
                                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            {{-- <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Pages</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>UI Elements</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="button.html">Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">Typography</a>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{route('supplier.dashboard')}}">
                            <img src="{{ asset('img/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')

    </div>

    <!-- Jquery JS-->

    <!-- Bootstrap JS-->
    <script src="{{ asset('css/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('css/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('css/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('css/vendor/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('css/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('css/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('css/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('css/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('css/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('css/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('css/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('css/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('css/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('css/vendor/jquery.richtext.js') }}"></script>


    <script src="{{ asset('js/custom-main.js') }}"></script>
    <script>
        $(document).ready(function() {
                $('.content').richText();
            });
    </script>
    <script>
        $(function () {
        // Summernote
        $('.textarea').summernote()
      })
    </script>

</body>

</html>
<!-- end document-->