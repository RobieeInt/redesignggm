@extends('frontend.layouts.base')

@section('title', 'About Us')

@section('content')
    <!-- start page title -->
    <section class="page-title-center-alignment cover-background top-space-padding"
        style="background-image: url('{{ asset('redesign/images/hero1.webp') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <h1 class="alt-font d-inline-block fw-700 ls-minus-05px text-base-color mb-10px mt-3 md-mt-50px"
                        style="color: white">Latest
                        Event</h1>
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
            <div class="row">
                <div class="col-12 px-0">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <div class="ratio ratio-16x9">
                                        <iframe width="600" height="445"
                                            src="https://www.youtube.com/embed/7m1uZXZb01g" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-13 text-uppercase d-block mb-5px fw-500">
                                        <a href="demo-decor-store-blog.html"
                                            class="text-dark-gray fw-700 categories-text">Event</a>
                                        <a href="#" class="blog-date">17 November 2021</a>
                                    </span>
                                    <a href="demo-decor-store-blog-single-classic.html"
                                        class="card-title alt-font fw-600 fs-17 lh-30 text-dark-gray d-inline-block w-95 xs-w-100">
                                        DAPUR GEMILANG X INDOBUILDTECH 2021 || JCC SENAYAN
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                    <div class="ratio ratio-16x9">
                                        <iframe width="600" height="445"
                                            src="https://www.youtube.com/embed/TC7kmS5yMMs" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-30px pb-30px xs-pb-15px">
                                    <span class="fs-13 text-uppercase d-block mb-5px fw-500">
                                        <a href="demo-decor-store-blog.html"
                                            class="text-dark-gray fw-700 categories-text">Event</a>
                                        <a href="#" class="blog-date">02 January 2020</a>
                                    </span>
                                    <a href="demo-decor-store-blog-single-classic.html"
                                        class="card-title alt-font fw-600 fs-17 lh-30 text-dark-gray d-inline-block w-95 xs-w-100">
                                        Homedec JCC Exhibition
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-12 mt-3 sm-mb-3 d-flex justify-content-center"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
