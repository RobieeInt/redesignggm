<section class="position-relative pt-0 overflow-hidden mb-1" style="width:100vw; max-width:100vw; margin:0; padding:0;">
    <div class="banner-wrapper position-relative">
        <img src="{{ asset('redesign/images/katalog.webp') }}" class="d-block banner-img" alt="Banner"
            style="width:100vw; height:40vw; object-fit:cover; min-height:220px; max-height:500px;">

        <!-- Overlay konten -->
        <div class="banner-content position-absolute start-0 text-white px-0 w-100"
            style="left:0; right:0; width:100%; top:22%; transform:translateY(-32%);">
            <div class="d-flex justify-content-between align-items-center">
                <div style="flex:1; text-align:left; padding-left:4vw;">
                    <h1 class="fw-bold display-4 mb-2">Introducing</h1>
                    <p class="fs-4 fst-italic mb-0">The quality of design, passion and precision.</p>
                </div>
                <div style="flex:1; text-align:right; padding-right:4vw;">
                    <a href="#" class="btn btn-light btn-lg fw-bold">SEE CATALOGUE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .banner-wrapper {
        position: relative;
        width: 100vw;
        max-width: 100vw;
        margin: 0;
        padding: 0;
    }

    .banner-img {
        width: 100vw !important;
        height: 40vw !important;
        object-fit: cover;
        min-height: 220px;
        max-height: 500px;
        display: block;
    }

    .banner-content {
        max-width: none;
        width: 100vw;
        left: 0;
        right: 0;
        padding-left: 0;
        padding-right: 0;
    }

    @media (max-width: 600px) {
        .banner-content .d-flex>div:first-child {
            padding-left: 4vw !important;
        }

        .banner-content .d-flex>div:last-child {
            padding-right: 4vw !important;
        }
    }

    .btn-light {
        background: #fff;
        color: #000;
        border-radius: 0;
        padding: 12px 30px;
    }

    @media (max-width: 600px) {
        .banner-img {
            height: 40vw !important;
            min-height: 120px;
            max-height: 220px;
        }

        .banner-content {
            padding: 0 4vw;
        }

        .btn-light {
            padding: 8px 16px;
            font-size: 0.9rem;
        }

        h1.display-4 {
            font-size: 1.2rem;
        }

        p.fs-4 {
            font-size: 0.95rem;
        }
    }
</style>
