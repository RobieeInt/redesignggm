<section class="py-8 bg-white">
    <!-- Judul full width -->
    <h2
        style="background-color: #1c3556; color: white; padding: 1rem 0; text-align: center; font-size: 1.5rem; font-weight: bold; margin-bottom: 1.5rem; width: 100%;">
        Find Your <span style="color: white; font-weight: bold;">Design Inspiration!</span>
    </h2>

    <!-- Konten di tengah -->
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 1rem;">
        <div class="inspiration-grid">

            <!-- Grid Item -->
            <div class="grid-item">
                <img src="{{ asset('redesign/images/category1.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Kitchen</span> set</div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('redesign/images/category2.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Laundry</span> room</div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('redesign/images/category3.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Cabinet</span> TV</div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('redesign/images/category4.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Wardrobe</span> cabinet</div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('redesign/images/category5.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Under-Stairs</span> Cabinet</div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('redesign/images/category6.webp') }}" alt="">
                <div class="overlay"><span style="font-weight:bold;">Custom</span> Cabinet</div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Grid utama */
    .inspiration-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.5rem;
    }

    /* Item grid */
    .grid-item {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 1/1.2;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transition: transform 0.4s ease, z-index 0.4s ease, box-shadow 0.4s ease;
        z-index: 1;
        cursor: pointer;
        opacity: 0;
        transform: translateY(30px) scale(0.95);
    }

    .grid-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
        border-radius: 12px;
    }

    /* Saat muncul (scroll) */
    .grid-item.show {
        animation: fadeUp 0.8s ease forwards;
    }

    /* Animasi berurutan */
    .grid-item.show:nth-child(1) {
        animation-delay: 0.1s;
    }

    .grid-item.show:nth-child(2) {
        animation-delay: 0.2s;
    }

    .grid-item.show:nth-child(3) {
        animation-delay: 0.3s;
    }

    .grid-item.show:nth-child(4) {
        animation-delay: 0.4s;
    }

    .grid-item.show:nth-child(5) {
        animation-delay: 0.5s;
    }

    .grid-item.show:nth-child(6) {
        animation-delay: 0.6s;
    }

    /* Hover → kaya card */
    .grid-item:hover {
        transform: scale(1.1);
        z-index: 10;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.35);
    }

    .grid-item:hover img {
        transform: scale(1.15);
    }

    /* Overlay text */
    .overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 0.5rem;
        background: rgba(0, 0, 0, 0.4);
        color: white;
        text-align: center;
        font-size: 1rem;
        transition: background 0.3s ease;
    }

    .grid-item:hover .overlay {
        background: rgba(0, 0, 0, 0.7);
    }

    /* Keyframes */
    @keyframes fadeUp {
        from {
            transform: translateY(30px) scale(0.95);
            opacity: 0;
        }

        to {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".grid-item");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // biar animasinya 1x aja
                }
            });
        }, {
            threshold: 0.2
        });

        items.forEach(item => observer.observe(item));
    });
</script>
