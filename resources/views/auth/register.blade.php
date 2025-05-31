@extends('layouts.main')

@section('body')

    <main>
{{--        <div class="breadcrumb-bg pt-150 pb-150" data-background="img/all-bg/papyrus.png">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="page-title text-center">--}}
{{--                            <h2 class="breadcrumb-title">Register</h2>--}}
{{--                            <div class="breadcrumb-menu mt-20">--}}
{{--                                <ul class="trail-items">--}}
{{--                                    <li class="trail-item trail-begin"><a href="#">Home</a></li>--}}
{{--                                    <li class="trail-item trail-end"><span>Shop</span></li>--}}
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
                            <h3 class="text-center mb-60">Signup From Here</h3>
                            <form  method="POST" action="{{ route('register.authenticate') }}">
                                @csrf
                                <label for="name">Username <span>**</span></label>
                                <input name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Enter Username..." />
                                <label for="email">Email Address <span>**</span></label>
                                <input name="email" id="email" type="text" value="{{ old('email') }}" placeholder="Enter Email address..." />
                                <label for="password">Password <span>**</span></label>
                                <input name="password" id="password" type="password" placeholder="Enter password..." />
                                <div class="mt-10"></div>
                                <button type="submit" class="bt-btn bt-btn-black w-100">Register Now</button>
                                <div class="or-divide"><span>or</span></div>
                            </form>
                                <a href="{{route('auth.login')}}" class="bt-btn w-100"><center>Login Now</center></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- auth Area End-->
    </main>

@endsection
