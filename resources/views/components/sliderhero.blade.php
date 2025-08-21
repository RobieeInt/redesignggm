<section class="position-relative pt-0 overflow-visible hero-slider mt-1"
    style="background-color: #d7e5e4; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <!-- ganti overflow-hidden -> overflow-visible -->
    <div id="bannerCarousel" class="carousel slide carousel-fade mx-auto" style="max-width: 1160px;" data-bs-ride="carousel"
        data-bs-interval="2000">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('redesign/images/slider1.webp') }}" class="d-block w-100 banner-img" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('redesign/images/slider2.webp') }}" class="d-block w-100 banner-img" alt="Banner 2">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<style>
    /* Pastikan tidak ada height fix di carousel maupun item */
    .hero-slider {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 60vh;
        padding-bottom: 0;
    }

    .hero-slider #bannerCarousel .carousel-item {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-slider .banner-img {
        max-width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
    }

    .hero-slider #bannerCarousel,
    .hero-slider #bannerCarousel .carousel-inner,
    .hero-slider #bannerCarousel .carousel-item {
        height: auto !important;
        min-height: 0 !important;
    }

    /* Kunci: gambar ikut ukuran asli (proposional), tidak dipaksa height */
    .hero-slider .banner-img {
        display: block;
        width: 100% !important;
        height: auto !important;
        /* hapus segala height fixed */
        max-height: none !important;
        /* kalau ada theme yg nge-limit */
        object-fit: unset !important;
        /* cegah crop kalau sebelumnya di-set cover */
    }

    /* Kadang theme kasih overflow hidden di item */
    .hero-slider #bannerCarousel .carousel-item {
        overflow: visible !important;
    }
</style>
