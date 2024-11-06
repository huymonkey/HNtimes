@extends('client.layouts.master')

@section('loading-page')
    <div id="preloader"></div>
@endsection

@section('content')

    <div class="container pt-50">
        <h1>Trending Article</h1>
    </div>

    <!-- ====== start trending articles ====== -->
    <section class="tc-latest-news-style1">
        <div class="container">
            <div class="section-content pt-50 pb-50 border-bottom border-1 brd-gray">
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
    <!-- ====== end trending articles ====== -->

    <!-- ====== start sub category====== -->
    <section class="tc-popular-posts-blog">
        <div class="container">
            <div class="content pt-50 pb-50 border-1 border-bottom brd-gray">
                <p class="color-000 text-uppercase mb-30 ltspc-1"> worlds trending
                </p>
                <div class="tc-post-grid-default">
                    <div class="tc-popular-posts-blog-slider9 tc-slider-style1">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img img-cover th-180">
                                            <img src="/client/assets/img/latest/122.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
                                                    Hawks acquire All-Star guard Murray from Spurs
                                                </a>
                                            </h4>
                                            <div class="text color-666">
                                                The Boston Red Sox scored three runs in the 10th inning [...]
                                            </div>
                                            <div class="meta-bot lh-1 mt-20">
                                                <ul class="d-flex">
                                                    <li class="date me-5">
                                                        <a href="#"><i class="la la-calendar me-2"></i> Sep 7, 2023
                                                        </a>
                                                    </li>
                                                    <li class="comment">
                                                        <a href="#"><i class="la la-comment me-2"></i> 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img img-cover th-180">
                                            <img src="/client/assets/img/latest/124.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-features.html">
                                                    PGA Tour Highlights: Travelers Championship Round 1
                                                </a>
                                            </h4>
                                            <div class="text color-666">
                                                The Boston Red Sox scored three runs in the 10th inning [...]
                                            </div>
                                            <div class="meta-bot lh-1 mt-20">
                                                <ul class="d-flex">
                                                    <li class="date me-5">
                                                        <a href="#"><i class="la la-calendar me-2"></i> Dec 17, 2022
                                                        </a>
                                                    </li>
                                                    <li class="comment">
                                                        <a href="#"><i class="la la-comment me-2"></i> 3 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img img-cover th-180">
                                            <img src="/client/assets/img/latest/123.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
                                                    Hamilton, Russell question safety of bouncing F1 cars
                                                </a>
                                            </h4>
                                            <div class="text color-666">
                                                The Boston Red Sox scored three runs in the 10th inning [...]
                                            </div>
                                            <div class="meta-bot lh-1 mt-20">
                                                <ul class="d-flex">
                                                    <li class="date me-5">
                                                        <a href="#"><i class="la la-calendar me-2"></i> Dec 25, 2022
                                                        </a>
                                                    </li>
                                                    <li class="comment">
                                                        <a href="#"><i class="la la-comment me-2"></i> 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img img-cover th-180">
                                            <img src="/client/assets/img/latest/130.png" alt="">
                                            <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity=""
                                                class="video_icon icon-50 border-2">
                                                <i class="ion-play fsz-20px"></i>
                                            </a>
                                        </div>
                                        <div class="content pt-20">
                                            <a href="page-single-post-features.html"
                                                class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-features.html">
                                                    14th Best linebacker of Bill
                                                </a>
                                            </h4>
                                            <div class="text color-666">
                                                The Boston Red Sox scored three runs in the 10th inning [...]
                                            </div>
                                            <div class="meta-bot lh-1 mt-20">
                                                <ul class="d-flex">
                                                    <li class="date me-5">
                                                        <a href="#"><i class="la la-calendar me-2"></i> Dec 25, 2022
                                                        </a>
                                                    </li>
                                                    <li class="comment">
                                                        <a href="#"><i class="la la-comment me-2"></i> 7 </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end sub category====== -->

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush