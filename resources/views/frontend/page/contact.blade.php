@extends('frontend.layouts.base')

@section('title', 'Contact Us')

@section('content')
    <!-- start page title -->
    <section class="page-title-center-alignment cover-background top-space-padding"
        style="background-image: url('{{ asset('redesign/images/hero1.webp') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px"
                        style="color: white">Contact Us</h1>
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
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col md-mb-35px">
                    <span
                        class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i
                            class="feather icon-feather-map-pin d-inline-block text-base-color me-10px"></i>Office
                        location</span>
                    <div>
                        <p class="w-100 m-0">Jl. Raya Mauk Galeong No.8 Km.3 RT.004/007, Margasari, Kec. Karawaci, Kota
                            Tangerang, Banten 15113</p>
                    </div>
                </div>
                <div class="col md-mb-35px">
                    <span
                        class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i
                            class="feather icon-feather-mail d-inline-block text-base-color me-10px"></i>Send a
                        message</span>
                    <a href="mailto:info@dapurgemilang.com">info@dapurgemilang.com</a><br>
                    <a href="mailto:sales@dapurgemilang.com">sales@dapurgemilang.com</a>
                </div>
                <div class="col xs-mb-35px">
                    <span
                        class="fs-17 fw-600 d-block w-90 sm-w-100 text-base-color border-bottom border-color-base-color pb-15px mb-15px"><i
                            class="feather icon-feather-phone d-inline-block text-base-color me-10px"></i>Call us
                        directly</span>
                    <a href="tel:0899-4573-980">0899-4573-980</a><br>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0 position-relative overflow-hidden">
        <div class="container">
            <div class="row mb-20px">
                <div class="col-lg-10 col-md-12"
                    data-anime='{ "effect": "slide", "color": "#1B3250", "direction":"rl", "easing": "easeOutQuad", "delay":50}'>

                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.093266674905!2d106.6122677!3d-6.1723898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff75762e7147%3A0x6fbc6ed6be1e4c14!2sJl.%20Raya%20Mauk%20Galeong%20No.8%20Km.3%2C%20Margasari%2C%20Kec.%20Karawaci%2C%20Kota%20Tangerang%2C%20Banten%2015113!5e0!3m2!1sid!2sid!4v1723891234567"
                            style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-7 col-md-12 align-self-start md-mt-15px"
                    data-bottom-top="transform: translate3d(80px, 20px, 0px);"
                    data-top-bottom="transform: translate3d(-80px, 20px, 0px);">
                    <span
                        class="alt-font fs-120 xs-fs-75 fw-600 opacity-3 d-block d-lg-inline-block text-center ls-minus-3px text-white-space-nowrap xs-text-white-space-normal">Get
                        in touch!</span>
                </div>
                <div class="col-lg-5 contact-form-style-03 position-relative overlap-section-one-fourth md-mt-0"
                    data-anime='{ "el": "childs", "translateY": [50, 0],"opacity": [0,1], "duration": 800, "delay": 550, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="bg-base-color p-16 lg-p-10 position-relative overflow-hidden mt-50px">
                        <i
                            class="bi bi-chat-text fs-140 text-white opacity-1 position-absolute top-minus-30px right-minus-20px"></i>
                        <h2 class="fw-600 alt-font text-white mb-30px fancy-text-style-4 ls-minus-1px">Say
                            <span data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span>
                        </h2>
                        <form action="https://wa.me/628568780192" method="GET" target="_blank">
                            <textarea name="text" rows="4" required class="form-control mb-3"
                                placeholder="Tulis nama dan pesanmu di sini..."></textarea>
                            <button type="submit" class="btn btn-success">Kirim via WhatsApp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section class="p-0 border-radius-6px lg-no-border-radius overflow-hidden" id="location">
        <div class="container-fluid px-0">
            <div class="row justify-content-center g-0">
                <div class="col-12 p-0">
                    <div id="map" class="map"
                        data-map-options='{ "lat": -37.817240, "lng": 144.955820, "style": "Silver", "marker": { "type": "HTML", "color": "#1B3250" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Decor Store</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section -->
@endsection

@section('css')
    <style>
        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 12px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 12px;
        }
    </style>
@endsection
