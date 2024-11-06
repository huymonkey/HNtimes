@extends('client.layouts.master')

@section('home-style')
tc-blog-page
@endsection

@section('loading-page')
    <div id="preloader"></div>
@endsection

@section('content')

    <!-- ====== start features posts ====== -->
    <section class="features-posts pt-50 pb-50 bg-gray1">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <i>Showing <strong class="mx-1">2 results</strong> for:</i>
                    </div>
                    <div class="col-lg-12">
                        <div class="row align-items-md-end">
                            <div class="col-lg-6">
                                <div class="tc-blog-nav-search py-0">
                                    <form class="search-form fs-3">
                                        <div class="form-group pb-1">
                                            <input type="text">
                                            <button type="submit"> <i class="la la-search"></i> </button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select name="" id="" class="form-select">
                                    <option value="">Sort by Relevance</option>
                                    <option value="">Sort by Oldest</option>
                                    <option value="">Sort by Newest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end features posts ====== -->

    <section class="tc-popular-posts-blog">
        <div class="container">
            <div class="content-widgets pt-50 pb-50">
                <div class="tc-post-list-style3">
                    <div class="items">
                        <div class="item mt-10">
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
                        <div class="item mt-10">
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

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush