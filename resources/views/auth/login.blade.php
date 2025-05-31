@extends('layouts.main')
@section('body')
    <main>
{{--        <div class="breadcrumb-bg pt-150 pb-150" data-background="img/all-bg/papyrus.png">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title text-center">--}}
{{--                            <h2 class="breadcrumb-title">Login</h2>--}}
{{--                            <div class="breadcrumb-menu mt-20">--}}
{{--                                <ul class="trail-items">--}}
{{--                                    <li class="trail-item trail-begin"><a href="#">Home</a></li>--}}
{{--                                    <li class="trail-item trail-end"><span>Login</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- auth Area Strat-->
        <section class="login-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="basic-login">
                            <h3 class="text-center mb-60">Login From Here</h3>
                            <form action="{{route('login.authenticate')}}" method="POST">
                                @csrf
                                <label for="name">Email Address <span>**</span></label>
                                <input name="email" id="name" type="text" placeholder="Enter Email address..." />
                                <label for="password">Password <span>**</span></label>
                                <input name="password" id="password" type="password" placeholder="Enter password..." />
                                <div class="login-action mb-20 fix">
                                    <span class="log-rem f-left">
                                        <input id="remember" type="checkbox" />
                                        <label for="remember">Remember me!</label>
                                    </span>
                                    <span class="forgot-login f-right">
                                        <a href="#">Lost your password?</a>
                                    </span>
                                </div>
                                <button type="submit" class="bt-btn theme-btn-2 w-100">Login Now</button>
                                <div class="or-divide"><span>or</span></div>
                                <a href="{{route('register')}}" class="bt-btn bt-btn-black w-100"><center>Register Now</center></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- auth Area End-->
    </main>
@endsection
