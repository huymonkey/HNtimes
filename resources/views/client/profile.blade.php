@extends('client.layouts.master')

@section('home-style')
tc-author-page
@endsection

@section('loading-page')
    <div id="preloader"></div>
@endsection

@push('css')
    <style>
        .info {
            position: relative;
        }

        .btn-edit-profile {
            position: absolute;
            top: -50%;
            right: 0;

        }
    </style>
@endpush

@section('content')

    <!-- ====== start author header ====== -->
    <section class="tc-author-header">
        <div class="container">
            <div class="content">
                <div class="title">
                    <p class="fsz-14px color-fff op-5 mb-2"> Columnist </p>
                    <h2> Logan H. Himer </h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end author header ====== -->


    <!-- ====== start author-details ====== -->
    <section class="tc-author-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="content">
                        <div class="author-img img-cover">
                            <img src="/client/assets/img/team_page/4.jpg" alt="">
                        </div>
                        <div class="info">
                            <button class="btn bg-main text-white d-flex align-items-center d-inline-block py-2 px-3 btn-edit-profile" data-bs-toggle="modal" data-bs-target="#modalEditProfile">
                                <i class="la la-pencil"></i>
                                <p class="ms-2">Edit Profile</p>
                            </button>
                            <p class="color-666 mb-20"> Together happy feelings continue juvenile had off one. Unknown may service subject her letters one bed </p>
                            <p class="color-666 mb-20"> <i class="la la-book"></i> 23 Posts    <span class="mx-3"> | </span>    <i class="la la-comments"></i> 100 Comment </p>
                            <div class="social-links">
                                <a href="#"> <i class="la la-facebook-f"></i> </a>
                                <a href="#"> <i class="la la-twitter"></i> </a>
                                <a href="#"> <i class="la la-behance"></i> </a>
                                <a href="#"> <i class="la la-youtube"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end author-details ====== -->


    <!-- ====== start author-posts ====== -->
    <section class="tc-author-posts pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="posts-side">
                        <p class="color-000 text-uppercase mb-30 ltspc-1"> <a href="page-blog.html">recently added</a> <i class="la la-angle-right ms-1"></i></p>
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
                                                            <a href="#"> totalworks.com <i class="las la-external-link-square-alt ms-2"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/1.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/2.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/3.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/4.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/5.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/6.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/7.jpg" alt="">
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
                                <div class="item pt-30 pb-30 border-1 border-bottom brd-gray">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img th-200 img-cover">
                                                <img src="/client/assets/img/page_author/8.jpg" alt="">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widgets widgets-sticky mt-5 mt-lg-0">
                        <!-- widget-social -->
                        <div class="tc-widget-social-style1">
                            <p class="color-000 text-uppercase mb-30 ltspc-1 lh-2"> stay connected </p>
                            <div class="content">
                                <a href="#" class="social-card">
                                    <div class="icon facebook-icon">
                                        <i class="lab la-facebook-f"></i>
                                    </div>
                                    <h6>1,5M</h6>
                                </a>
                                <a href="#" class="social-card">
                                    <div class="icon twitter-icon">
                                        <i class="lab la-twitter"></i>
                                    </div>
                                    <h6>920K</h6>
                                </a>
                                <a href="#" class="social-card">
                                    <div class="icon insta-icon">
                                        <i class="lab la-instagram"></i>
                                    </div>
                                    <h6>25,7K</h6>
                                </a>
                                <a href="#" class="social-card mb-0">
                                    <div class="icon youtube-icon">
                                        <i class="lab la-youtube"></i>
                                    </div>
                                    <h6>1,5M</h6>
                                </a>
                                <a href="#" class="social-card mb-0">
                                    <div class="icon spotify-icon">
                                        <i class="lab la-spotify"></i>
                                    </div>
                                    <h6>1,5M</h6>
                                </a>
                            </div>
                        </div>
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
    <!-- ====== End author-posts ====== -->
@endsection

@section('modals')
    <div class="modal fade" id="modalEditProfile" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Your Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn bg-main text-white btn-sm" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Saves</button>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush