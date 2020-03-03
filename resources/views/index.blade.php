@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <!-- NAVIGATION -->
   <!-- /NAVIGATION -->
   <div class="container">
       <div class="section">
                <div id="navigation">
                    <!-- container -->
                    <!-- <li class="nav-toggle">
                            <button class="d-md-none av-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                        </li> -->
                    <div class="container">
                        <div id="responsive-nav">
                            <!-- menu nav -->
                            <div class="menu-nav">
                                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                                <ul class="menu-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="mobileView.html">Mobile</a></li>
                                    <li><a href="#">Our News</a></li>
                                    <li><a href="#">Request Quotation</a></li>
                                </ul>
                            </div>
                            <!-- menu nav -->
                        </div>
                    </div>
                    <!-- /container -->
                </div>
                <div class="nav-toggle">
                    <button class="d-md-none av-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </div>
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item banner active">
                <div class="container">
                    <div class="carousel-caption">
    
                    </div>
                </div>
            </div>
            <div class="item banner2">
                <div class="container">
                    <div class="carousel-caption">
    
                    </div>
                </div>
            </div>
            <div class="item banner3">
                <div class="container">
                    <div class="carousel-caption">
    
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        </div>
    </div>
    <!-- //banner -->
    
    
    <!-- /section -->
    <!-- category/collection section -->
    <div class="container">
        <div class="section">
            <div class="section-title">
                <h4 class="title">Categories</h4>
                <div class="pull-right">
                    <div class="product-slick-dots-1 custom-dots"></div>
                </div>
            </div>
            <div class="row">
              <div style="margin-top: 10px;" class="scrolling-wrapper">
                <div class="card">
                    <div>
                        <img src="img/all category.jpg" alt="" class="img-responsive  m-4 m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/food items.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div> <div class="card">
                    <div>
                        <img src="img/food items.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div> <div class="card">
                    <div>
                        <img src="img/food items.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/local groceries.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/drug.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/footwear.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/farm produce.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/phone assories.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/farm produce.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
                <div class="card">
                    <div>
                        <img src="img/grocery.jpg" alt="" class="img-responsive  m-4">
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <div>
        <!-- /category/collection section -->
        <!-- section -->
        <div class="container">
            <div class="section">
                <!-- container -->
                <!-- row -->
                <div class="row">
                    <!-- section-title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h4 class="title">Get Quotes from verified Suppliers</h4>
                            <div class="pull-right">
                                <div class="product-slick-dots-1 custom-dots"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img style="width: 100%;" src="img\banner12.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="width: 100%">
                                <h1 class="display-3 m-1 text-dark">
                                    Make quotation request to suppliers
                                </h1>
                                <form action="" class="card-body ">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Whar are you looking for?"
                                                    class="input form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="product-btns">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div style="display: flex; " class="qty-input">
                                                        <span style="padding: 5px;" class="text-uppercase">QTY: </span>
                                                        <input class="input" type="number">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <button class="primary-btn add-to-cart"><i
                                                            class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    
                                <div class="m-1">
                                    <button class="primary-btn">Request Quotation</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
        </div>
    </div>
    
    <!-- container -->
    <div class="">
        <div class="container">
            <div class="row d-sm-none  d-md-block">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="section p-4">
                        <!-- row -->
                        <div class="row">
                            <!-- section title -->
                            <div class="col-xs-12">
                                <div class="section-title d-flex justify-content-between">
                                    <h4 class="title">Category</h4>
                                    <h6 style="float:right" class="text-uppercase"><a href="#" class="title"> view
                                            all</a></h6>
                                </div>
                            </div>
                            <!-- section title -->
    
                            <!-- Product Single -->
                            <div class="col-xs-12">
                                <div class="row">
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-sa"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-gn"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-li"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin: 0" class="col-xs-4">
                                        <div class=" product product-single">
                                            <div class="thumbnail product-thumb">
                                                <div class="product-label">
                                                    <!-- <span>New</span> -->
                                                    <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                                </div>
                                                <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h4 class="product-price">$3200 <del class="product-old-price">$45.00</del>
                                                </h4>
    
                                                <p class="product-name"><a href="#">2007 Royce James Luxury watch</a>
                                                </p>
                                                <div class="product-btns">
                                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                    <button class="main-btn icon-btn"><i
                                                            class="fa fa-exchange"></i></button>
                                                    <button class="primary-btn icon-btn"><i
                                                            class="fa fa-shopping-cart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                </div>
                            </div>
                            <!-- /Product Single -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="section p-4">
                        <div class="section-title">
                            <h4 class="title">Comodity Market Prices</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Comodity</th>
                                    <th>Price</th>
                                    <th>Source</th>
                                    <th style="width: 10px">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #20,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-up text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
    
                            </tbody>
                        </table>
                    </div>
                    <div class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h4 class="title">Advertisement</h4>
                                </div>
                            </div>
                            <a href="#">
                                <img src="img/banner15.jpg" alt="" class="img-responsive w-100 col-xs-12">
                            </a>
                        </div>
                    </div>
                </div>
    
                <!-- /row -->
            </div>
            <div class="row d-md-none  d-sm-block">
                <div class="col-xs-12">
                    <div class="section p-4">
                        <div class="section-title">
                            <h4 class="title">Comodity Market Prices</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Comodity</th>
                                    <th>Price</th>
                                    <th>Source</th>
                                    <th style="width: 10px">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #20,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-up text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
                                <tr>
                                    <td> Product </td>
                                    <td>
                                        #40,000
                                    </td>
                                    <td><span class="btn-link">Agro inc</span></td>
                                    <td><i class="fa fa-arrow-down text-success"></i></td>
                                </tr>
    
                            </tbody>
                        </table>
                    </div>
                    <div class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h4 class="title">Advertisement</h4>
                                </div>
                            </div>
                            <a href="#">
                                <img src="img/banner15.jpg" alt="" class="img-responsive w-100 col-xs-12">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /section -->
    
    <div class="container">
        <div class="section">
            <!-- special offers -->
            <div class="featured-section" id="projects">
                <div class="container">
                    <!-- tittle heading -->
                    <div class="section-title">
                        <h5 class="title">Currency Calculator</h5>
                    </div>
                    <!-- //tittle heading -->
                    <div class="content-bottom-in">
                        <ul id="flexiselDemo1">
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single.html">
                                            <img src="images/s1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single.html">Aashirvaad, 5g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$220.00</h6>
                                            <p>Save $40.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                                    <input type="hidden" name="amount" value="220.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single.html">
                                            <img src="images/s4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single.html">Kissan Tomato Ketchup, 950g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$99.00</h6>
                                            <p>Save $20.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Kissan Tomato Ketchup, 950g" />
                                                    <input type="hidden" name="amount" value="99.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single.html">
                                            <img src="images/s2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single.html">Madhur Pure Sugar, 1g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$69.00</h6>
                                            <p>Save $20.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
                                                    <input type="hidden" name="amount" value="69.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single2.html">
                                            <img src="images/s3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single2.html">Surf Excel Liquid, 1.02L</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$187.00</h6>
                                            <p>Save $30.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Surf Excel Liquid, 1.02L" />
                                                    <input type="hidden" name="amount" value="187.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single.html">
                                            <img src="images/s8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single.html">Cadbury Choclairs, 655.5g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$160.00</h6>
                                            <p>Save $60.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Cadbury Choclairs, 655.5g" />
                                                    <input type="hidden" name="amount" value="160.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single2.html">
                                            <img src="images/s6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single2.html">Fair & Lovely, 80 g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$121.60</h6>
                                            <p>Save $30.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
                                                    <input type="hidden" name="amount" value="121.60" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single.html">
                                            <img src="images/s5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single.html">Sprite, 2.25L (Pack of 2)</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$180.00</h6>
                                            <p>Save $30.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Sprite, 2.25L (Pack of 2)" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="w3l-specilamk">
                                    <div class="speioffer-agile">
                                        <a href="single2.html">
                                            <img src="images/s9.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-name-w3l">
                                        <h4>
                                            <a href="single2.html">Lakme Eyeconic Kajal, 0.35 g</a>
                                        </h4>
                                        <div class="w3l-pricehkj">
                                            <h6>$153.00</h6>
                                            <p>Save $40.00</p>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <fieldset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name"
                                                        value="Lakme Eyeconic Kajal, 0.35 g" />
                                                    <input type="hidden" name="amount" value="153.00" />
                                                    <input type="hidden" name="discount_amount" value="1.00" />
                                                    <input type="hidden" name="currency_code" value="USD" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //special offers -->
        </div>
    </div>
    
    <!-- <img src="img/banner200.jpg" alt="" class="img-responsive"> -->
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div style="margin-top: 1em;" class="section ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h5 class="title">Currency Calculator</h5>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="input-group-append">
                                <select class="form-control">
                                    <option>NGN</option>
                                    <option>USD</option>
                                    <option>UAE</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Exchange From">
                            </div>
                            <hr class="my-4">
                            <div class="input-group-append">
                                <select class="form-control">
                                    <option>NGN</option>
                                    <option>USD</option>
                                    <option>UAE</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Exchange to">
                            </div>
                            <hr>
                            <input type="button" value="Convert" class="btn primary-btn p-1">
                        </div>
                    </div>
                </div>
                <div style="margin-top: 2em;" class="section">
                    <div class="section-title">
                        <h4 class="title">Top 5 Suppliers</h4>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td> Godson and Co </td>
                                <td>
                                    1,202 Items Suplied
                                </td>
                                <td>
                                    <div style="width: 100%;" class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Godson and Co </td>
                                <td>
                                    1,202 Items Suplied
                                </td>
                                <td>
                                    <div style="width: 100%;" class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Godson and Co </td>
                                <td>
                                    1,202 Items Suplied
                                </td>
                                <td>
                                    <div style="width: 100%;" class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Godson and Co </td>
                                <td>
                                    1,202 Items Suplied
                                </td>
                                <td>
                                    <div style="width: 100%;" class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Godson and Co </td>
                                <td>
                                    1,202 Items Suplied
                                </td>
                                <td>
                                    <div style="width: 100%;" class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o empty"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="section">
                    <!-- row -->
                    <div class="row">
                        <!-- section title -->
                        <div class="col-md-12">
                            <div class="section-title">
                                <h4 class="title">Latest Products</h4>
                            </div>
                        </div>
                        <!-- section title -->
    
                        <!-- Product Single -->
                        <div class="col-md-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <div class=" product product-single">
                                        <div class="thumbnail product-thumb">
                                            <div class="product-label">
                                                <!-- <span>New</span> -->
                                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                                            </div>
                                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                                            <img src="./img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h4 class="product-price">$3200 <del class="product-old-price">$45.00</del>
                                            </h4>
    
                                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                                            <div class="product-btns">
                                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                                <button class="primary-btn icon-btn"><i
                                                        class="fa fa-shopping-cart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>
                        <!-- /Product Single -->
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /section -->
    <!-- /row -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h4 class="title">Advertisement</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h4 class="title">our other services</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="#">
                                <img src="img/services-banner.jpg" alt="" class="img-responsive w-100">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <img src="img/services-banner.jpg" alt="" class="img-responsive w-100">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <img src="img/services-banner.jpg" alt="" class="img-responsive w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="container">
        <div class="section">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="title">Picked For You</h4>
                    </div>
                </div>
                <!-- section title -->
    
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
    
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
    
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <div class=" product product-single">
                        <div class="thumbnail product-thumb">
                            <div class="product-label">
                                <!-- <span>New</span> -->
                                <span class="sale"><span class="flag-icon flag-icon-ng"></span></span>
                            </div>
                            <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                            <img src="./img/thumb-product01.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h4 class="product-price">$320 <del class="product-old-price">$45.00</del></h4>
    
                            <p class="product-name"><a href="#">2007 Royce James Luxury watch</a></p>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn icon-btn"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
</div>
@endsection
