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

    <!-- ====== start sub category====== -->
    <section class="tc-popular-posts-blog">
        <div class="container">
            <div class="content-widgets pt-30 pb-50">
                <strong><i class="fs-5">30 results</i></strong>
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
        </div>
    </section>
    <!-- ====== end sub category====== -->

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush