<!-- ====== custom style ====== -->
<style>
    .head-lang {
        position: relative;
        text-transform: capitalize;
        display: inline-block;
    }

    .head-lang .another-lang-links {
        background-color: white;
        /* background-color: #31294d; */
        border-radius: 10px;
        border: 1px solid #ccc;
        overflow: hidden;
        width: 150px;
        position: absolute;
        top: 120%;
        left: 0;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .head-lang .another-lang-links .lang-link {
        padding: 8px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-size: 12px;
        color: #000
    }

    .head-lang .another-lang-links .lang-link:last-of-type {
        border: 0;
    }

    .head-lang .another-lang-links .lang-link:hover {
        background-color: #d4d4d4;
    }

    .head-lang .lang-link {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
        position: relative;
        z-index: 10;
    }

    .head-lang:hover .another-lang-links {
        opacity: 1;
        visibility: visible;
    }

    /* DARK THEME */

    .dark-theme .head-lang .another-lang-links {
        background-color: #06121a;
        border-radius: 10px;
        border: 1px solid #3a3a3a;
        overflow: hidden;
        width: 150px;
        position: absolute;
        top: 120%;
        left: 0;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    .dark-theme .head-lang .another-lang-links .lang-link {
        padding: 8px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-size: 12px;
        color: #ffffff;
    }

    .dark-theme .head-lang .another-lang-links .lang-link:last-of-type {
        border: 0;
    }

    .dark-theme .head-lang .another-lang-links .lang-link:hover {
        background-color: #070a0c;
    }

    .dark-theme .head-lang:hover .another-lang-links {
        opacity: 1;
        visibility: visible;
    }
</style>

<!-- ====== start top navbar ====== -->
<div class="top-navbar style-1">
    <div class="container p-0">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="date-weather mb-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="item">
                                <div class="icon me-3 pt-1">
                                    <i class="la la-calendar"></i>
                                </div>
                                <div class="inf">
                                    <strong>Monday</strong>
                                    <p>Nov 25, 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item head-lang">
                                <div class="lang-link">
                                    <span class="flag icon-30 rounded-circle overflow-hidden img-cover me-3">
                                        <img src="/client/assets/img/en.svg" alt="">
                                    </span>
                                    <span> English <i class="la la-angle-down"></i> </span>
                                </div>
                                <div class="another-lang-links">
                                    <a href="#" class="lang-link">
                                        <span class="flag icon-20 rounded-circle overflow-hidden img-cover me-3">
                                            <img src="/client/assets/img/vn.svg" alt="">
                                        </span>
                                        <span> Vietnamese </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <a href="/" class="logo-brand d-none d-lg-block">
                    <img src="/client/assets/img/logo_home1_lt.png" alt="">
                </a>
            </div>
            <div class="col-lg-4">
                <div class="sub-darkLight">
                    <div class="row text-end align-items-center">
                        <div class="col-6">
                            <a href="#0" class="text-uppercase fs-6 border-bottom border-1 border-dark subs">
                                <i class="la la-envelope fs-5 me-1"></i>
                                Subscribe
                            </a>
                        </div>
                        <div class="col-6">
                            <div class="darkLight-btn">
                                <span class="icon active" id="light-icon">
                                    <i class="la la-sun"></i>
                                </span>
                                <span class="icon" id="dark-icon">
                                    <i class="la la-moon"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="nav-subs-card">
                        <p class="fsz-16px text-uppercase mb-20 text-dark"> Newsletter </p>
                        <div class="sub-form">
                            <div class="form-group">
                                <span class="icon text-dark">
                                    <i class="la la-envelope"></i>
                                </span>
                                <input type="text" class="form-control text-dark" placeholder="your email">
                                <button>subscribe</button>
                            </div>
                            <p class="mt-3 color-666 fsz-12px fst-italic">By subscribing, you accepted the
                                our <a href="#0" class="color-777 text-decoration-underline fst-normal">Policy</a>
                            </p>
                        </div>
                        <span class="cls text-dark"> <i class="la la-times"></i> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== end top navbar ====== -->

<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-1">
    <div class="container p-0">
        <div class="mob-nav-toggles d-flex align-items-center justify-content-between">
            <button class="navbarList-icon me-lg-5" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button"
                    aria-controls="offcanvasStart">
                <span></span>
                <span></span>
            </button>
            <a href="#" class="logo-brand d-block d-lg-none w-50 my-4">
                <img src="/client/assets/img/logo_home1.png" alt="" class="dark-none">
                <img src="/client/assets/img/logo_home1_lt.png" alt="" class="light-none">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/page" id="navbarDropdown1">
                    Pages
                </a>
                <ul class="dropdownMenu" aria-labelledby="navbarDropdown1">
                    <li><a class="dropdown-item" href="page-about.html">About</a></li>
                    <li><a class="dropdown-item" href="page-team.html">Team</a></li>
                    <li><a class="dropdown-item" href="page-product.html">Product</a></li>
                    <li><a class="dropdown-item" href="page-404.html">404 page</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="page-contact.html">
                    contact
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="page-shop.html">
                    shop
                    <small class="hot">hot</small>
                </a>
            </li>

        </ul>
        <div class="nav-side d-flex align-items-center">
            @auth
                <button class="navbarList-icon text-white" data-bs-toggle="offcanvas" href="#offcanvasEnd"
                        role="button" aria-controls="offcanvasEnd">
                    <i class="la la-user fs-4"></i>
                </button>
            @else
                <a href="{{ route('auth.showFormLogin') }}">
                    Log in
                </a>
            @endauth

            <a href="#" class="icon-link search-btn-style1">
                <i class="la la-search fs-4 sOpen-btn"></i>
                <i class="la la-close fs-4 sClose-btn"></i>
            </a>
        </div>
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">

        </div> --}}
    </div>
</nav>
<!-- ====== end navbar ====== -->

<!-- ====== start nav-search ====== -->
<div class="nav-search-style1">
    <div class="row justify-content-center align-items-center gx-lg-5">
        <div class="col-lg-4">
            <div class="info">
                <h5> you can search by category <br> or news title </h5>
            </div>
        </div>
        <div class="col-lg-6">
            <form class="form">
                <span class="color-777 fst-italic text-capitalize mb-2 fsz-13px">Enter Keyword</span>
                <div class="form-group">
                    <span class="icon">
                        <i class="la la-search"></i>
                    </span>
                    <input type="text" class="form-control text-white" placeholder="Elon Musk ... ">
                    <button type="submit">search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ====== end nav-search ====== -->
