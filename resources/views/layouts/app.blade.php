<title>Atata57</title>

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<!-- <link type="text/css" rel="stylesheet" href="css/bootstrap-4.1/bootstrap.min.css" /> -->

<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/flag-icon-css-master/css/flag-icon.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" />

<script>
    addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
</script>
<!--//tags -->
<link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--pop-up-box-->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!--//pop-up-box-->
<!-- price range -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<style>
    body {
        color: black;
    }
</style>

</head>

<body>
    <!-- top-header -->
    <div class="header-most-top">
        <p>Revivng Africa's Pride</p>
    </div>
    <!-- //top-header -->
    <!-- header-bot-->
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <!-- header-bot-->
            <div class="col-md-4 logo_agile">
                <h1>
                    <a href="index.html">
                        <img src="img\logo.png" alt=" ">
                    </a>
                </h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-8 header">
                <!-- header lists -->
                <ul>
                    <li>
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
                            <span class="fa fa-map-marker" aria-hidden="true"></span> Shop Locator</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
                    </li>
                    <li>
                        <span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
                    </li>
                    <li>
                       <a href="{{url('login')}}">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    </li>
                </ul>
                <!-- //header lists -->
                <!-- search -->
                <div class="agileits_search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="How can we help you today?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>
                <!-- //search -->
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="w3view-cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- //cart details -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>

    <div id="small-dialog1" class="mfp-hide">
        <div class="select-city">
            <h3>Please Select Your Location</h3>
            <select class="list_of_cities">
                <optgroup label="Popular Cities">
                    <option selected style="display:none;color:#eee;">Select City</option>
                    <option>Birmingham</option>
                    <option>Anchorage</option>
                    <option>Phoenix</option>
                    <option>Little Rock</option>
                    <option>Los Angeles</option>
                    <option>Denver</option>
                    <option>Bridgeport</option>
                    <option>Wilmington</option>
                    <option>Jacksonville</option>
                    <option>Atlanta</option>
                    <option>Honolulu</option>
                    <option>Boise</option>
                    <option>Chicago</option>
                    <option>Indianapolis</option>
                </optgroup>
                <optgroup label="Alabama">
                    <option>Birmingham</option>
                    <option>Montgomery</option>
                    <option>Mobile</option>
                    <option>Huntsville</option>
                    <option>Tuscaloosa</option>
                </optgroup>
                <optgroup label="Alaska">
                    <option>Anchorage</option>
                    <option>Fairbanks</option>
                    <option>Juneau</option>
                    <option>Sitka</option>
                    <option>Ketchikan</option>
                </optgroup>
                <optgroup label="Arizona">
                    <option>Phoenix</option>
                    <option>Tucson</option>
                    <option>Mesa</option>
                    <option>Chandler</option>
                    <option>Glendale</option>
                </optgroup>
                <optgroup label="Arkansas">
                    <option>Little Rock</option>
                    <option>Fort Smith</option>
                    <option>Fayetteville</option>
                    <option>Springdale</option>
                    <option>Jonesboro</option>
                </optgroup>
                <optgroup label="California">
                    <option>Los Angeles</option>
                    <option>San Diego</option>
                    <option>San Jose</option>
                    <option>San Francisco</option>
                    <option>Fresno</option>
                </optgroup>
                <optgroup label="Colorado">
                    <option>Denver</option>
                    <option>Colorado</option>
                    <option>Aurora</option>
                    <option>Fort Collins</option>
                    <option>Lakewood</option>
                </optgroup>
                <optgroup label="Connecticut">
                    <option>Bridgeport</option>
                    <option>New Haven</option>
                    <option>Hartford</option>
                    <option>Stamford</option>
                    <option>Waterbury</option>
                </optgroup>
                <optgroup label="Delaware">
                    <option>Wilmington</option>
                    <option>Dover</option>
                    <option>Newark</option>
                    <option>Bear</option>
                    <option>Middletown</option>
                </optgroup>
                <optgroup label="Florida">
                    <option>Jacksonville</option>
                    <option>Miami</option>
                    <option>Tampa</option>
                    <option>St. Petersburg</option>
                    <option>Orlando</option>
                </optgroup>
                <optgroup label="Georgia">
                    <option>Atlanta</option>
                    <option>Augusta</option>
                    <option>Columbus</option>
                    <option>Savannah</option>
                    <option>Athens</option>
                </optgroup>
                <optgroup label="Hawaii">
                    <option>Honolulu</option>
                    <option>Pearl City</option>
                    <option>Hilo</option>
                    <option>Kailua</option>
                    <option>Waipahu</option>
                </optgroup>
                <optgroup label="Idaho">
                    <option>Boise</option>
                    <option>Nampa</option>
                    <option>Meridian</option>
                    <option>Idaho Falls</option>
                    <option>Pocatello</option>
                </optgroup>
                <optgroup label="Illinois">
                    <option>Chicago</option>
                    <option>Aurora</option>
                    <option>Rockford</option>
                    <option>Joliet</option>
                    <option>Naperville</option>
                </optgroup>
                <optgroup label="Indiana">
                    <option>Indianapolis</option>
                    <option>Fort Wayne</option>
                    <option>Evansville</option>
                    <option>South Bend</option>
                    <option>Hammond</option>
                </optgroup>
                <optgroup label="Iowa">
                    <option>Des Moines</option>
                    <option>Cedar Rapids</option>
                    <option>Davenport</option>
                    <option>Sioux City</option>
                    <option>Waterloo</option>
                </optgroup>
                <optgroup label="Kansas">
                    <option>Wichita</option>
                    <option>Overland Park</option>
                    <option>Kansas City</option>
                    <option>Topeka</option>
                    <option>Olathe </option>
                </optgroup>
                <optgroup label="Kentucky">
                    <option>Louisville</option>
                    <option>Lexington</option>
                    <option>Bowling Green</option>
                    <option>Owensboro</option>
                    <option>Covington</option>
                </optgroup>
                <optgroup label="Louisiana">
                    <option>New Orleans</option>
                    <option>Baton Rouge</option>
                    <option>Shreveport</option>
                    <option>Metairie</option>
                    <option>Lafayette</option>
                </optgroup>
                <optgroup label="Maine">
                    <option>Portland</option>
                    <option>Lewiston</option>
                    <option>Bangor</option>
                    <option>South Portland</option>
                    <option>Auburn</option>
                </optgroup>
                <optgroup label="Maryland">
                    <option>Baltimore</option>
                    <option>Frederick</option>
                    <option>Rockville</option>
                    <option>Gaithersburg</option>
                    <option>Bowie</option>
                </optgroup>
                <optgroup label="Massachusetts">
                    <option>Boston</option>
                    <option>Worcester</option>
                    <option>Springfield</option>
                    <option>Lowell</option>
                    <option>Cambridge</option>
                </optgroup>
                <optgroup label="Michigan">
                    <option>Detroit</option>
                    <option>Grand Rapids</option>
                    <option>Warren</option>
                    <option>Sterling Heights</option>
                    <option>Lansing</option>
                </optgroup>
                <optgroup label="Minnesota">
                    <option>Minneapolis</option>
                    <option>St. Paul</option>
                    <option>Rochester</option>
                    <option>Duluth</option>
                    <option>Bloomington</option>
                </optgroup>
                <optgroup label="Mississippi">
                    <option>Jackson</option>
                    <option>Gulfport</option>
                    <option>Southaven</option>
                    <option>Hattiesburg</option>
                    <option>Biloxi</option>
                </optgroup>
                <optgroup label="Missouri">
                    <option>Kansas City</option>
                    <option>St. Louis</option>
                    <option>Springfield</option>
                    <option>Independence</option>
                    <option>Columbia</option>
                </optgroup>
                <optgroup label="Montana">
                    <option>Billings</option>
                    <option>Missoula</option>
                    <option>Great Falls</option>
                    <option>Bozeman</option>
                    <option>Butte-Silver Bow</option>
                </optgroup>
                <optgroup label="Nebraska">
                    <option>Omaha</option>
                    <option>Lincoln</option>
                    <option>Bellevue</option>
                    <option>Grand Island</option>
                    <option>Kearney</option>
                </optgroup>
                <optgroup label="Nevada">
                    <option>Las Vegas</option>
                    <option>Henderson</option>
                    <option>North Las Vegas</option>
                    <option>Reno</option>
                    <option>Sunrise Manor</option>
                </optgroup>
                <optgroup label="New Hampshire">
                    <option>Manchesters</option>
                    <option>Nashua</option>
                    <option>Concord</option>
                    <option>Dover</option>
                    <option>Rochester</option>
                </optgroup>
                <optgroup label="New Jersey">
                    <option>Newark</option>
                    <option>Jersey City</option>
                    <option>Paterson</option>
                    <option>Elizabeth</option>
                    <option>Edison</option>
                </optgroup>
                <optgroup label="New Mexico">
                    <option>Albuquerque</option>
                    <option>Las Cruces</option>
                    <option>Rio Rancho</option>
                    <option>Santa Fe</option>
                    <option>Roswell</option>
                </optgroup>
                <optgroup label="New York">
                    <option>New York</option>
                    <option>Buffalo</option>
                    <option>Rochester</option>
                    <option>Yonkers</option>
                    <option>Syracuse</option>
                </optgroup>
                <optgroup label="North Carolina">
                    <option>Charlotte</option>
                    <option>Raleigh</option>
                    <option>Greensboro</option>
                    <option>Winston-Salem</option>
                    <option>Durham</option>
                </optgroup>
                <optgroup label="North Dakota">
                    <option>Fargo</option>
                    <option>Bismarck</option>
                    <option>Grand Forks</option>
                    <option>Minot</option>
                    <option>West Fargo</option>
                </optgroup>
                <optgroup label="Ohio">
                    <option>Columbus</option>
                    <option>Cleveland</option>
                    <option>Cincinnati</option>
                    <option>Toledo</option>
                    <option>Akron</option>
                </optgroup>
                <optgroup label="Oklahoma">
                    <option>Oklahoma City</option>
                    <option>Tulsa</option>
                    <option>Norman</option>
                    <option>Broken Arrow</option>
                    <option>Lawton</option>
                </optgroup>
                <optgroup label="Oregon">
                    <option>Portland</option>
                    <option>Eugene</option>
                    <option>Salem</option>
                    <option>Gresham</option>
                    <option>Hillsboro</option>
                </optgroup>
                <optgroup label="Pennsylvania">
                    <option>Philadelphia</option>
                    <option>Pittsburgh</option>
                    <option>Allentown</option>
                    <option>Erie</option>
                    <option>Reading</option>
                </optgroup>
                <optgroup label="Rhode Island">
                    <option>Providence</option>
                    <option>Warwick</option>
                    <option>Cranston</option>
                    <option>Pawtucket</option>
                    <option>East Providence</option>
                </optgroup>
                <optgroup label="South Carolina">
                    <option>Columbia</option>
                    <option>Charleston</option>
                    <option>North Charleston</option>
                    <option>Mount Pleasant</option>
                    <option>Rock Hill</option>
                </optgroup>
                <optgroup label="South Dakota">
                    <option>Sioux Falls</option>
                    <option>Rapid City</option>
                    <option>Aberdeen</option>
                    <option>Brookings</option>
                    <option>Watertown</option>
                </optgroup>
                <optgroup label="Tennessee">
                    <option>Memphis</option>
                    <option>Nashville</option>
                    <option>Knoxville</option>
                    <option>Chattanooga</option>
                    <option>Clarksville</option>
                </optgroup>
                <optgroup label="Texas">
                    <option>Houston</option>
                    <option>San Antonio</option>
                    <option>Dallas</option>
                    <option>Austin</option>
                    <option>Fort Worth</option>
                </optgroup>
                <optgroup label="Utah">
                    <option>Salt Lake City</option>
                    <option>West Valley City</option>
                    <option>Provo</option>
                    <option>West Jordan</option>
                    <option>Orem</option>
                </optgroup>
                <optgroup label="Vermont">
                    <option>Burlington</option>
                    <option>Essex</option>
                    <option>South Burlington</option>
                    <option>Colchester</option>
                    <option>Rutland</option>
                </optgroup>
                <optgroup label="Virginia">
                    <option>Virginia Beach</option>
                    <option>Norfolk</option>
                    <option>Chesapeake</option>
                    <option>Arlington</option>
                    <option>Richmond</option>
                </optgroup>
                <optgroup label="Washington">
                    <option>Seattle</option>
                    <option>Spokane</option>
                    <option>Tacoma</option>
                    <option>Vancouver</option>
                    <option>Bellevue</option>
                </optgroup>
                <optgroup label="West Virginia">
                    <option>Charleston</option>
                    <option>Huntington</option>
                    <option>Parkersburg</option>
                    <option>Morgantown</option>
                    <option>Wheeling</option>
                </optgroup>
                <optgroup label="Wisconsin">
                    <option>Milwaukee</option>
                    <option>Madison</option>
                    <option>Green Bay</option>
                    <option>Kenosha</option>
                    <option>Racine</option>
                </optgroup>
                <optgroup label="Wyoming">
                    <option>Cheyenne</option>
                    <option>Casper</option>
                    <option>Laramie</option>
                    <option>Gillette</option>
                    <option>Rock Springs</option>
                </optgroup>
            </select>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //shop locator (popup) -->
    <!-- signin Model -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <a href="{{url('login')}}"><h3 class="agileinfo_sign">Sign In </h3> </a>
                        <p>
                            Sign In now, Let's start your Grocery Shopping. Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Sign Up Now</a>
                        </p>
                        {{-- <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="User Name" name="Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" required="">
                            </div>
                            <input type="submit" value="Sign In">
                        </form> --}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- //signin Model -->
    <!-- signup Model -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <p>
                            Come join the Grocery Shoppy! Let's set up your Account.
                        </p>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="Name" name="Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="E-mail" name="Email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" id="password1"
                                    required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Confirm Password" name="Confirm Password"
                                    id="password2" required="">
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <p>
                            <a href="#">By clicking register, I agree to your terms</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->

  @yield('content')
    .
    <!-- FOOTER -->
    <footer id="footer" class="section section-grey">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <!-- footer logo -->
                        <div class="footer-logo">
                            <a class="logo" href="#">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- /footer logo -->

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna</p>

                        <!-- footer social -->
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                        <!-- /footer social -->
                    </div>
                </div>
                <!-- /footer widget -->

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">My Account</h3>
                        <ul class="list-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Compare</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer widget -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- footer widget -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">Customer Service</h3>
                        <ul class="list-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Shiping & Return</a></li>
                            <li><a href="#">Shiping Guide</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /footer widget -->

              
                <!-- footer subscribe -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-header">Stay Connected</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        <form>
                            <div class="form-group">
                                <input class="input" placeholder="Enter Email Address">
                            </div>
                            <button class="primary-btn">Join Newslatter</button>
                        </form>
                    </div>
                </div>
                <!-- /footer subscribe -->
            </div>
            <!-- /row -->
            <hr>
            <!-- row -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved ATATA57 Resources ltd
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <!-- /footer copyright -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>

    <!-- js-files -->
    <!-- jquery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jquery -->

    <!-- popup modal (for signin & signup)-->
    <script src="js/jquery.magnific-popup.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- Large modal -->
    <!-- <script>
		$('#').modal('show');
	</script> -->
    <!-- //popup modal (for signin & signup)-->

    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

        paypalm.minicartk.cart.on('checkout', function(evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- price range (top products) -->
    <script src="js/jquery-ui.js"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>
    </script>
    <!-- //price range (top products) -->

    <!-- flexisel (for special offers) -->
    <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
    </script>
    <!-- //flexisel (for special offers) -->

    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script>
        $(document).ready(function() {
            // $(document).load($(window).bind("resive", checkPosition));
            var url = $(location).attr('href')

            if ($(window).width() < 767) {
                window.location.href = url + "mobileView.html"
            }
        });
    </script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/custom-app.js"></script>

</body>

</html>