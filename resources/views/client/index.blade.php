@extends('client.layouts.master')

@section('loading-page')
    <div class="loading-page style1">
        <div class="lad-cont">
            <h2 class="loading loading01">
                <span>.</span>
                <span>n</span>
                <span>e</span>
                <span>w</span>
                <span>z</span>
                <span>i</span>
                <span>n</span>
            </h2>
            <small class="loading loading01">
                <span>l</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </small>
        </div>
    </div>
@endsection

@section('content')
    <!-- ====== start breaking news ====== -->
    <section class="tc-breaking-news-style1 pt-50 pb-50">
        <div class="container">
            <p class="color-999 text-uppercase mb-30 ltspc-1">breaking news</p>
            <div class="tc-post-grid-default">
                <div class="tc-slider-style1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="page-single-post-creative.html" class="item d-block">
                                    <div class="row gx-4 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h5 class="title">Discover the secret in Sahara desert</h5>
                                                <div class="meta-bot mt-10">
                                                    <ul>
                                                        <li class="date"> <i class="la la-clock"></i> 24 Minutes ago
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="page-single-post-creative.html" class="item d-block">
                                    <div class="row gx-4 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h5 class="title">Economic policy between England & Scotland</h5>
                                                <div class="meta-bot mt-10">
                                                    <ul>
                                                        <li class="date"> <i class="la la-clock"></i> 3 Hours ago
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="page-single-post-creative.html" class="item d-block">
                                    <div class="row gx-4 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h5 class="title"> Make Poetry, Not War! </h5>
                                                <div class="meta-bot mt-10">
                                                    <ul>
                                                        <li class="date"> <i class="la la-clock"></i> 15 Hours ago
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="page-single-post-creative.html" class="item d-block">
                                    <div class="row gx-4 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h5 class="title">Economic policy between England & Scotland</h5>
                                                <div class="meta-bot mt-10">
                                                    <ul>
                                                        <li class="date"> <i class="la la-clock"></i> 3 Hours ago
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end breaking news ====== -->

    <!-- ====== start trends news ====== -->
    <section class="tc-trends-news-style1 pt-50 pb-50 bg-gray1">
        <div class="container">
            <div class="hot-trends-tabs-style1 mb-4">
                <p class="color-999 text-uppercase ltspc-1 flex-shrink-0 me-4 pt-1"> <i
                        class="ion-arrow-graph-up-right me-2"></i> hot trends </p>
                <div class="links">
                    <a href="#" class="link">Covid-19</a>
                    <a href="#" class="link">Bitcoin</a>
                    <a href="#" class="link">Ukraine War</a>
                    <a href="#" class="link">NBA Playoffs</a>
                    <a href="#" class="link">Grammys 2022</a>
                    <a href="#" class="link">Stocks</a>
                    <a href="#" class="link">Amazon</a>
                    <a href="#" class="link">Ghost of Tsushima</a>
                    <a href="#" class="link">Elon Musk</a>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="tc-stock-card mb-30">
                            <p class="stock-card-title">
                                Stocks Market today
                                {{-- <span class="la la-arrow-circle-o-right color-666"></span> --}}
                            </p>
                            <div class="stock-card-body">
                                <div class="stock-card-item">
                                    <div class="title">
                                        <h6>DOW <small class="indicator text-danger"> <i
                                                    class="ion-arrow-down-b"></i> 2,82%</small></h6>
                                        <span class="price">33,811.47</span>
                                    </div>
                                    <div class="inf">
                                        <p>Dow Jones Indus. Avg</p>
                                        <span class="price text-danger">-981.36</span>
                                    </div>
                                </div>
                                <div class="stock-card-item">
                                    <div class="title">
                                        <h6>NASDAQ <small class="indicator text-danger"> <i
                                                    class="ion-arrow-down-b"></i> 1,76% </small></h6>
                                        <span class="price">12,839.95</span>
                                    </div>
                                    <div class="inf">
                                        <p>NASDQ Composite Index</p>
                                        <span class="price text-danger">-217.86</span>
                                    </div>
                                </div>
                                <div class="stock-card-item">
                                    <div class="title">
                                        <h6>S&P 500 <small class="indicator text-success"> <i
                                                    class="ion-arrow-up-b"></i> 3,93% </small></h6>
                                        <span class="price">4,271.7</span>
                                    </div>
                                    <div class="inf">
                                        <p>S&P 500 Index</p>
                                        <span class="price text-success">+125.8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-grid-default">
                            <div class="item">
                                <div class="img img-cover th-200">
                                    <img src="/client/assets/img/trend/1.png" alt="">
                                </div>
                                <div class="content py-4 px-3 bg-gray2">
                                    <p class="color-main fsz-13px text-uppercase mb-1">Sponsored Content</p>
                                    <h4 class="title ltspc--1"> <a href="page-single-post-creative.html">3D2N at
                                            Sixsense Resort 5 stars just
                                            $1,299</a> </h4>
                                    <a href="#" class="color-999 fsz-12px mt-20">booking.com <i
                                            class="la la-external-link-square-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tc-trends-news-slider1 tc-slider-style2">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tc-post-overlay-default">
                                            <div class="img th-650 img-cover">
                                                <img src="/client/assets/img/trend/2.png" alt="">
                                                <div class="tags">
                                                    <a href="#">featured,</a>
                                                    <a href="#">news</a>
                                                </div>
                                            </div>
                                            <div class="content ps-40 pe-40 pb-40">
                                                <h2 class="title mb-20">
                                                    <a href="page-single-post-creative.html">2022 NFL Craf predict:
                                                        <br> Top 4 Quarterbacks
                                                        selected</a>
                                                </h2>
                                                <div class="text mb-40">
                                                    Its first decline in subscribers since 2011 triggered a $54
                                                    billion stock value loss and raised questions [...]
                                                </div>
                                                <div class="meta-bot lh-1">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                                2022</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by Admin</a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 55
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tc-post-overlay-default">
                                            <div class="img th-650 img-cover">
                                                <img src="/client/assets/img/trend/3.png" alt="">
                                                <div class="tags">
                                                    <a href="#">technology</a>
                                                </div>
                                            </div>
                                            <div class="content ps-40 pe-40 pb-40">
                                                <h2 class="title mb-20">
                                                    <a href="page-single-post-creative.html">Myenergi's award
                                                        winning product the zappi EV
                                                        charger</a>
                                                </h2>
                                                <div class="text mb-40">
                                                    Its first decline in subscribers since 2011 triggered a $54
                                                    billion stock value loss and raised questions [...]
                                                </div>
                                                <div class="meta-bot lh-1">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                                2022</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by Admin</a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 55
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tc-post-list-style1">
                            <div class="tc-post-title-style1">
                                <a href="page-blog.html"> trending posts </a>
                            </div>
                            <div class="tc-post-overlay-default">
                                <div class="img th-200 img-cover">
                                    <img src="/client/assets/img/trend/4.png" alt="">
                                </div>
                                <div class="content ps-20 pe-20 pb-20 text-white">
                                    <a href="page-single-post-creative.html"
                                        class="text-uppercase fsz-13px mb-1">lifestyle</a>
                                    <h4 class="title">
                                        <a href="#">The story about Hoki</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="items">
                                <a href="page-single-post-creative.html" class="item hover-main">
                                    <h2 class="num">
                                        2
                                    </h2>
                                    <div class="content">
                                        <span class="fsz-12px color-999 text-uppercase mb-2">news</span>
                                        <h6 class="title">Elon Musk got Twitter because he gets Twitter</h6>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item hover-main">
                                    <h2 class="num">
                                        3
                                    </h2>
                                    <div class="content">
                                        <span class="fsz-12px color-999 text-uppercase mb-2">technology</span>
                                        <h6 class="title">NFT Technology is become trends in 2022</h6>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item hover-main">
                                    <h2 class="num">
                                        4
                                    </h2>
                                    <div class="content">
                                        <span class="fsz-12px color-999 text-uppercase mb-2">lifestyle</span>
                                        <h6 class="title">MLB become 1st fashion brands in US</h6>
                                    </div>
                                </a>
                                <a href="#" class="fsz-13px color-999  pt-30 pb-30">
                                    See all posts <i class="la la-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end trends news ====== -->

    <!-- ====== start Latest news ====== -->
    <section class="tc-latest-news-style1">
        <div class="container">
            <div class="section-content pt-50 pb-50 border-bottom border-1 brd-gray">
                <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html"> latest news </a> <i class="la la-angle-right ms-1"></i>
                </p>
                <div class="row">
                    <div class="col-lg-5 border-end brd-gray border-1">
                        <div class="tc-post-grid-default">
                            <div class="item">
                                <div class="img img-cover th-330">
                                    <img src="/client/assets/img/latest/1.png" alt="">
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity
                                        class="video_icon icon-70">
                                        <i class="ion-play"></i>
                                    </a>
                                </div>
                                <div class="content pt-30">
                                    <a href="page-blog.html"
                                        class="news-cat color-999 fsz-13px text-uppercase mb-10">politics</a>
                                    <h2 class="title mb-20">
                                        <a href="page-single-post-features.html">Biden asks Congress for $33 billion
                                            to support Ukraine</a>
                                    </h2>
                                    <div class="text color-666">
                                        The social-media company is in discussions to sell itself to Elon, a
                                        dramatic turn of events just 11 days after the [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-40">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14, 2022</a>
                                            </li>
                                            <li class="author me-5">
                                                <a href="#"><i class="la la-user me-2"></i> by Admin </a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 55 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 border-end brd-gray border-1">
                        <div class="tc-post-list-style2">
                            <div class="items">
                                <div class="item">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                    politics
                                                </div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Disputes in the South China
                                                        Sea show no sign of ending</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">sport
                                                    <b class="text-danger"> <i
                                                            class="icon-6 rounded-circle bg-danger ms-2 me-1 d-inline-block"></i>
                                                        live</b> </div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Live of MLB Baseball 2022:
                                                        NY Yankees Vs NY Mets</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                    lifestyle</div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Paddling in Miami Beach</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/6.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                    business
                                                </div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Stock market in last week:
                                                        "The strength of bulls"</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/7.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                    lifestyle</div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Stock market in last week:
                                                        "The strength of bulls"</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-0">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-70 img-cover">
                                                <img src="/client/assets/img/latest/8.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                    lifestyle</div>
                                                <h5 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"
                                                        class="hover-underline">Helm Extract Infuse cream,
                                                        1000mg Full spectrum</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tc-post-grid-default border-1 border-bottom brd-gray pb-10">
                            <div class="item">
                                <div class="img img-cover th-200">
                                    <img src="/client/assets/img/latest/2.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">travel</a>
                                    <h5 class="title ltspc--1 mb-10"> <a href="page-single-post-creative.html">Fact
                                            of Camel in Dubai</a> </h5>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 25, 2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 8 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-15">
                            <span class="fsz-12px color-999 text-capitalize fst-italic">Related Post</span>
                            <a href="page-single-post-creative.html" class="d-flex my-3">
                                <span class="icon-6 rounded-circle bg-dark me-3 flex-shrink-0 op-4 mt-10"></span>
                                <h6 class="fsz-16px">
                                    Top 10 Destinations not to be missed this summer
                                </h6>
                            </a>
                            <a href="page-single-post-creative.html" class="d-flex my-3">
                                <span class="icon-6 rounded-circle bg-dark me-3 flex-shrink-0 op-4 mt-10"></span>
                                <h6 class="fsz-16px">
                                    Travel experience Switzerland self-sufficient in 4D3N
                                </h6>
                            </a>
                            <a href="page-single-post-creative.html" class="d-flex my-3">
                                <span class="icon-6 rounded-circle bg-dark me-3 flex-shrink-0 op-4 mt-10"></span>
                                <h6 class="fsz-16px">
                                    Discovery Devon island, Canada
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end Latest news ====== -->

    <!-- ====== start banner1 ====== -->
    <section class="banner1">
        <div class="container">
            <div class="content pt-50 pb-50 border-bottom border-1 brd-gray">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <a href="#" class="d-block img-cover">
                            <img src="/client/assets/img/banner1.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end banner1 ====== -->

    <!-- ====== start must read ====== -->
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- must-read -->
                    <section class="tc-must-read-style1 bg-gray2 p-30">
                        <p class="color-000 text-uppercase mb-20 ltspc-1"> <a href="page-blog.html"> must read </a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="tc-post-grid-default border-1 border-bottom brd-gray pb-30">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="img img-cover th-230">
                                            <img src="/client/assets/img/must_read/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="content">
                                            <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">Sport</a>
                                            <h3 class="title mb-15"> <a href="page-single-post-creative.html">Manoah dominates, closes in on Blue
                                                    Jays history</a> </h3>
                                            <div class="text color-666">
                                                The social-media company is in discussions to sell itself to Elon, a
                                                dramatic turn of events just 11 days [...]
                                            </div>
                                            <div class="meta-bot lh-1 mt-50">
                                                <ul class="d-flex">
                                                    <li class="date me-4">
                                                        <a href="#"><i class="la la-calendar me-1"></i> Dec 14,
                                                            2022</a>
                                                    </li>
                                                    <li class="author me-4">
                                                        <a href="#"><i class="la la-user me-1"></i> by Admin </a>
                                                    </li>
                                                    <li class="comment">
                                                        <a href="#"><i class="la la-comment me-1"></i> 55
                                                            Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-grid-default pt-30">
                            <div class="row">
                                <div class="col-lg-4 border-1 border-end brd-gray">
                                    <div class="item">
                                        <div class="img img-cover th-180 mb-20">
                                            <img src="/client/assets/img/must_read/2.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-1">business</a>
                                            <h4 class="title ltspc--1">
                                                <a href="page-single-post-creative.html" class="hover-underline">
                                                    Sponsored Content Post with Double line
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-1 border-end brd-gray">
                                    <div class="item">
                                        <div class="img img-cover th-180 mb-20">
                                            <img src="/client/assets/img/must_read/3.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-1">culture</a>
                                            <h4 class="title ltspc--1">
                                                <a href="page-single-post-creative.html" class="hover-underline">
                                                    Discovery the culture of Japan. Oriental beauty & the legend of
                                                    Samurai
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="item">
                                        <div class="img img-cover th-180 mb-20">
                                            <img src="/client/assets/img/must_read/4.png" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-1">technology</a>
                                            <h4 class="title ltspc--1">
                                                <a href="page-single-post-creative.html" class="hover-underline">
                                                    Tiktok will pass Facebook?
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- business -->
                    <section class="tc-business-style1 pt-50 pb-50">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">business</a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="main-blog pb-30 border-1 border-bottom brd-gray">
                            <div class="row">
                                <div class="col-lg-8 border-1 border-end brd-gray">
                                    <div class="tc-post-overlay-default">
                                        <div class="img th-400 img-cover">
                                            <img src="/client/assets/img/bussines/1.png" alt="">
                                            <div class="tags">
                                                <a href="#">business</a>
                                            </div>
                                        </div>
                                        <div class="content ps-30 pe-30 pb-30">
                                            <h3 class="title mb-20">
                                                <a href="page-single-post-creative.html">Become master of strategy from playing chess</a>
                                                </h2>
                                                <div class="meta-bot lh-1">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                                2022</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by Admin</a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 55
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tc-post-list-style2">
                                        <div class="items">
                                            <div class="item pb-20">
                                                <div class="content">
                                                    <a href="#"
                                                        class="news-cat color-999 fsz-13px text-uppercase mb-1">business</a>
                                                    <h5 class="title ltspc--1">
                                                        <a href="page-single-post-creative.html">Global financial markets after covid 2022</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="item pb-20">
                                                <div class="content">
                                                    <a href="#"
                                                        class="news-cat color-999 fsz-13px text-uppercase mb-1">business</a>
                                                    <h5 class="title ltspc--1">
                                                        <a href="page-single-post-creative.html">U.S Stocks Market today</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="item pb-20">
                                                <div class="content">
                                                    <a href="#"
                                                        class="news-cat color-999 fsz-13px text-uppercase mb-1">business</a>
                                                    <h5 class="title ltspc--1">
                                                        <a href="page-single-post-creative.html">Stock Market meltdowns have FAANGs looking
                                                            increasingly toothless</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="item pb-20 border-0">
                                                <div class="content">
                                                    <a href="#"
                                                        class="news-cat color-999 fsz-13px text-uppercase mb-1">business</a>
                                                    <h5 class="title ltspc--1">
                                                        <a href="page-single-post-creative.html">Success Stories of Starbuck</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-list-style2">
                            <div class="items">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="page-single-post-creative.html" class="item d-block border-0 pt-30">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-90 img-cover">
                                                        <img src="/client/assets/img/bussines/2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <div
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                            business</div>
                                                        <h5 class="title ltspc--1">Horseback Riding, <br> A
                                                            business-class hobby</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="page-single-post-creative.html" class="item d-block border-0 pt-30">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-90 img-cover">
                                                        <img src="/client/assets/img/bussines/3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <div
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-1">
                                                            business</div>
                                                        <h5 class="title ltspc--1">The Financial statements of ABC
                                                            <br> Bank are questionable
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- banner2 -->
                    <section class="banner2">
                        <div class="container">
                            <div class="content">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <a href="#" class="d-block img-cover">
                                            <img src="/client/assets/img/banner2.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- technology -->
                    <div class="tc-technology-style1 pt-50">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">technology</a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="tc-post-overlay-default">
                            <div class="img th-600 img-cover">
                                <img src="/client/assets/img/technology/1.png" alt="">
                                <div class="tags">
                                    <a href="#">technology</a>
                                </div>
                            </div>
                            <div class="content ps-40 pe-40 pb-40">
                                <h2 class="title mb-30">
                                    <a href="page-single-post-creative.html">Myenergi's award winning product <br> the zappi EV charger</a>
                                </h2>
                                <div class="meta-bot lh-1">
                                    <ul class="d-flex">
                                        <li class="date me-5">
                                            <a href="#"><i class="la la-calendar me-2"></i> Dec 14, 2022</a>
                                        </li>
                                        <li class="author me-5">
                                            <a href="#"><i class="la la-user me-2"></i> by Admin</a>
                                        </li>
                                        <li class="comment">
                                            <a href="#"><i class="la la-comment me-2"></i> 55 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-list-style2">
                            <div class="items">
                                <div class="item pt-30 pb-30 mt-30 border-1 border-top border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/technology/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-3">
                                                    <a href="#">technology</a>
                                                </div>
                                                <h3 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"> Big Title for featured post with double line and
                                                        more text </a>
                                                </h3>
                                                <div class="meta-bot lh-1 mt-80">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Dec 14,
                                                                2022</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by Admin
                                                            </a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 55
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-0 bg-gray1 p-3 mt-30">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/technology/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="content">
                                                <div class="news-cat color-999 fsz-13px text-uppercase mb-3">
                                                    <a href="#" class="text-danger">Sponsored Content</a>
                                                </div>
                                                <h3 class="title ltspc--1">
                                                    <a href="page-single-post-creative.html"> Oppoturnity become Lead of Backend Developer at
                                                        Google Studio </a>
                                                </h3>
                                                <div class="meta-bot lh-1 mt-80">
                                                    <ul class="d-flex">
                                                        <li class="comment">
                                                            <a href="#"> totalworks.com <i
                                                                    class="las la-external-link-square-alt ms-2"></i>
                                                            </a>
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
                </div>

                <div class="col-lg-3">
                    <div class="tc-side-widgets">
                        <!-- widget-podcast -->
                        <div class="tc-widget-podcast">
                            <p class="color-000 text-uppercase mb-30 ltspc-1 lh-2"> new podcasts <i
                                    class="la la-angle-right ms-1"></i> </p>
                            <div class="main-card">
                                <div class="img img-cover">
                                    <img src="/client/assets/img/pdc1.png" alt="">
                                </div>
                                <div class="info pt-10">
                                    <small>2 Hours ago</small>
                                    <h5>
                                        <a href="#" class="title">
                                            Start A New Day with A Smile
                                        </a>
                                    </h5>
                                </div>
                                <audio controls class="audio">
                                    <source src="/client/assets/img/audio1.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                            <div class="podcast-list">
                                <div class="item">
                                    <a href="#" class="img">
                                        <img src="/client/assets/img/pdc1.png" alt="">
                                    </a>
                                    <div class="info">
                                        <small> 3 Hours ago </small>
                                        <h6 class="title">
                                            <a href="#">
                                                Release energy and activity
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item">
                                    <a href="https://www.youtube.com/watch?v=pGbIOC83-So&amp;t=21s"
                                        data-fancybox="video" class="img img-vid">
                                        <img src="/client/assets/img/pdc2.png" alt="">
                                        <i class="ion-arrow-right-b play-icon"></i>
                                    </a>
                                    <div class="info">
                                        <small> 3 Hours ago </small>
                                        <h6 class="title">
                                            <a href="#">
                                                Cafe, Chill and focus to study
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="item mb-0">
                                    <a href="#" class="img">
                                        <img src="/client/assets/img/pdc3.png" alt="">
                                    </a>
                                    <div class="info">
                                        <small> 3 Hours ago </small>
                                        <h6 class="title">
                                            <a href="#">
                                                A long day mood
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget-sponsored -->
                        <div class="tc-widget-sponsored-style1">
                            <div class="img img-cover">
                                <img src="/client/assets/img/sponsored/1.png" alt="">
                            </div>
                            <div class="info pt-10">
                                <div class="spon-cat"> Sponsored Content </div>
                                <h6 class="title">
                                    <a href="#">
                                        Dile & Kamine Soap from pure natura 100%
                                    </a>
                                </h6>
                                <a href="#">
                                    <small>dileandkamina.com <i
                                            class="las la-external-link-square-alt ms-2"></i></small>
                                </a>
                            </div>
                        </div>
                        <!-- popular posts -->
                        <div class="tc-widget-popular-style1">
                            <p class="color-000 text-uppercase mb-20 ltspc-1"> popular posts </p>
                            <div class="main-card">
                                <div class="img th-300 img-cover">
                                    <img src="/client/assets/img/wid_popular/1.png" alt="">
                                    <div class="tags">
                                        <a href="#">business</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="page-single-post-creative.html">Big Title for featured post with double</a>
                                    </h4>
                                    <div class="meta-bot">
                                        <ul class="d-flex">
                                            <li class="date me-4">
                                                <a href="#"><i class="la la-calendar me-1"></i> Dec 14, 2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-1"></i> 55 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tc-widget-popular-list">
                                <a href="page-single-post-creative.html" class="item">
                                    <div class="img img-cover">
                                        <img src="/client/assets/img/wid_popular/2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="title">
                                            Joe Biden did not participate in the war
                                        </h6>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item">
                                    <div class="img img-cover">
                                        <img src="/client/assets/img/wid_popular/3.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="title">
                                            Mindset to Succesful, Become Lion King
                                        </h6>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item">
                                    <div class="img img-cover">
                                        <img src="/client/assets/img/wid_popular/4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="title">
                                            Experience ballon balls in Turkey
                                        </h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- widget-adbox -->
                        <div class="tc-widget-adbox-style1">
                            <a href="#" class="img">
                                <img src="/client/assets/img/banner12.png" alt="" class="">
                            </a>
                        </div>
                        <!-- widget-survey -->
                        <div class="tc-widget-survey-style1">
                            <p class="color-000 text-uppercase mb-20 ltspc-1"> quick survey </p>
                            <div class="ques-title lh-4">
                                How was your experience on Newzin?
                            </div>
                            <div class="ansr-content">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quesCheck" id="quesCheck1">
                                    <label class="form-check-label" for="quesCheck1">
                                        Awesome, I’m satisfied!
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quesCheck" id="quesCheck2">
                                    <label class="form-check-label" for="quesCheck2">
                                        Normal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quesCheck" id="quesCheck3">
                                    <label class="form-check-label" for="quesCheck3">
                                        Bad! Need improve more
                                    </label>
                                </div>
                            </div>
                            <div class="btns">
                                <a href="#" class="btn active me-2">
                                    Submit
                                </a>
                                <a href="#" class="btn">
                                    Result
                                </a>
                            </div>

                            <small class="pl-num">
                                <span class="color-000">24,562 </span> Peoples joined
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== end must read ====== -->

    <!-- ====== start hot videos ====== -->
    <section class="tc-hot-videos-style1 pt-30 pb-50 parallaxie">
        <div class="container">
            <div class="content">
                <div class="section-head">
                    <p class="text-white text-uppercase ltspc-1"> hot videos LAST WEEK <i
                            class="la la-angle-right ms-1"></i> </p>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Popular-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Popular" type="button" role="tab"
                                aria-controls="pills-Popular" aria-selected="true">
                                Popular
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Latest-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Latest" type="button" role="tab" aria-controls="pills-Latest"
                                aria-selected="false">
                                Latest
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Popular" role="tabpanel"
                        aria-labelledby="pills-Popular-tab">
                        <div class="row">
                            <div class="col-lg-9 border-1 border-end brd-light">
                                <div class="tc-video-slider1">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="slider-content">
                                                    <p class="sub-title">featured, video</p>
                                                    <h3 class="title">  <a href="page-single-post-features.html"> Amazing View! Catch the sunrise <br> in high
                                                        moutain </a> </h3>
                                                    <div class="meta-bot lh-1">
                                                        <ul class="d-flex">
                                                            <li class="date me-5">
                                                                <a href="#"><i class="la la-calendar me-2"></i>
                                                                    Dec 24, 2022
                                                                </a>
                                                            </li>
                                                            <li class="comment">
                                                                <i class="las la-chart-line me-2"></i>
                                                                25,6K Views
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-fancybox=""
                                                        class="play-cont">
                                                        <i class="ion-play me-3"></i>
                                                        <span>
                                                            play <br> video
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tc-side-video-posts">
                                    <p class="text-white text-uppercase ltspc-1 mb-40 lh-2 fsz-13px">videos up next
                                    </p>
                                    <div class="tc-post-grid-default">
                                        <div class="item mb-40">
                                            <div class="img img-cover th-180">
                                                <img src="/client/assets/img/videos/1.png" alt="">
                                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity
                                                    class="video_icon icon-60">
                                                    <i class="ion-play"></i>
                                                </a>
                                            </div>
                                            <div class="content pt-20">
                                                <a href="#"
                                                    class="news-cat text-white fsz-13px text-uppercase mb-1 fw-lighter">travel,
                                                    video</a>
                                                <h4 class="title ltspc--1 text-white">
                                                    <a href="page-single-post-features.html">Amazing View! Catch the sunrise in high mountain</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img img-cover th-180">
                                                <img src="/client/assets/img/videos/2.png" alt="">
                                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity=""
                                                    class="video_icon icon-60">
                                                    <i class="ion-play"></i>
                                                </a>
                                            </div>
                                            <div class="content pt-20">
                                                <a href="#"
                                                    class="news-cat text-white fsz-13px text-uppercase mb-1 fw-lighter">culture,
                                                    video</a>
                                                <h4 class="title ltspc--1 text-white">
                                                    <a href="page-single-post-features.html">Bhutan! The happiest country on the world</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Latest" role="tabpanel" aria-labelledby="pills-Latest-tab">
                        <div class="row">
                            <div class="col-lg-9 border-1 border-end brd-light">
                                <div class="tc-video-slider1">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="slider-content">
                                                    <p class="sub-title">featured, video</p>
                                                    <h3 class="title"> <a href="page-single-post-features.html"> Amazing View! Catch the sunrise <br> in high
                                                        moutain </a> </h3>
                                                    <div class="meta-bot lh-1">
                                                        <ul class="d-flex">
                                                            <li class="date me-5">
                                                                <a href="#"><i class="la la-calendar me-2"></i>
                                                                    Dec 24, 2022
                                                                </a>
                                                            </li>
                                                            <li class="comment">
                                                                <i class="las la-chart-line me-2"></i>
                                                                25,6K Views
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-fancybox=""
                                                        class="play-cont">
                                                        <i class="ion-play me-3"></i>
                                                        <span>
                                                            play <br> video
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="tc-side-video-posts">
                                    <p class="text-white text-uppercase ltspc-1 mb-40 lh-2 fsz-13px">videos up next
                                    </p>
                                    <div class="tc-post-grid-default">
                                        <div class="item mb-40">
                                            <div class="img img-cover th-180">
                                                <img src="/client/assets/img/videos/1.png" alt="">
                                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity=""
                                                    class="video_icon icon-60">
                                                    <i class="ion-play"></i>
                                                </a>
                                            </div>
                                            <div class="content pt-20">
                                                <a href="#"
                                                    class="news-cat text-white fsz-13px text-uppercase mb-1 fw-lighter">travel,
                                                    video</a>
                                                <h4 class="title ltspc--1 text-white">
                                                    <a href="page-single-post-features.html">Amazing View! Catch the sunrise in high mountain</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="img img-cover th-180">
                                                <img src="/client/assets/img/videos/2.png" alt="">
                                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity=""
                                                    class="video_icon icon-60">
                                                    <i class="ion-play"></i>
                                                </a>
                                            </div>
                                            <div class="content pt-20">
                                                <a href="#"
                                                    class="news-cat text-white fsz-13px text-uppercase mb-1 fw-lighter">culture,
                                                    video</a>
                                                <h4 class="title ltspc--1 text-white">
                                                    <a href="page-single-post-features.html">Bhutan! The happiest country on the world</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end hot vedios ====== -->

    <!-- ====== start lifestyle ====== -->
    <section class="tc-lifestyle pt-50 pb-50">
        <div class="container">
            <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">lifestyle</a> <i class="la la-angle-right ms-1"></i> </p>
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 border-end brd-gray border-1">
                        <div class="tc-post-grid-default">
                            <div class="item">
                                <div class="img img-cover th-400">
                                    <img src="/client/assets/img/lifestyle/1.png" alt="">
                                </div>
                                <div class="content pt-30">
                                    <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">life
                                        style</a>
                                    <h3 class="title ltspc--1 mb-20"> <a href="page-single-post-creative.html">
                                            Hotdog styles on 20 countries
                                        </a> </h3>
                                    <div class="text color-666">
                                        The social-media company is in discussions to sell itself to Elon, a
                                        dramatic turn of events just 11 days after the [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-40">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14, 2022</a>
                                            </li>
                                            <li class="author me-5">
                                                <a href="#"><i class="la la-user me-2"></i> by Admin </a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 55 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 border-end brd-gray border-1">
                        <div class="tc-post-grid-default">
                            <div class="item">
                                <div class="img img-cover th-200">
                                    <img src="/client/assets/img/lifestyle/2.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#"
                                        class="news-cat color-999 fsz-13px text-uppercase mb-10">lifestyle</a>
                                    <h5 class="title ltspc--1 mb-10">
                                        <a href="page-single-post-creative.html">
                                            Grand Pera Coffee
                                        </a>
                                    </h5>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14, 2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-list-style2">
                            <div class="items">
                                <a href="page-single-post-creative.html"
                                    class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    Top 10 Best of Mustache for Hipster 2022
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    Dad and “his son”
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/5.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    The fashion trend for “old guys”
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tc-post-grid-default">
                            <div class="item">
                                <div class="img img-cover th-200">
                                    <img src="/client/assets/img/lifestyle/6.png" alt="">
                                </div>
                                <div class="content pt-20">
                                    <a href="#"
                                        class="news-cat color-999 fsz-13px text-uppercase mb-10">lifestyle</a>
                                    <h5 class="title ltspc--1 mb-10">
                                        <a href="page-single-post-creative.html">
                                            Enviroment Protection
                                        </a>
                                    </h5>
                                    <div class="text color-666">
                                        Crime rates on trains and buses are up in some of the nation’s biggest [...]
                                    </div>
                                    <div class="meta-bot lh-1 mt-20">
                                        <ul class="d-flex">
                                            <li class="date me-5">
                                                <a href="#"><i class="la la-calendar me-2"></i> Dec 14, 2022</a>
                                            </li>
                                            <li class="comment">
                                                <a href="#"><i class="la la-comment me-2"></i> 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tc-post-list-style2">
                            <div class="items">
                                <a href="page-single-post-creative.html"
                                    class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/7.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    10 Best of Scadinavia Interior styles
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/8.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    How to make a toast with burberry
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15">
                                    <div class="row gx-3 align-items-center">
                                        <div class="col-4">
                                            <div class="img th-50 img-cover">
                                                <img src="/client/assets/img/lifestyle/9.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="content">
                                                <h6 class="title ltspc--1">
                                                    Enhance water in your body with Boxed Water
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end lifestyle ====== -->

    <!-- ====== start columnist ====== -->
    <section class="tc-columnist-style1">
        <div class="container">
            <div class="content pt-50 pb-50 border-1 border-top brd-gray">
                <p class="color-000 text-uppercase mb-40 ltspc-1 lh-1">top columnist <i
                        class="la la-angle-right ms-1"></i> </p>
                <div class="columnist-slider1 tc-slider-style1">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="columnist-card d-flex align-items-center">
                                    <div
                                        class="img img-cover icon-100 rounded-circle overflow-hidden flex-lg-shrink-0 me-4">
                                        <img src="/client/assets/img/colums/1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="name fsz-20px mb-10">
                                            Conor Bradley
                                        </h6>
                                        <div class="jop-title">
                                            <small class="fsz-13px color-999">Specialize in</small>
                                            <p class="fsz-13px text-uppercase">Business, technology</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="columnist-card d-flex align-items-center">
                                    <div
                                        class="img img-cover icon-100 rounded-circle overflow-hidden flex-lg-shrink-0 me-4">
                                        <img src="/client/assets/img/colums/2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="name fsz-20px mb-10">
                                            Luis Diaz
                                        </h6>
                                        <div class="jop-title">
                                            <small class="fsz-13px color-999">Specialize in</small>
                                            <p class="fsz-13px text-uppercase">Politic, lifestyle</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="columnist-card d-flex align-items-center">
                                    <div
                                        class="img img-cover icon-100 rounded-circle overflow-hidden flex-lg-shrink-0 me-4">
                                        <img src="/client/assets/img/colums/3.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="name fsz-20px mb-10">
                                            Alberto Moreno
                                        </h6>
                                        <div class="jop-title">
                                            <small class="fsz-13px color-999">Specialize in</small>
                                            <p class="fsz-13px text-uppercase">Entertaiment, culture, wolrd </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="columnist-card d-flex align-items-center">
                                    <div
                                        class="img img-cover icon-100 rounded-circle overflow-hidden flex-lg-shrink-0 me-4">
                                        <img src="/client/assets/img/colums/2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h6 class="name fsz-20px mb-10">
                                            Luis Diaz
                                        </h6>
                                        <div class="jop-title">
                                            <small class="fsz-13px color-999">Specialize in</small>
                                            <p class="fsz-13px text-uppercase">Politic, lifestyle</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end columnist ====== -->

    <!-- ====== start another-news ====== -->
    <section class="another-news pt-50 pb-50 border-1 border-top brd-gray">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">Sport</a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="row">
                            <div class="col-12 border-1 border-end brd-gray">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/another_news/1.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
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
                                <div class="tc-post-list-style2">
                                    <div class="items">
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
                                                        <h5 class="title ltspc--1">
                                                            How’s Ameican Football Ball created out?
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
                                                        <h5 class="title ltspc--1">
                                                            Daniel share experience ski on Everest
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">Entertaiment</a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="row">
                            <div class="col-12 border-1 border-end brd-gray">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/another_news/4.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">Entertaiment</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
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
                                <div class="tc-post-list-style2">
                                    <div class="items">
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/5.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">entertaiment</small>
                                                        <h5 class="title ltspc--1">
                                                            Netflix change their policy for package family
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/6.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">entertaiment</small>
                                                        <h5 class="title ltspc--1">
                                                            Buy black vinyl record at Festival Oldschool market
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">Travel</a> <i
                                class="la la-angle-right ms-1"></i> </p>
                        <div class="row">
                            <div class="col-12">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/another_news/7.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
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
                                <div class="tc-post-list-style2">
                                    <div class="items">
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/8.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</small>
                                                        <h5 class="title ltspc--1">
                                                            Experience in applying for a visa card for newcomers
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html"
                                            class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/9.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small
                                                            class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</small>
                                                        <h5 class="title ltspc--1">
                                                            Release yourself on the sea and get the vibe chill
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end another-news ====== -->

    <!-- ====== start download ====== -->
    <section class="tc-download-style1 pb-50">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="info">
                            <strong class="title">Download Newzin App</strong>
                            <div class="text">
                                Easy to update latest news, daily podcast and everything in your hand
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="img">
                            <a href="#">
                                <img src="/client/assets/img/apple1.png" alt="">
                            </a>
                            <a href="#">
                                <img src="/client/assets/img/android1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end download ====== -->
@endsection