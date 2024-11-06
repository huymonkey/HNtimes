@extends('client.layouts.master-header-feature')

@section('video-content')
    <!-- ====== start video content ====== -->
    <div class="tc-video-content text-white">
        <div class="play-btn-content">
            <a href="https://youtu.be/pGbIOC83-So?t=21" data-fancybox="" class="play-cont">
                <i class="ion-play me-3"></i>
                <span>
                    play <br> video
                </span>
            </a>
        </div>
        <div class="info-content">
            <p class="sub-title">featured, video</p>
            <h3 class="title"> Amazing View! Catch the sunrise <br> in high moutain </h3>
            <p class="mt-20">Stay focused and remember we design the best WordPress News</p>
            <div class="meta-btm pt-30 pb-30 border-top border-1 brd-light text-white mt-40">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="author-side fsz-13px">
                            <div class="author me-40 d-flex d-lg-inline-flex align-items-center">
                                <span class="icon-30 rounded-circle overflow-hidden me-10">
                                    <img src="/client/assets/img/colums/2.png" alt="">
                                </span>
                                <span>By</span>
                                <a href="#" class="text-decoration-underline ms-1">Luis Diaz</a>
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
                        <div class="links-side fsz-13px">
                            <a href="#" class="me-40"><i class="la la-link me-1"></i> Copy Link</a>
                            <a href="#" class="me-40"><i class="la la-bookmark me-1"></i> Bookmark</a>
                            <a href="#"><i class="la la-exclamation-triangle me-1"></i> Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== end video content ====== -->
@endsection

@section('content')
    <!-- ====== start features posts ====== -->
    <section class="tc-main-post-style2 pt-50">
        <div class="container">
            <div class="main-content-side">
                <!-- ====== start audio ====== -->
                <div class="audio-content w-50">
                    <audio controls class="audio" >
                        <source src="/client/assets/img/audio1.mp3" type="audio/mpeg">
                    </audio>
                    <span class="title">Listen to this article!</span>
                </div>
                <h4 class="sub-title mt-40">
                    This intimate, fearless account of the <span class="color-main">Canadian</span> author’s relationship with her traumatised, free-thinking mother leaves you rooting for both of them.
                </h4>
                <div class="tc-subscribe-style9 mt-50">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <div class="sub-info">
                                <h5 class="mb-10">Our Newsletter</h5>
                                <p class="fsz-13px color-666">Subscribe our newsletter to get latest news &amp; promotion</p>
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
                <!-- ====== start sharing ====== -->
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
                <!-- ====== start author-info ====== -->
                <div class="tc-author-info-style1">
                    <div class="tc-author-card">
                        <div class="content mt-50 p-40 d-block d-lg-flex bg-gray1">
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
                
                <!-- ====== start comments ====== -->
                <div class="tc-single-post-comments">
                    <div class="comments-content pt-50 pb-50 border-1 border-top border-dark">
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
                                            <textarea class="form-control rounded-0 fsz-12px p-3" name="message" rows="6" placeholder="Write your comment here"></textarea>
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
    <!-- ====== end features posts ====== -->
@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush