@extends('client.layouts.master')

@section('home-style')
tc-contact-page
@endsection

@section('loading-page')
    <div id="preloader"></div>
@endsection

@section('content')
    
    <!-- ====== start features posts ====== -->
    <section class="tc-contact-info pt-50 pb-50">
        <div class="container">
            <div class="content">
                <p class="text-uppercase mb-15">contact us</p>
                <div class="row">
                    <div class="col-lg-5">
                        <h2> We’d love to hear from you </h2>
                        <div class="social-icons mt-60">
                            <a href="#"> <i class="la la-twitter"></i> </a>
                            <a href="#"> <i class="la la-facebook-f"></i> </a>
                            <a href="#"> <i class="la la-instagram"></i> </a>
                            <a href="#"> <i class="la la-youtube"></i> </a>
                            <a href="#"> <i class="la la-spotify"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-30 mt-lg-0">
                        <h5 class="sub-title fsz-24px mb-20 fw-bold"> Headquater </h5>
                        <ul>
                            <li class="mb-15"><a href="https://maps.app.goo.gl/TGC1SkwvhnrZsjxt7" target="_blank">Tan Hoi, Dan Phuong, Ha Noi City, Viet Nam</a></li>
                            <li class="mb-15"><a href="#">(+84) 123 456 789</a></li>
                            <li class="mb-15"><a href="mailto:hello@newzin.com">hello@newzin.com</a></li>
                            <li class="mb-15"><a href="mailto:support@newzin.com">support@newzin.com</a></li>
                            <li class="mb-15"><a href="mailto:career@newzin.com">career@newzin.com</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-3 mt-30 mt-lg-0">
                        <h5 class="sub-title fsz-24px mb-20 fw-bold"> Office Branch </h5>
                        <ul>
                            <li class="mb-15"><a href="#">925 Bald Hill St, Asheville, NC 28803</a></li>
                            <li class="mb-15"><a href="#">(+005) 800 500 1234</a></li>
                            <li class="mb-15"><a href="#">contact@newzin.com</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end features posts ====== -->

    <!-- ====== start contact image ====== -->
    <section class="tc-contact-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img img-cover th-800">
                        <img src="/client/assets/img/latest/156.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img img-cover th-800">
                        <img src="/client/assets/img/latest/156.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img img-cover th-800">
                        <img src="/client/assets/img/latest/156.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>
        <!-- arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- ====== end contact image ====== -->

    <!-- ====== start contact form ====== -->
    <section class="tc-contact-form pt-80 pb-80">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 border-1 border-end brd-gray">
                    <div class="contact-form-card">
                        <h4 class="fsz-24px text-capitalize mb-10">Drop Us A Line</h4>
                        <p class="fsz-13px mb-30">Required fields are marked <span class="text-danger">*</span> </p>
                        <form class="form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-15">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject (Optional) ">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-15">
                                        <textarea rows="6" name="message" class="form-control" placeholder="Write your message here"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-15">
                                        <input type="text" name="name" class="form-control" placeholder="Name * ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-15">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email * ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mt-20">
                                <input class="form-check-input" name="checkbox" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label fsz-12px" for="flexCheckDefault">
                                    Save my name & email in this browser for next time i comment
                                </label>
                            </div>
                            <button type="submit" class="btn bg-main text-white rounded-0 mt-30">
                                <span class="fsz-11px">Send Message </span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-40 mt-lg-0">
                    <h4 class="fsz-24px text-capitalize mb-30">Find us on Google Map</h4>
                    <div class="map filter-gray">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14889.632201577382!2d105.70061005!3d21.09629205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e8aff8546f%3A0xfa4cad74d9887ffe!2zVMOibiBI4buZaSwgxJBhbiBQaMaw4bujbmcsIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1727317901723!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end contact form ====== -->

@endsection

@push('js_library')
    <script src="/client/assets/js/lib/pace.js"></script>
@endpush