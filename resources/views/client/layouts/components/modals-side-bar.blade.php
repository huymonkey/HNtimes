<!-- ====== start modals ====== -->

<div class="offcanvas offcanvas-start sidebar-popup-style1" tabindex="-1" id="offcanvasStart"
    aria-labelledby="offcanvasStartLabel">
    <div class="offcanvas-header">
        <div class="logo">
            <img src="/client/assets/img/logo_home1.png" alt="" class="dark-none">
            <img src="/client/assets/img/logo_home1_lt.png" alt="" class="light-none">
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mt-4">
        <a href="#" class="color-000 text-uppercase mb-15 ltspc-1"> about us <i
                class="la la-angle-right ms-1"></i>
        </a>
        <div class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem optio tempora quia iure quae.
            Soluta corporis quidem aperiam amet nihil.
        </div>

        <div class="sidebar-categories mt-40">
            <h6 class="color-000 text-uppercase mb-30 ltspc-1"> Categories </h6>
            <a href="#" class="cat-card">
                <div class="img img-cover">
                    <img src="/client/assets/img/bussines/1.png" alt="">
                </div>
                <div class="info">
                    <h5>bussines</h5>
                    <span class="num">12</span>
                </div>
            </a>
            <a href="#" class="cat-card">
                <div class="img img-cover">
                    <img src="/client/assets/img/trend/3.png" alt="">
                </div>
                <div class="info">
                    <h5>technology</h5>
                    <span class="num">14</span>
                </div>
            </a>
            <a href="#" class="cat-card">
                <div class="img img-cover">
                    <img src="/client/assets/img/must_read/3.png" alt="">
                </div>
                <div class="info">
                    <h5>culture</h5>
                    <span class="num">20</span>
                </div>
            </a>
            <a href="#" class="cat-card">
                <div class="img img-cover">
                    <img src="/client/assets/img/videos/1.png" alt="">
                </div>
                <div class="info">
                    <h5>videos</h5>
                    <span class="num">14</span>
                </div>
            </a>
        </div>
        <div class="sidebar-contact-info mt-50">
            <a href="#" class="color-000 text-uppercase mb-20 ltspc-1"> Contact & follow <i
                    class="la la-angle-right ms-1"></i> </a>
            <ul class="m-0">
                <li class="mb-3">
                    <i class="las la-map-marker me-2 color-main fs-5"></i>
                    <a href="https://maps.app.goo.gl/TGC1SkwvhnrZsjxt7" target="_blank">Tan Hoi, Dan Phuong, Ha Noi
                        City, Viet Nam</a>
                </li>
                <li class="mb-3">
                    <i class="las la-envelope me-2 color-main fs-5"></i>
                    <a href="mailto:Newzin@gmail.com">Newzin@gmail.com</a>
                </li>
                <li class="mb-3">
                    <i class="las la-phone-volume me-2 color-main fs-5"></i>
                    <a href="tel:+84123456789">+12 123 456 789</a>
                </li>
            </ul>
            <div class="social-links">
                <a href="#">
                    <i class="la la-twitter"></i>
                </a>
                <a href="#">
                    <i class="la la-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="la la-instagram"></i>
                </a>
                <a href="#">
                    <i class="la la-youtube"></i>
                </a>
                <a href="#">
                    <i class="la la-spotify"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end sidebar-popup-style1" tabindex="-1" id="offcanvasEnd"
    aria-labelledby="offcanvasEndLabel">
    <div class="d-flex justify-content-between border-bottom" style="padding: 0.8rem 1rem;">
        <div>
            @auth
                <p>{{ Auth::user()->email }}</p>
            @else
                <p>No login</p>
            @endauth
        </div>
        <button type="button" class="btn-close text-reset mt-0 data-bs-dismiss=offcanvas" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="border-bottom" style="padding: 0.8rem 1rem;">
        <h2>Good Afternoon</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem optio tempora quia iure quae.
            Soluta corporis quidem aperiam amet nihil.
        </p>

        <a href="#" class="btn bg-main text-white rounded-0 mt-4 w-100">
            <span class="fsz-11px"> Register for columnist </span>
        </a>
    </div>

    <!-- Setting -->
    <h6 class="color-000 ltspc-1 fs-5 mt-4" style="padding: 0.8rem 1rem;"> Settings </h6>
    <div class="border-bottom border-top">
        <a href="#" class="color-000 text-uppercase ltspc-1 d-block py-4" style="padding: 0.8rem 1rem;">
            <div class="d-flex justify-content-between align-items-center">
                <p>Your Account</p>
                <i class="la la-angle-right ms-1"></i>
            </div>
        </a>
    </div>
    <a id="btn-logout" class="btn-link text-dark mt-4 fs-6 fw-bolder" href="#!" style="padding: 0.8rem 1rem;">Logout</a>
    <form action="{{ route('auth.logout') }}" method="POST" id="form-logout">@csrf</form>
</div>

<!-- ====== end modals ====== -->
