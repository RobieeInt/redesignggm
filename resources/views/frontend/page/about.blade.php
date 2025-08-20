@extends('frontend.layouts.base')

@section('title', 'About Us')

@section('content')
    <!-- start page title -->
    <section class="page-title-center-alignment cover-background top-space-padding "
        style="background-image: url('{{ asset('redesign/images/hero1.webp') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px"
                        style="color: white">About Us</h1>
                </div>
                <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                    {{-- <ul>
                    <li style="color: white;"><a href="{{ route('landing-page') }}">Home</a></li>
                    <li style="color: white;">Latest blog</li>
                </ul> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pb-3 position-relative overflow-hidden">
        <div class="container">
            <div class="row mb-4 align-items-center text-center text-sm-start">
                <div class="col-lg-2 col-md-3 col-sm-4 xs-mb-20px"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div
                        class="position-relative d-md-flex flex-column align-items-center justify-content-center w-165px h-165px border-radius-100">
                        <img src="{{ asset('redesign/images/category1.webp') }}"
                            class="hide-on-mobile position-absolute top-50 translate-middle-y" alt="">
                        {{-- <img src="{{ asset('redesign/images/category1.webp') }}" class="animation-rotation" alt=""> --}}
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-8"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="text-uppercase fs-13 ls-2px fw-600 mb-5px d-block">Tentang Kami</span>
                    <h3 class="text-dark-gray alt-font fw-700 mb-0">Dapur Gemilang – Spesialis Kitchen Set & Custom
                        Aluminium Furniture</h3>
                </div>
                <div class="col-lg-5 md-mt-30px last-paragraph-no-margin"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <p><strong>Dapur Gemilang</strong> menghadirkan solusi <em>custom furniture berbasis aluminium</em>
                        yang elegan, tahan lama, dan sesuai dengan kebutuhan Anda.
                        Kami berfokus pada <strong>kitchen set aluminium</strong>,
                        serta berbagai furniture lain seperti <em>laundry room cabinet, TV cabinet, wardrobe cabinet, under
                            stairs cabinet</em>,
                        hingga <strong>custom cabinet</strong> sesuai desain impian Anda.</p>
                    <p>Kami percaya bahwa setiap ruang memiliki karakter unik,
                        sehingga setiap karya kami dirancang dengan detail dan presisi tinggi
                        untuk menghadirkan kenyamanan, fungsi, dan estetika terbaik bagi hunian Anda.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3 text-center p-4 md-p-15px" data-bottom-top="transform: translateY(-80px)"
                    data-top-bottom="transform: translateY(80px)">
                    <img class="w-100" src="{{ asset('redesign/images/category2.webp') }}" alt="">
                </div>
                <div class="col-md-6 text-center" data-bottom-top="transform: translateY(80px)"
                    data-top-bottom="transform: translateY(-80px)">
                    <img class="w-100" src="{{ asset('redesign/images/hero1.webp') }}" alt="">
                </div>
                <div class="col-md-3 text-center p-4 md-p-15px" data-bottom-top="transform: translateY(-80px)"
                    data-top-bottom="transform: translateY(80px)">
                    <img class="w-100" src="{{ asset('redesign/images/category3.webp') }}" alt="">
                </div>
            </div>
        </div>
        <!-- start marquees -->
        <div
            class="marquees-text alt-font fw-700 fs-200 lg-fs-150 md-fs-130 ls-minus-5px text-base-color text-nowrap position-absolute top-50 lg-mt-5 md-mt-15 sm-mt-22 right-100px text-center z-index-minus-1 d-none d-md-inline-block">
            custom aluminium furniture</div>
        <!-- end marquees -->
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row row-cols-auto row-cols-xl-4 row-cols-sm-2 lg-ps-10 lg-pe-10 md-ps-7 md-pe-7 sm-ps-0 sm-pe-0 position-relative mb-6 md-mb-8 lg-mt-20px"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <!-- start features box item -->
                <div class="col align-self-start xs-mb-30px">
                    <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                        <div class="feature-box-icon position-absolute left-0px top-0px">
                            <h1
                                class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">
                                01
                            </h1>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                            <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px">Awal Berdiri</span>
                            <p>Dapur Gemilang hadir dengan visi menghadirkan kitchen set berkualitas tinggi berbahan
                                aluminium yang kuat, modern, dan elegan.</p>
                            <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col align-self-end mt-30px lg-mt-0">
                    <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                        <div class="feature-box-icon position-absolute left-0px top-0px">
                            <h1
                                class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">
                                02
                            </h1>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                            <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px">Ekspansi Produk</span>
                            <p>Tidak hanya kitchen set, kami juga menghadirkan berbagai custom furniture seperti wardrobe,
                                TV cabinet, laundry room cabinet, hingga under stairs cabinet.</p>
                            <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col align-self-start lg-mt-30px">
                    <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                        <div class="feature-box-icon position-absolute left-0px top-0px">
                            <h1
                                class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">
                                03
                            </h1>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                            <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px">Inovasi & Kustomisasi</span>
                            <p>Kami fokus pada layanan custom, menyesuaikan kebutuhan unik setiap ruangan agar lebih
                                fungsional sekaligus estetik.</p>
                            <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col align-self-end lg-mt-30px">
                    <div class="feature-box text-start ps-30px pe-30px sm-ps-20px sm-pe-20px">
                        <div class="feature-box-icon position-absolute left-0px top-0px">
                            <h1
                                class="alt-font fs-90 text-outline text-outline-width-1px text-outline-color-dark-gray fw-800 ls-minus-1px opacity-2 mb-0">
                                04
                            </h1>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin pt-30 lg-pt-22 xs-pt-40px">
                            <span class="text-dark-gray fs-18 d-inline-block fw-600 mb-5px">Dipercaya Ribuan Klien</span>
                            <p>Hingga kini, Dapur Gemilang dipercaya oleh ribuan pelanggan dengan rating kepuasan yang
                                tinggi.</p>
                            <span class="w-60px h-2px bg-dark-gray mt-20px d-inline-block"></span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>

            <div class="row justify-content-center xs-mt-12"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-xl-9 col-lg-10">
                    <div
                        class="row align-items-center justify-content-center border border-color-extra-medium-gray border-radius-100px sm-border-radius-6px sm-mx-0">

                        <div
                            class="col-md-6 p-20px border-end border-color-transparent-dark-very-light text-center ls-minus-05px align-items-center d-flex justify-content-center sm-border-end-0 sm-pb-0 sm-mb-10px">
                            <i class="bi bi-emoji-smile text-dark-gray icon-extra-medium me-10px"></i>
                            <span class="text-dark-gray fs-18 text-start fw-500 xs-lh-28">Bergabunglah dengan <span
                                    class="fw-800">10.000+</span> pelanggan yang puas.</span>
                        </div>

                        <div
                            class="col-md-6 p-20px sm-pt-0 text-center ls-minus-05px align-items-center d-flex justify-content-center">
                            <i class="bi bi-star text-dark-gray icon-extra-medium me-10px"></i>
                            <span class="text-dark-gray fs-18 text-start fw-500">Rating <span class="fw-800">4.9/5</span>
                                dari <span class="fw-800">8500+</span> ulasan.</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section data-parallax-background-ratio="0.5" style="background-image: url(https://placehold.co/1920x1100)">
        <div class="opacity-light bg-base-color"></div>
        <div class="container">
            <div class="row align-items-center justify-content-end"
                data-anime='{ "el": "childs", "translateX": [50, 0],"opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 col-md-8">
                    <div class="bg-white p-70px lg-p-35px position-relative border-radius-6px">
                        <div class="swiper slider-one-slide text-slider-style-01 magic-cursor"
                            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper mb-10px">
                                <!-- start text slider item -->
                                <div class="swiper-slide last-paragraph-no-margin">
                                    <div class="alt-font text-uppercase fs-13 fw-600 mb-5px ls-2px">World class designers
                                    </div>
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Exclusive design</h3>
                                    <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do
                                        eiusmod tempor incididunt ut labore et dolore magna ut enim veniam.</p>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fs-13 fw-600 mb-5px ls-2px">100% secure method
                                    </div>
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Secure payment</h3>
                                    <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do
                                        eiusmod tempor incididunt ut labore et dolore magna ut enim veniam.</p>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fs-13 fw-600 mb-5px ls-2px">24/7 support center
                                    </div>
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-1px">Online support</h3>
                                    <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do
                                        eiusmod tempor incididunt ut labore et dolore magna ut enim veniam.</p>
                                </div>
                                <!-- end text slider item -->
                            </div>
                            <div class="d-flex">
                                <!-- start slider navigation -->
                                <div
                                    class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                    <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                                </div>
                                <div
                                    class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                    <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                                </div>
                                <!-- end slider navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section -->
    <!-- start section -->
    {{-- <section>
        <div class="container">
            <div class="row justify-content-center mb-40px sm-mb-30px">
                <div class="col-lg-5 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="text-uppercase fs-13 ls-2px fw-600">Core people</span>
                    <h4 class="alt-font text-dark-gray fw-700 mb-20px">Company leaders</h4>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 mb-8"
                data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://placehold.co/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Jeremy dupont</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Director</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.twitter.com/" target="_blank" class="text-dark-gray bg-white"><i
                                        class="fa-brands fa-twitter icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://placehold.co/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Jessica dover</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Founder</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.linkedin.com/" target="_blank" class="text-dark-gray bg-white"><i
                                        class="fa-brands fa-linkedin-in icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://placehold.co/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Matthew taylor</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Manager</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.behance.net/" target="_blank" class="text-dark-gray bg-white"><i
                                        class="fa-brands fa-behance icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-08 border-radius-6px md-mb-30px">
                    <figure class="mb-0 position-relative overflow-hidden border-radius-6px">
                        <img src="https://placehold.co/600x756" alt="" />
                        <figcaption
                            class="w-100 h-100 d-flex align-items-end p-13 lg-p-10 bg-gradient-base-transparent border-radius-6px">
                            <div class="w-100">
                                <span class="team-member-name fw-500 text-white d-block">Johncy parker</span>
                                <span class="member-designation fs-15 lh-20 text-white d-block">Manager</span>
                            </div>
                            <div class="social-icon d-flex flex-column flex-shrink-1">
                                <a href="https://www.facebook.com/" target="_blank" class="text-dark-gray bg-white"><i
                                        class="fa-brands fa-facebook-f icon-small"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team member item -->
            </div>
            <div class="row position-relative clients-style-08"
                data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="https://placehold.co/195x50" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section -->
@endsection

@section('css')
    <style>
        @media (max-width: 768px) {
            img.hide-on-mobile {
                display: none !important;
            }
        }
    </style>
@endsection
