@extends('client.layouts.master')

@section('home-style')
    tc-about-page
@endsection

@section('loading-page')
    <div id="preloader"></div>
@endsection

@section('content')
    
    <!-- ====== start about header ====== -->
    <section class="tc-about-header">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h2> About Us </h2>
                </div>
                <div class="links">
                    <a href="#"> home </a>
                    <span class="icon"> <i class="la la-angle-right"></i> </span>
                    <a href="#!"> about us </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about header ====== -->


    <!-- ====== start about-about ====== -->
    <section class="tc-about-about">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="img img-cover">
                        <img src="/client/assets/img/about_page/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="info mt-4 mt-lg-0">
                        <p class="fsz-13px color-999 text-uppercase mb-10"> since from 2000 </p>
                        <h2 class="fsz-30px mb-40"> Our styleguide for our users <br> is very easy to catch </h2>
                        <div class="text fsz-14px color-666 mb-60">
                            The about us page is often a reflection of the purpose & personality of the business and its owners or top employees. Finally, the page can also incorporate contact or locational information.
                        </div>
                        <a href="#" class="butn bg-main text-white hover-shadow">
                            <span> Get In Touch </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about-about ====== -->


    <!-- ====== start about-vision ====== -->
    <section class="tc-about-vision">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="info mt-4 mt-lg-0">
                        <p class="fsz-13px color-999 text-uppercase mb-10"> mission & vision </p>
                        <h2 class="fsz-30px mb-40"> Newzin generated 2x more <br> online sales in 2022. </h2>
                        <div class="text fsz-14px color-666 mb-20">
                            Say goodbye to old fashioned theme options! Hub employs a live customizer so you can adjust global theme options and see design changes in real-time thank to the next generation customizer.
                        </div>
                        <div class="text fsz-14px color-666 mb-40">
                            Average. Urban design draws together the many strands of place making, environmental. Years of experience.
                        </div>
                        <div class="btns">
                            <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity="" class="vid_link">
                                <i class="la la-play"></i>
                            </a>
                            <span class="fsz-14px fw-bold"> How We Works Here </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="numbers-circles">
                        <div class="circle-item">
                            <div class="cont">
                                <p> mission & vision </p>
                                <strong class="number"> <span class="counter"> 77 </span>%</strong>
                            </div>
                        </div>
                        <div class="circle-item">
                            <div class="cont">
                                <p> Crafted by </p>
                                <strong class="number"> <span class="counter"> 49 </span>%</strong>
                            </div>
                        </div>
                        <div class="circle-item">
                            <div class="cont">
                                <p> crafted by </p>
                                <strong class="number"> <span class="counter"> 10 </span>k</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/client/assets/img/about_page/pattern_1.png" alt="" class="pattern">
    </section>
    <!-- ====== end about-vision ====== -->


    <!-- ====== start about-team ====== -->
    <section class="tc-about-team">
        <div class="container">
            <div class="title text-center mb-30">
                <p class="fsz-13px color-999 text-uppercase mb-10"> team </p>
                <h2 class="fsz-30px"> Our Journals </h2>
            </div>
            <div class="contant">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/1.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Conor Bradley </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Business, technology </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/2.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Luis Diaz </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Politic, lifestyle </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/3.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Alberto Moreno </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Entertaiment, culture, wolrd  </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/4.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Rosalin Willy </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Business, technology </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/5.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Miranda Helsi </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Politic, lifestyle </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-card">
                            <div class="img img-cover">
                                <img src="/client/assets/img/about_page/team/6.jpg" alt="">
                            </div>
                            <div class="inf">
                                <h6> Moreno Hossey </h6>
                                <small> Specialize in </small>
                                <a href="#" class="tags"> Entertaiment, culture, wolrd  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about-team ====== -->


    <!-- ====== start about-history ====== -->
    <section class="tc-about-history">
        <div class="container">
            <div class="title mb-80">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="fsz-13px text-white text-uppercase mb-10"> history </p>
                        <h2 class="fsz-30px text-white"> Company Journey </h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="arrows justify-content-lg-end">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="tc-about-history-slider">
                    <div class="swiper-container overflow-visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="history-card">
                                    <div class="card-title mb-30">
                                        <p class="fsz-13px color-main"> 2000 </p>
                                        <h5 class="fsz-22px fw-bold"> Journey Was Started </h5>
                                    </div>
                                    <div class="text fsz-14px color-666 mb-50">
                                        The about us page is often a reflection of the purpose & personality of the business and its owners.
                                    </div>
                                    <a href="#"> Read More </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-card">
                                    <div class="card-title mb-30">
                                        <p class="fsz-13px color-main"> 2012 </p>
                                        <h5 class="fsz-22px fw-bold"> Global Employee </h5>
                                    </div>
                                    <div class="text fsz-14px color-666 mb-50">
                                        The about us page is often a reflection of the purpose & personality of the business and its owners.
                                    </div>
                                    <a href="#"> Read More </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-card">
                                    <div class="card-title mb-30">
                                        <p class="fsz-13px color-main"> 2015 </p>
                                        <h5 class="fsz-22px fw-bold"> Revenue 100 Million </h5>
                                    </div>
                                    <div class="text fsz-14px color-666 mb-50">
                                        The about us page is often a reflection of the purpose & personality of the business and its owners.
                                    </div>
                                    <a href="#"> Read More </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="history-card">
                                    <div class="card-title mb-30">
                                        <p class="fsz-13px color-main"> 2023 </p>
                                        <h5 class="fsz-22px fw-bold"> Relocate In Egypt </h5>
                                    </div>
                                    <div class="text fsz-14px color-666 mb-50">
                                        The about us page is often a reflection of the purpose & personality of the business and its owners.
                                    </div>
                                    <a href="#"> Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about-history ====== -->


    <!-- ====== start about-team ====== -->
    <section class="tc-about-blog">
        <div class="container">
            <div class="title text-center mb-30">
                <p class="fsz-13px color-999 text-uppercase mb-10"> insights </p>
                <h2 class="fsz-30px"> Company Blog & Insights </h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tc-post-grid-default mt-50">
                            <div class="item">
                                <div class="img img-cover th-250">
                                    <img src="/client/assets/img/another_news/1.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                    <h4 class="title ltspc--1 mb-10">
                                        <a href="#">
                                            America's track and field team won the 2022 olympics?
                                        </a>
                                    </h4>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s
                                        biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                    2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tc-post-grid-default mt-50">
                            <div class="item">
                                <div class="img img-cover th-250">
                                    <img src="/client/assets/img/another_news/4.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">Entertaiment</a>
                                    <h4 class="title ltspc--1 mb-10">
                                        <a href="#">
                                            Logan Cee's Best Contemporary Art Works
                                        </a>
                                    </h4>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s
                                        biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                    2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tc-post-grid-default mt-50">
                            <div class="item">
                                <div class="img img-cover th-250">
                                    <img src="/client/assets/img/another_news/7.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</a>
                                    <h4 class="title ltspc--1 mb-10">
                                        <a href="#">
                                            Top 10 Most beautiful hot springs in the world
                                        </a>
                                    </h4>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s
                                        biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                    2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about-team ====== -->

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush