@extends('client.layouts.master')

@section('loading-page')
    <div id="preloader"></div>
@endsection

@push('css')
    <style>
        .audio-content {
            position: relative;
            display: inline-block;
        }

        .audio-content .title {
            position: absolute;
            top: 0;
            right: 0;
            padding: 16px 30px;
            border-radius: 30px;
            background-color: #f1f3f4;
        }

        .dark-theme .audio-content .title {
            color: #000;
        }
    </style>
@endpush

@section('content')
    
    <!-- ====== start tc-main-post-style1 ====== -->
    <section class="tc-main-post-style1 pb-60">
        <div class="container">
            <div class="tc-main-post-title pt-40 pb-40">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-15">
                            <a href="" class="text-uppercase">Sport</a>
                            / 
                            <a href="" class="text-uppercase">Football</a>
                        </div>

                        <h2 class="title">Manoah dominates, closes on Blue Jays history</h2>
                    </div>
                </div>
            </div>
            <div class="meta-nav pt-30 pb-30 border-top border-1 brd-gray">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="author-side color-666 fsz-13px">
                            <div class="author me-40 d-flex d-lg-inline-flex align-items-center">
                                <span class="icon-30 rounded-circle overflow-hidden me-10">
                                    <img src="/client/assets/img/colums.png" alt="">
                                </span>
                                <span>By</span>
                                <a href="#" class="text-decoration-underline text-primary ms-1">Conor Bradley</a>
                            </div>
                            <span class="me-40">
                                <a href="#"><i class="la la-calendar me-1"></i> Dec 14, 2022</a>
                            </span>
                            <span class="">
                                <a href="#"><i class="la la-comment me-1"></i> 55 Comments</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="links-side color-000 fsz-13px">
                            <a href="#" class="me-40"><i class="la la-link me-1"></i> Copy Link</a>
                            <a href="#" class="me-40"><i class="la la-bookmark me-1"></i> Bookmark</a>
                            <a href="#"><i class="la la-exclamation-triangle me-1"></i> Report</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======= Image ======= -->
            <div class="tc-main-post-img img-cover">
                <img src="/client/assets/img/main_post.jpg" alt="">
            </div>

            <!-- ======= Video Upload ======= -->
            <!-- <div class="video-content">
                <video width="100%" height="100%" controls="">
                    <source src="/client/assets/img/video.mp4">
                </video>
            </div> -->

            <!-- ======= Video Link ======= -->
            <!-- <div class="video-content">
                <iframe
                    width="100%"
                    height="650px"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    src="https://www.youtube.com/embed/jfKfPfyJRdk?si=EQBn1eBrI0JNNcKD"
                >
                </iframe>
            </div> -->

            <!-- ====== start audio ====== -->
            <div class="audio-content w-50 mt-5">
                <audio controls class="audio" >
                    <source src="/client/assets/img/audio1.mp3" type="audio/mpeg">
                </audio>
                <span class="title">Listen to this article!</span>
            </div>

            <!-- ======= Aritcle ======= -->
            <div class="tc-main-post-content color-000 pt-50">

                <!-- Description Article -->
                <h4 class="sub-title py-30">
                    This intimate, fearless account of the <span class="color-main">Canadian</span> author’s relationship with her traumatised, free-thinking mother leaves you rooting for both of them.
                </h4>

                <!-- Content Article -->
                <div class="mt-5">
                    12312312
                </div>

            </div>
        </div>
    </section>
    <!-- ====== end tc-main-post-style ====== -->

    <!-- ====== start end content ====== -->
    <section class="tc-main-post-style1 pt-60 pb-60">
        <div class="container">
            <div class="tc-main-post-content">
                <div class="tc-subscribe-style9 mt-50">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="sub-info">
                                <h5 class="mb-10">Our Newsletter</h5>
                                <p class="fsz-13px color-666">Subscribe our newsletter to get latest news & promotion</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sub-form mt-4 mt-lg-0">
                                <div class="form-group">
                                    <span class="icon">
                                        <i class="la la-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Enter your email">
                                    <button>subscribe</button>
                                </div>
                                <p class="mt-2 color-666 fsz-13px fst-italic">By subscribing, you accepted the our <a href="#" class="text-decoration-underline fst-normal color-000">Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btm-share-post mt-50">
                <div class="row items">
                    <div class="col-lg-6">
                        <div class="btm-tags mb-4 mb-lg-0">
                            <a href="#" class="mb-1">wordpress</a>
                            <a href="#" class="mb-1">theme</a>
                            <a href="#" class="mb-1">sports</a>
                            <a href="#" class="mb-1">magazine</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="btm-sharing d-lg-flex align-items-lg-center justify-content-lg-end">
                            <p class="text-capitalize me-20 mb-2 mb-lg-0">Share</p>
                            <div class="share-icons">
                                <a href="#"> <i class="la la-twitter"></i> </a>
                                <a href="#"> <i class="la la-facebook-f"></i> </a>
                                <a href="#"> <i class="la la-instagram"></i> </a>
                                <a href="#"> <i class="la la-youtube"></i> </a>
                                <a href="#"> <i class="la la-spotify"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end end content ====== -->

    <!-- ====== start author info ====== -->
    <section class="tc-author-info-style1 pb-60">
        <div class="container">
            <div class="tc-author-card border-1 border-top brd-gray">
                <div class="content mt-50 p-50 d-block d-lg-flex bg-gray1">
                    <div class="img img-cover icon-85 rounded-circle overflow-hidden flex-shrink-0 me-30">
                        <img src="/client/assets/img/colums.png" alt="">
                    </div>
                    <div class="info">
                        <h5 class="title fsz-24px fw-bold">Conor Bradley</h5>
                        <small class="fsz-12px color-main text-uppercase">nba, nfl editor</small>
                        <div class="text fsz-15px color-666 mt-20">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde. Lorem ispum dolor sit amet prodigues ametalia
                        </div>
                        <div class="social-links mt-20 fsz-19px">
                            <a href="#" class="me-15"><i class="la la-twitter"></i></a>
                            <a href="#" class="me-15"><i class="la la-facebook-f"></i></a>
                            <a href="#" class="me-15"><i class="la la-instagram"></i></a>
                            <a href="#"><i class="la la-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end author info ====== -->

    <!-- ====== start comments ====== -->
    <section class="tc-single-post-comments">
        <div class="container">
            <div class="comments-content pt-50 pb-50 border-1 border-top border-dark">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="content">
                            <div class="comments-filter">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <p class="text-uppercase">3 comments</p>
                                    </div>
                                    <div class="col-8 text-end">
                                        <div class="from-group">
                                            <label for="">Sort by : </label>
                                            <select name="" id="" class="form-select">
                                                <option value="">Most liked</option>
                                                <option value="">Most views</option>
                                                <option value="">Most rated</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-cards">
                                <div class="comment-replay-cont border-bottom border-1 brd-gray pb-40 pt-40">
                                    <div class="d-flex comment-cont">
                                        <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                            <img src="/client/assets/img/colums/1.png" alt="">
                                        </div>
                                        <div class="inf w-100">
                                            <div class="title d-flex justify-content-between">
                                                <h6 class="fw-bold fsz-14px">David Bowie</h6>
                                                <span class="time fsz-12px text-uppercase color-999">
                                                    3 hours ago
                                                </span>
                                            </div>
                                            <div class="text color-666 fsz-12px mt-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume nusaate staman utra phone limo sumeria                                            
                                            </div>
                                            <a href="#" class="butn border border-1 mt-20 py-2 px-3">
                                                <span class="fsz-11px"> replay </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex comment-replay ps-5 mt-30 ms-4">
                                        <div class="icon-40 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                            <img src="/client/assets/img/colums/2.png" alt="">
                                        </div>
                                        <div class="inf w-100">
                                            <div class="title d-flex justify-content-between">
                                                <h6 class="fw-bold fsz-14px">Logan Cee</h6>
                                                <span class="time fsz-12px text-uppercase color-999">
                                                    2 dayes ago
                                                </span>
                                            </div>
                                            <div class="text color-666 fsz-12px mt-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume nusaate staman utra phone limo sumeria                                            
                                            </div>
                                            <a href="#" class="butn border border-1 mt-20 py-2 px-3">
                                                <span class="fsz-11px"> replay </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-replay-cont pb-40 pt-40 border-bottom border-1 brd-gray">
                                    <div class="d-flex comment-cont">
                                        <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                            <img src="/client/assets/img/colums/3.png" alt="">
                                        </div>
                                        <div class="inf w-100">
                                            <div class="title d-flex justify-content-between">
                                                <h6 class="fw-bold fsz-14px">Luis Diaz</h6>
                                                <span class="time fsz-12px text-uppercase color-999">
                                                    December 25, 2022
                                                </span>
                                            </div>
                                            <div class="text color-000 fsz-12px mt-10">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt                                             
                                            </div>
                                            <a href="#" class="butn border border-1 mt-20 py-2 px-3">
                                                <span class="fsz-11px"> replay </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="comment-form d-block pt-30">
                                <p class="text-uppercase mb-30">Leave A Comment</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-30">
                                            <textarea class="form-control rounded-0 fsz-12px p-3" name="comment" rows="6" placeholder="Write your comment here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4 mb-lg-0">
                                            <input type="text" class="form-control fsz-12px rounded-0 p-3" name="name" placeholder="Your Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control fsz-12px rounded-0 p-3" name="email" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check mt-20">
                                            <input class="form-check-input" name="checkbox" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label fsz-12px" for="flexCheckDefault">
                                                Save my name & email in this browser for next time I comment
                                            </label>
                                            </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn bg-main text-white rounded-0 mt-40">
                                            <span class="fsz-11px">Submit Comment </span>
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end comments ====== -->

    <!-- ====== start another posts ====== -->
    <section class="another-news">
        <div class="container">
            <div class="content pt-50 pb-50 border-1 border-top border-dark">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <a href="page-blog.html" class="color-000 text-uppercase mb-30 ltspc-1"> more from this author <i class="la la-angle-right ms-1"></i> </a>
                        <div class="row">
                            <div class="col-12 border-1 border-end brd-gray">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/another_news/1.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
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
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
                                                        <h5 class="title ltspc--1">
                                                            How’s Ameican Football Ball created out?
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/another_news/3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
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

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <a href="page-blog.html" class="color-000 text-uppercase mb-30 ltspc-1"> related posts <i class="la la-angle-right ms-1"></i> </a>
                        <div class="row">
                            <div class="col-12 border-1 border-end brd-gray">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/latest/124.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
                                                    PGA Tour Highlights: Travelers Championship Round 1
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
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/latest/123.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
                                                        <h5 class="title ltspc--1">
                                                            Hamilton, Russell question safety of bouncing F1 cars
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/latest/130.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">sport</small>
                                                        <h5 class="title ltspc--1">
                                                            14th Best linebacker of Bill
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
                        <a href="page-blog.html" class="color-000 text-uppercase mb-30 ltspc-1"> recommended <i class="la la-angle-right ms-1"></i> </a>
                        <div class="row">
                            <div class="col-12">
                                <div class="tc-post-grid-default">
                                    <div class="item">
                                        <div class="img img-cover th-250">
                                            <img src="/client/assets/img/latest/137.png" alt="">
                                        </div>
                                        <div class="content pt-20">
                                            <a href="#" class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</a>
                                            <h4 class="title ltspc--1 mb-10">
                                                <a href="page-single-post-creative.html">
                                                    Sainz qualifies on pole for British Grand Prix
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
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 mt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/latest/132.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</small>
                                                        <h5 class="title ltspc--1">
                                                            Hall of Famer Hugh McElhenny dies at 93
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="page-single-post-creative.html" class="item d-block border-1 border-top border-bottom-0 brd-gray pt-15 brd-gray">
                                            <div class="row gx-3 align-items-center">
                                                <div class="col-4">
                                                    <div class="img th-70 img-cover">
                                                        <img src="/client/assets/img/latest/131.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <small class="news-cat color-999 fsz-13px text-uppercase mb-10">Travel</small>
                                                        <h5 class="title ltspc--1">
                                                            PFF: Bills should consider free agent CB Xavier Rhodes
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
    <!-- ====== start another posts ====== -->

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush