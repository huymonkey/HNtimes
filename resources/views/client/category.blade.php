@extends('client.layouts.master')

@section('home-style')
tc-blog-page
@endsection

@section('loading-page')
    <div id="preloader"></div>
@endsection

@section('content')
    <!-- ====== start nav search ====== -->
    <div class="tc-blog-nav-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="info">
                        <h2>sport</h2>
                        <div class="links">
                            <a href="#">NFL</a>
                            <a href="#">NBA</a>
                            <a href="#">CFB</a>
                            <a href="#">WNBA</a>
                            <a href="#">MLB</a>
                            <a href="#">soccer</a>
                            <a href="#">UFC</a>
                            <a href="#">auto racing</a>
                            <a href="#">golf</a>
                            <a href="#">other</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="search-form">
                        <div class="form-group">
                            <input type="text" placeholder="search in this blog">
                            <button type="submit"> <i class="la la-search"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== end nav search ====== -->

    <!-- ====== start features posts ====== -->
    <section class="features-posts pt-50 pb-50 bg-gray1">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-6 border-1 border-end brd-gray">
                        <div class="tc-post-overlay-default mb-30 mb-lg-0">
                            <div class="img th-600 img-cover">
                                <img src="/client/assets/img/latest/114.png" alt="">
                                <div class="tags">
                                    <a href="#">features,</a>
                                    <a href="#">sport</a>
                                </div>
                            </div>
                            <div class="content ps-30 pe-30 pb-30">
                                <h2 class="title mb-20">
                                    <a href="page-single-post-creative.html">2022 NFL Craf predict: Top 4
                                        Quarterbacks selected</a>
                                </h2>
                                <div class="text">
                                    Its first decline in subscribers since 2011 triggered a $54 billion stock value
                                    loss and raised questions [...]
                                </div>
                                <div class="meta-bot lh-1 mt-40">
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
                    <div class="col-lg-6">
                        <div class="tc-post-overlay-default">
                            <div class="img th-600 img-cover">
                                <img src="/client/assets/img/latest/116.png" alt="">
                                <div class="tags">
                                    <a href="#">features,</a>
                                    <a href="#">sport</a>
                                </div>
                            </div>
                            <div class="content ps-30 pe-30 pb-30">
                                <h2 class="title mb-20">
                                    <a href="page-single-post-features.html">The Mavericks are in a lose-lose
                                        situation with Jalen Brunson</a>
                                </h2>
                                <div class="text">
                                    Its first decline in subscribers since 2011 triggered a $54 billion stock value
                                    loss and raised questions [...]
                                </div>
                                <div class="meta-bot lh-1 mt-40">
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
        </div>
    </section>
    <!-- ====== end features posts ====== -->

    <!-- ====== start sub category====== -->
    <section class="tc-popular-posts-blog">
        <div class="container">
            <div class="content pt-50 pb-50 border-1 border-bottom brd-gray">
                <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html"> more latest news </a> <i class="la la-angle-right ms-1"></i>
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
            
            <div class="content-widgets pt-50 pb-50">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="info">
                            <h1>Lastest</h1>
                        </div>
                        
                        <div class="tc-post-list-style3">
                            <div class="items">
                                <div class="item mt-30">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="img th-230 img-cover overflow-hidden">
                                                <img src="/client/assets/img/latest/146.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="content mt-20 mt-lg-0">
                                                <a href="#"
                                                    class="color-999 fsz-13px text-uppercase mb-10">sport</a>
                                                <h4 class="title fw-bold">
                                                    <a href="page-single-post-features.html" class="hover-underline">
                                                        Hall of Famer Hugh McElhenny dies at 93
                                                    </a>
                                                </h4>
                                                <div class="text color-666 mt-20">
                                                    Stay focused and remember we design the best WordPress News and
                                                    Magazine Themes [...]
                                                </div>
                                                <div class="meta-bot fsz-13px color-666">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Aug 21,
                                                                2023</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by <span
                                                                    class="color-000">Logan</span> </a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 0
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-30 border-top">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="img th-230 img-cover overflow-hidden">
                                                <img src="/client/assets/img/latest/147.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="content mt-20 mt-lg-0">
                                                <a href="#"
                                                    class="color-999 fsz-13px text-uppercase mb-10">sport</a>
                                                <h4 class="title fw-bold">
                                                    <a href="page-single-post-features.html" class="hover-underline">
                                                        Sainz qualifies on pole for British Grand Prix
                                                    </a>
                                                </h4>
                                                <div class="text color-666 mt-20">
                                                    Stay focused and remember we design the best WordPress News and
                                                    Magazine Themes [...]
                                                </div>
                                                <div class="meta-bot fsz-13px color-666">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Aug 21,
                                                                2023</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by <span
                                                                    class="color-000">Logan</span> </a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 0
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="img th-230 img-cover overflow-hidden">
                                                <img src="/client/assets/img/latest/148.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="content mt-20 mt-lg-0">
                                                <a href="#"
                                                    class="color-999 fsz-13px text-uppercase mb-10">sport</a>
                                                <h4 class="title fw-bold">
                                                    <a href="page-single-post-creative.html" class="hover-underline">
                                                        Wickens caps week with another win and birth of his son
                                                    </a>
                                                </h4>
                                                <div class="text color-666 mt-20">
                                                    Stay focused and remember we design the best WordPress News and
                                                    Magazine Themes [...]
                                                </div>
                                                <div class="meta-bot fsz-13px color-666">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Aug 21,
                                                                2023</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by <span
                                                                    class="color-000">Logan</span> </a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 0
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-0">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="img th-230 img-cover overflow-hidden">
                                                <img src="/client/assets/img/latest/149.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="content mt-20 mt-lg-0">
                                                <a href="#"
                                                    class="color-999 fsz-13px text-uppercase mb-10">sport</a>
                                                <h4 class="title fw-bold">
                                                    <a href="page-single-post-features.html" class="hover-underline">
                                                        Viktor Hovland's clubs, luggage were lost ahead of Scottish
                                                        Open
                                                    </a>
                                                </h4>
                                                <div class="text color-666 mt-20">
                                                    Stay focused and remember we design the best WordPress News and
                                                    Magazine Themes [...]
                                                </div>
                                                <div class="meta-bot fsz-13px color-666">
                                                    <ul class="d-flex">
                                                        <li class="date me-5">
                                                            <a href="#"><i class="la la-calendar me-2"></i> Aug 21,
                                                                2023</a>
                                                        </li>
                                                        <li class="author me-5">
                                                            <a href="#"><i class="la la-user me-2"></i> by <span
                                                                    class="color-000">Logan</span> </a>
                                                        </li>
                                                        <li class="comment">
                                                            <a href="#"><i class="la la-comment me-2"></i> 0
                                                                Comments</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination style-1 color-main justify-content-center mt-60">
                            <a href="#" class="active">
                                <span>1</span>
                            </a>
                            <a href="#">
                                <span>2</span>
                            </a>
                            <a href="#">
                                <span>3</span>
                            </a>
                            <a href="#">
                                <span>4</span>
                            </a>
                            <a href="#">
                                <span>...</span>
                            </a>
                            <a href="#">
                                <span>20</span>
                            </a>
                            <a href="#">
                                <span class="text text-uppercase">next <i class="la la-angle-right"></i> </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widgets-sticky mt-5 mt-lg-0">
                            <p class="color-000 text-uppercase mb-30"> Stay Connected </p>
                            <!-- widget-social -->
                            <div class="tc-widget-social-style5 mb-40">
                                <a href="#" class="social-card">
                                    <div class="icon facebook-icon">
                                        <i class="lab la-facebook-f"></i>
                                    </div>
                                    <div class="cont">
                                        <strong> <b class="counter">575,5</b>K</strong>
                                        <span>Followers</span>
                                    </div>
                                </a>
                                <a href="#" class="social-card">
                                    <div class="icon twitter-icon">
                                        <i class="lab la-twitter"></i>
                                    </div>
                                    <div class="cont">
                                        <strong> <b class="counter">215,5</b>K</strong>
                                        <span>Followers</span>
                                    </div>
                                </a>
                                <a href="#" class="social-card">
                                    <div class="icon insta-icon">
                                        <i class="lab la-instagram"></i>
                                    </div>
                                    <div class="cont">
                                        <strong> <b class="counter">98,5</b>K</strong>
                                        <span>Followers</span>
                                    </div>
                                </a>
                                <a href="#" class="social-card border-0 pb-0">
                                    <div class="icon youtube-icon">
                                        <i class="lab la-youtube"></i>
                                    </div>
                                    <div class="cont">
                                        <strong> <b class="counter">24,2</b>K</strong>
                                        <span>Subscriber</span>
                                    </div>
                                </a>
                            </div>

                            <!-- widget-trends -->
                            <div class="tc-trending-news-style5 border border-1 brd-gray mb-40">
                                <p class="color-000 text-uppercase p-15">trending posts</p>
                                <div class="tc-post-list-style1">
                                    <div class="tc-post-overlay-default">
                                        <div class="img th-200 img-cover">
                                            <img src="/client/assets/img/trend/4.png" alt="">
                                        </div>
                                        <div class="content ps-20 pe-20 pb-20 text-white">
                                            <a href="#" class="text-uppercase fsz-13px mb-1">lifestyle</a>
                                            <h4 class="title">
                                                <a href="page-single-post-creative.html">The story about Hoki</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="items px-4 py-2">
                                        <div class="item">
                                            <h2 class="num">
                                                2
                                            </h2>
                                            <div class="content">
                                                <a href="#" class="color-999 fsz-12px text-uppercase mb-1">sport</a>
                                                <h6 class="title fsz-16px fw-bold ltspc--1 hover-main">
                                                    <a href="page-single-post-creative.html" class="">The MLB lockout explained in 5 minutes</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <h2 class="num">
                                                3
                                            </h2>
                                            <div class="content">
                                                <a href="#" class="color-999 fsz-12px text-uppercase mb-1">sport</a>
                                                <h6 class="title fsz-16px fw-bold ltspc--1 hover-main">
                                                    <a href="page-single-post-creative.html" class="">“Now or Never” Falcons for the 2022
                                                        season</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <h2 class="num">
                                                4
                                            </h2>
                                            <div class="content">
                                                <a href="#" class="color-999 fsz-12px text-uppercase mb-1">sport</a>
                                                <h6 class="title fsz-16px fw-bold ltspc--1 hover-main">
                                                    <a href="page-single-post-creative.html" class="">MLB become 1st fashion brands in US</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <a href="#" class="fsz-13px text-capitalize color-666 mt-30 mb-20">
                                            <span>See all posts</span>
                                            <i class="las la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- widget-sponsored -->
                            <div class="tc-widget-sponsored-style1">
                                <div class="img img-cover">
                                    <img src="/client/assets/img/sponsored/1.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="spon-cat text-uppercase mt-20"> Sponsored Content </div>
                                    <h6 class="title">
                                        <a href="#">
                                            Dile &amp; Kamine Soap from pure natura 100%
                                        </a>
                                    </h6>
                                    <a href="#">
                                        <small>dileandkamina.com <i
                                                class="las la-external-link-square-alt ms-2"></i></small>
                                    </a>
                                </div>
                            </div>

                            <!-- widget tags -->
                            <div class="tc-widget-tags-style5 mb-40">
                                <p class="color-000 text-uppercase mb-30"> Hot Tags Today </p>
                                <div class="tags-content">
                                    <a href="#">Covid-19</a>
                                    <a href="#">Bitcoin</a>
                                    <a href="#">NFT</a>
                                    <a href="#">Elon Musk</a>
                                    <a href="#">Google Cloud</a>
                                    <a href="#">Crypto</a>
                                    <a href="#">Marketplace</a>
                                    <a href="#">Game Consoles</a>
                                    <a href="#">Robotics</a>
                                    <a href="#">Hackers</a>
                                </div>
                            </div>
                            <!-- end widget tags -->

                            <!-- widget-adbox -->
                            <div class="tc-widget-adbox-style1">
                                <a href="#" class="img">
                                    <img src="/client/assets/img/banner12.png" alt="" class="">
                                </a>
                            </div>

                            <!-- widget-survey -->
                            <div class="tc-widget-survey-style1 mb-40">
                                <p class="color-000 text-uppercase mb-20 ltspc-1"> quick survey </p>
                                <div class="ques-title lh-4">
                                    How was your experience on Newzin?
                                </div>
                                <div class="ansr-content">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quesCheck"
                                            id="quesCheck1">
                                        <label class="form-check-label" for="quesCheck1">
                                            Awesome, I’m satisfied!
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quesCheck"
                                            id="quesCheck2">
                                        <label class="form-check-label" for="quesCheck2">
                                            Normal
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quesCheck"
                                            id="quesCheck3">
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

                            <!-- widget webStories -->
                            <div class="tc-widget-webStories-style5">
                                <p class="color-000 text-uppercase mb-30"> google web stories </p>
                                <div class="web-content">
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" class="story-card pt-0"
                                        data-fancybox="">
                                        <div class="img img-cover">
                                            <img src="/client/assets/img/google-stories/1.png" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Kayak stories</h6>
                                        </div>
                                    </a>
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" class="story-card seen"
                                        data-fancybox="">
                                        <div class="img img-cover">
                                            <img src="/client/assets/img/google-stories/2.png" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>6 Tips Successful for Developers</h6>
                                        </div>
                                    </a>
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" class="story-card pb-0 border-0"
                                        data-fancybox="">
                                        <div class="img img-cover">
                                            <img src="/client/assets/img/google-stories/3.png" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>PS Controller</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
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
