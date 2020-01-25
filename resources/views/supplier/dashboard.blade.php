@extends('supplier\layout\app')
@section('content')

<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                        <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text"
                                placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->
    {{-- notification --}}
    <div class="container">
        <div class="alert alert-info">
            <div class="alert-heading">
                <h4 class="title">notifs</h4> 
            </div>
            <div class="alert-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione, iure.</p>
            </div>
        </div>
    </div>
    {{-- notification --}}
    {{-- slider --}}
    <div class="container m-4 p-4">
       <div style="overflow: auto; display: flex">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-dark">

                        <div class="text-center">
                            <h3 class="display-5 m-4 text-light">00 : 00 : 00</h3>
                        </div>
                    </div>
                    <div class="w-100">
                        <img src="{{ asset('img/banner11.jpg') }}" class="w-50 d-block w-100" alt="...">
                    </div>
                    <div class="card-body">
                        {{-- <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus?</p> --}}
                        <button class="au-btn au-btn-icon au-btn--green au-btn--block">Join The Promotion</button>
                    </div>
                </div>
            </div>
            
       </div>
    </div>
    {{-- slider --}}
    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-5">Your Sales Performance
                    </h4>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">10,368</h2>
                        <span class="desc">Ratings</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">388,688</h2>
                        <span class="desc">Total items sold</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">1,086</h2>
                        <span class="desc">Sales this week</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">$1,060,386</h2>
                        <span class="desc">total earnings</span>
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->

    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- CHART-->
                    <div class="statistic-chart-1">
                        <h3 class="title-3 m-b-30">chart</h3>
                        <div class="chart-wrap">
                            <canvas id="widgetChart5"></canvas>
                        </div>
                        <div class="statistic-chart-1-note">
                            <span class="big">10,000</span>
                            <span>/ 16220 items sold</span>
                        </div>
                    </div>
                    <!-- END CHART-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">Present Promotion</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                    <tr>
                                        <td>1. Australia</td>
                                        <td>$70,261.65</td>
                                    </tr>
                                    <tr>
                                        <td>2. United Kingdom</td>
                                        <td>$46,399.22</td>
                                    </tr>
                                    <tr>
                                        <td>3. Turkey</td>
                                        <td>$35,364.90</td>
                                    </tr>
                                    <tr>
                                        <td>4. Germany</td>
                                        <td>$20,366.96</td>
                                    </tr>
                                    <tr>
                                        <td>5. France</td>
                                        <td>$10,366.96</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- CHART PERCENT-->
                    <div class="chart-percent-2">
                        <h3 class="title-3 m-b-30">chart by %</h3>
                        <div class="chart-wrap">
                            <canvas id="percent-chart2"></canvas>
                            <div id="chartjs-tooltip">
                                <table></table>
                            </div>
                        </div>
                        <div class="chart-info">
                            <div class="chart-note">
                                <span class="dot dot--blue"></span>
                                <span>products</span>
                            </div>
                            <div class="chart-note">
                                <span class="dot dot--red"></span>
                                <span>Services</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PERCENT-->
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC CHART-->

    <!-- E-->
    <section class="statistic-chart p-t-20">
        <div class="container">
        
      <div class="row">
          <div class="col-md-6 col-lg-4">
                <!-- TOP CAMPAIGN-->
                <div class="top-campaign">
                    <h3 class="title-3 m-b-30">Recent Trasactions</h3>
                    <div class="table-responsive">
                        <table class="table table-top-campaign">
                            <tbody>
                                <tr>
                                    <td>1. Australia</td>
                                    <td>$70,261.65</td>
                                </tr>
                                <tr>
                                    <td>2. United Kingdom</td>
                                    <td>$46,399.22</td>
                                </tr>
                                <tr>
                                    <td>3. Turkey</td>
                                    <td>$35,364.90</td>
                                </tr>
                                <tr>
                                    <td>4. Germany</td>
                                    <td>$20,366.96</td>
                                </tr>
                                <tr>
                                    <td>5. France</td>
                                    <td>$10,366.96</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TOP CAMPAIGN-->
            </div>
      </div>    
        </div>
    </section>
    <!-- END E-->

</div>
@endsection