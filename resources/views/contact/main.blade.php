@extends('layouts.main')
@section('body')
    <main>
        <div class="breadcrumb-bg pt-150 pb-150" data-background="img/all-bg/papyrus.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2 class="breadcrumb-title">Contact</h2>
                            <div class="breadcrumb-menu mt-20">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="{{route('home')}}">Home</a></li>
                                    <li class="trail-item trail-end"><span>Contact</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact area start -->
{{--        <section class="contact__area pt-120 pb-120">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-5 col-lg-5">--}}
{{--                        <div class="contact__info-head mb-40">--}}
{{--                            <div class="section-title mb-20">--}}
{{--                                <span>Contact info</span>--}}
{{--                                <h4>Have Any Questins Or Emergency Problem Contact With Us.</h4>--}}
{{--                            </div>--}}
{{--                            <p>Pulvinar senectus morbi quisque nunc to towa faucibus netus etiam mone lestie nisi dis malesuada--}}
{{--                                maecenas ora pretium ornare pharetra vestibulum mattis fringilla interdum cursus curae nisi pede--}}
{{--                                laoreet placerat </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">--}}
{{--                        <div class="contact__form">--}}
{{--                            <form id="contact-form" action="mail.php" method="POST">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-6">--}}
{{--                                        <input name="name" class="contact__input contact__input-3 contact__input-4" type="text"--}}
{{--                                               placeholder="Your Name">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-6">--}}
{{--                                        <input name="email" class="contact__input contact__input-3 contact__input-4"--}}
{{--                                               type="email" placeholder="E-mail Address">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-6">--}}
{{--                                        <input name="phone" class="contact__input contact__input-3 contact__input-4"--}}
{{--                                               type="text" placeholder="Phone Number">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-6">--}}
{{--                                        <input name="subject" class="contact__input contact__input-3 contact__input-4" type="text" placeholder="Subject">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-12">--}}
{{--                                        <textarea name="message"--}}
{{--                                                  class="contact__input contact__input-3 contact__input-4 txt-area " cols="30"--}}
{{--                                                  rows="10" placeholder="Write Message"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-12">--}}
{{--                                        <button class="bt-btn s-btn__square" type="submit">submit message</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <p class="ajax-response"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- contact area end -->

        <!-- contact info area start -->
        <section class="contact__info p-relative">
            <div class="container">
                <div class="contact__info-inner theme-bg">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                <div class="contact__icon mr-20">
                                    <i class="fal fa-house"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h3>Our Address</h3>
                                    <span>Jl. Arief Rahman Hakim No.206C, Sukaramai I</span>
                                    <span>Kec. Medan Area, Kota Medan, Sumatera Utara 20216</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                <div class="contact__icon mr-20">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h3>Phone Number</h3>
                                    <span>(+62) 852-6164-9765</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="contact__info-item text-center text-sm-left d-sm-flex justify-content-lg-center mb-30">
                                <div class="contact__icon mr-20">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact__info-content">
                                    <h3>Email</h3>
                                    <span>kotamashoes01@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact info area end -->

        <!-- contact map area start -->
        <section class="contact__map-area mt--120">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="contact__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7979.636640686298!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303130563b9b19ab%3A0xa08c66312606106!2sKotama%20Shoes!5e0!3m2!1sid!2sid!4v1749987246485!5m2!1sid!2sid&output=embed&kiosk=1"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact map area end -->

    </main>
@endsection
