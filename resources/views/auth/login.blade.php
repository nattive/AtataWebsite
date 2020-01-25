@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row section">
        <div class="col-md-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('img/banner13.jpg') }}" alt="" class="w-100">

                    </div>
                    <div class="item">
                        <img src="{{ asset('img/banner13.jpg') }}" alt="" class="w-100">

                    </div>
                    ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Modal content-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In </h3>
                        <p>
                            Sign In now, Let's start your Grocery Shopping. Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Sign Up Now</a>
                        </p>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                               
                                <input type="email" placeholder="User Email" name="email" required class=" 
                                    @error('email') is-invalid 
                                    @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                    autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="styled-input">
                                <input id="password" type="password" placeholder="Input Password"
                                    class=" @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <input type="submit" value="Sign In">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
            <!-- //Modal content-->
        </div>
    </div>
</div>
@endsection