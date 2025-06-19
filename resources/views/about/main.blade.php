@extends('layouts.main')
@section('body')
    <main>
        <div class="breadcrumb-bg pt-150 pb-150" data-background="img/all-bg/papyrus.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2 class="breadcrumb-title">About</h2>
                            <div class="breadcrumb-menu mt-20">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="#">Home</a></li>
                                    <li class="trail-item trail-end"><span>About</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about-area start -->
        <section class="about-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-left-side pos-rel mb-30 mt-60">
                            <div class="about-front-img pos-rel">
                                <img src="{{asset('images/about.jpeg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-30 mb-30">
                            <div class="section-title mb-20">
                                <span>About Us</span>
                                <h4>Short Story About <br> Kotama.</h4>
                            </div>
                            <div class="about-text mb-50">
                                <p>Sepatu Kotama merupakan merek lokal asal Medan yang berada di bawah naungan CV Kotama,
                                    perusahaan yang berdiri sejak tahun 1989 dan didirikan oleh Bapak Azri.
                                    CV Kotama dikenal sebagai produsen sepatu kulit berkualitas tinggi untuk pria maupun wanita.</p>
                                <p>Semua produk dibuat secara handmade dengan menggunakan 100% kulit sapi asli,
                                    dikerjakan oleh tenaga profesional berpengalaman. Sepatu Kotama memiliki daya tahan yang baik,
                                    nyaman digunakan, serta menonjolkan nilai estetika dan keaslian produk lokal Indonesia.</p>
                            </div>
                            <div class="our-destination">
                                <div class="single-item mb-30">
                                    <div class="mv-icon f-left">
                                        <i class="fal fa-edit"></i>
                                    </div>
                                    <div class="mv-title fix">
                                        <h3>Our Mission</h3>
                                        <p>
                                            1. Menciptakan peluang lapangan pekerjaan bagi anak bangsa, dengan memproduksi satu juta pasang sepatu tiap tahun.<br>
                                            2. Menumbuhkan perekonomian Indonesia di sektor UMKM.<br>
                                            3. Menciptakan semangat untuk mencintai produk dalam negeri.<br>
                                            4. Menambah devisa bagi Negara dengan melakukan ekspor Produksi.<br>
                                            5. Menjadi salah satu produsen Sepatu berkualitas terbaik di Indonesia.<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="mv-icon f-left">
                                        <i class="fal fa-gem"></i>
                                    </div>
                                    <div class="mv-title fix">
                                        <h3>Our Vission</h3>
                                        <p>Menjadi Perusahaan UMKM Sepatu yang Terdepan di Indonesia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area end -->
        <!-- features area start -->
{{--        <section class="features-area gray-bg features-area-border p-relative pb-70 pt-100 box-105">--}}
{{--            <div class="container features__wrapper">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">--}}
{{--                        <div class="section-title text-center mb-40">--}}
{{--                            <span>Feathures</span>--}}
{{--                            <h4>Why Shop From Us.</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                        <div class="features__item d-flex white-bg transition-3 border-radius-8 box-shadow mb-30">--}}
{{--                            <div class="features__icon">--}}
{{--                                <i class="fal fa-shipping-fast"></i>--}}
{{--                            </div>--}}
{{--                            <div class="features__content">--}}
{{--                                <h3>FREE SHIPPING</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dole there eiusm tempor magna--}}
{{--                                    aliqua denim.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                        <div class="features__item d-flex white-bg transition-3 border-radius-8 box-shadow mb-30">--}}
{{--                            <div class="features__icon">--}}
{{--                                <i class="fal fa-headset"></i>--}}
{{--                            </div>--}}
{{--                            <div class="features__content">--}}
{{--                                <h3>24/7 SUPPORT</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dole there eiusm tempor magna--}}
{{--                                    aliqua denim.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-4 col-lg-6 col-md-6">--}}
{{--                        <div class="features__item d-flex white-bg transition-3 border-radius-8 box-shadow mb-30">--}}
{{--                            <div class="features__icon">--}}
{{--                                <i class="fal fa-undo-alt"></i>--}}
{{--                            </div>--}}
{{--                            <div class="features__content">--}}
{{--                                <h3>EASY RETURN</h3>--}}
{{--                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dole there eiusm tempor magna--}}
{{--                                    aliqua denim.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- features area end -->--}}
{{--        <div class="team-area pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">--}}
{{--                        <div class="section-title text-center mb-40">--}}
{{--                            <span>Members</span>--}}
{{--                            <h4>Team Members.</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="bt-team text-center mb-30">--}}
{{--                            <div class="team-img">--}}
{{--                                <img src="img/team/team-member-01.jpg" alt="">--}}
{{--                                <div class="team-social">--}}
{{--                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-30"></div>--}}
{{--                            <div class="team-info">--}}
{{--                                <h3>Donald T.Benjamin</h3>--}}
{{--                                <span>Head of Innovation</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="bt-team text-center mb-30">--}}
{{--                            <div class="team-img">--}}
{{--                                <img src="img/team/team-member-07.jpg" alt="">--}}
{{--                                <div class="team-social">--}}
{{--                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-30"></div>--}}
{{--                            <div class="team-info">--}}
{{--                                <h3>Donald T.Benjamin</h3>--}}
{{--                                <span>Head of Innovation</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="bt-team text-center mb-30">--}}
{{--                            <div class="team-img">--}}
{{--                                <img src="img/team/team-member-03.jpg" alt="">--}}
{{--                                <div class="team-social">--}}
{{--                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-30"></div>--}}
{{--                            <div class="team-info">--}}
{{--                                <h3>Donald T.Benjamin</h3>--}}
{{--                                <span>Head of Innovation</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="bt-team text-center mb-30">--}}
{{--                            <div class="team-img">--}}
{{--                                <img src="img/team/team-member-04.jpg" alt="">--}}
{{--                                <div class="team-social">--}}
{{--                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-linkedin"></i></a>--}}
{{--                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-30"></div>--}}
{{--                            <div class="team-info">--}}
{{--                                <h3>Jotaton Doese</h3>--}}
{{--                                <span>Head Developer</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- cta-area start -->--}}
{{--        <section class="cta-area pos-rel pt-115 pb-120" data-background="img/all-bg/newsletter-bg-3.jpg">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-xl-6 col-lg-8 col-md-10">--}}
{{--                        <div class="cta-text text-center">--}}
{{--                            <div class="section-title section-title-white text-center mb-40">--}}
{{--                                <span>All the best item for You</span>--}}
{{--                                <h4>Trust Us To Be There To Help All & Make Things Well Again.</h4>--}}
{{--                            </div>--}}
{{--                            <div class="section-button">--}}
{{--                                <a href="appoinment.html" class="bt-btn bt-btn-white">get a consultant</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- cta-area end -->--}}
{{--        <!-- testimonial-area-start -->--}}
{{--        <div class="testimonial-area pt-110">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-12">--}}
{{--                        <div class="section-title text-center mb-80">--}}
{{--                            <span>testimonials</span>--}}
{{--                            <h1>Happy Clients Says</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial pb-160" style="background-image:url(img/all-bg/test.png)">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">--}}
{{--                            <div class="testimonial-active owl-carousel">--}}
{{--                                <div class="testimonial-wrapper text-center">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="img/testimonial/test.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="testimonial-text">--}}
{{--                                        <h3>Johan D. William</h3>--}}
{{--                                        <span>Founder at UIhub</span>--}}
{{--                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
{{--                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="testimonial-wrapper text-center">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="img/testimonial/test.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="testimonial-text">--}}
{{--                                        <h3>Johan D. William</h3>--}}
{{--                                        <span>Founder at UIhub</span>--}}
{{--                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
{{--                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="testimonial-wrapper text-center">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="img/testimonial/test.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="testimonial-text">--}}
{{--                                        <h3>Johan D. William</h3>--}}
{{--                                        <span>Founder at UIhub</span>--}}
{{--                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
{{--                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="testimonial-wrapper text-center">--}}
{{--                                    <div class="testimonial-img">--}}
{{--                                        <img src="img/testimonial/test.png" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="testimonial-text">--}}
{{--                                        <h3>Johan D. William</h3>--}}
{{--                                        <span>Founder at UIhub</span>--}}
{{--                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud--}}
{{--                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- testimonial-area-end -->--}}
{{--        <div class="brand-area gray-bg pt-80 pb-80">--}}
{{--            <div class="container">--}}
{{--                <div class="row brand-active">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-01.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-02.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-03.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-04.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-05.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-02.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="bt-brand">--}}
{{--                            <a href="#"><img src="img/brand/brand-04.png" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </main>
@endsection
