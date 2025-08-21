<section class="position-relative pt-0 overflow-hidden mb-1 mt-1"
    style="width:100vw; max-width:100vw; margin:0; padding:0;">
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
    /* Kenburns zoom in effect untuk gambar */
    .banner-img {
        animation: zoomInBanner 12s ease-in-out infinite alternate;
    }

    @keyframes zoomInBanner {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(1.1);
        }
    }

    /* Animasi masuk untuk teks */
    .banner-content h1 {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 1s ease forwards;
        animation-delay: 0.3s;
    }

    .banner-content p {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 1s ease forwards;
        animation-delay: 0.6s;
    }

    /* Animasi masuk untuk tombol */
    .banner-content a.btn {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 1s ease forwards;
        animation-delay: 0.9s;
    }

    /* Keyframes fade up */
    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hover effect tombol */
    .banner-content a.btn {
        transition: all 0.3s ease;
    }

    .banner-content a.btn:hover {
        background: #1c3455;
        color: #fff;
        letter-spacing: 1px;
    }
</style>
