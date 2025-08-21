<section class="why-section">
    <div class="why-container">
        <!-- Judul WHY CHOOSE US -->
        <h2 style="font-size: 1.5rem; font-style: italic; margin-bottom: 2rem; color: #000000;">
            WHY <span style="font-weight: bold; font-style: normal;">CHOOSE US?</span>
        </h2>

        <!-- Video Profile dengan Text -->
        <div class="why-choose-wrapper"
            style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; margin-bottom: 3rem; text-align: left;">
            <!-- Kiri: Text -->
            <div class="fade-left text-block" style="flex: 1; min-width: 280px;">
                <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color:#000;">
                    Belum Ada Desain yang Cocok?<br>
                    Kita Bisa Bikin Sesuai Keinginanmu!
                </h3>
                <p style="margin-bottom: 1.5rem; color:#333;">
                    Konsultasikan <b>GRATIS</b> Bersama Tim Kami
                </p>
                <a href="{{ route('contact') }}" class="cta-btn-why">
                    CONTACT US
                </a>
            </div>

            <!-- Kanan: Video -->
            <div class="fade-right" style="flex: 1; min-width: 280px;">
                <div
                    style="position: relative; padding-top: 56.25%; background-color: #000; border-radius: 10px; overflow: hidden;">
                    <iframe src="https://www.youtube.com/embed/OC4K_Jqoa1s" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen
                        style="position: absolute; top:0; left:0; width:100%; height:100%;">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Judul PROVIDE THE BEST SERVICES -->
        <h3 style="font-size: 1.2rem; font-weight: bold; margin-bottom: 1.5rem; color: #000000;">
            PROVIDE THE BEST SERVICES
        </h3>

        <!-- 4 Kotak Gambar -->
        <div class="service-boxes">
            <div class="why-card"><img src="{{ asset('redesign/images/category1.webp') }}" alt=""></div>
            <div class="why-card"><img src="{{ asset('redesign/images/category2.webp') }}" alt=""></div>
            <div class="why-card"><img src="{{ asset('redesign/images/category3.webp') }}" alt=""></div>
            <div class="why-card"><img src="{{ asset('redesign/images/category4.webp') }}" alt=""></div>
        </div>
    </div>
</section>

<style>
    .why-section {
        width: 100%;
        padding: 3rem 1rem;
    }

    .why-container {
        max-width: 1100px;
        margin: 0 auto;
        text-align: center;
        padding-bottom: 3rem;
    }

    /* button */
    .cta-btn-why {
        display: inline-block;
        padding: 10px 25px;
        background-color: white;
        color: black;
        text-decoration: none;
        font-weight: bold;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: scale(0.8);
        animation: buttonEntry 1s ease forwards, pulse 2s infinite ease-in-out 1s;
    }

    /* Shine effect */
    .cta-btn-why::after {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.4);
        transform: skewX(-20deg);
        transition: 0.5s;
    }

    .cta-btn-why:hover::after {
        left: 100%;
    }

    /* Hover invert color */
    .cta-btn-why:hover {
        background-color: black;
        color: white;
        border-color: white;
        transition: all 0.3s ease;
    }

    /* Fade kiri/kanan */
    .fade-left,
    .fade-right {
        opacity: 0;
        transition: all 1s ease;
    }

    .fade-left {
        transform: translateX(-50px);
    }

    .fade-right {
        transform: translateX(50px);
    }

    /* Container utama 4 kotak */
    .service-boxes {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 1rem;
    }

    .why-card {
        position: relative;
        width: 220px;
        height: 150px;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1;
        cursor: pointer;

        opacity: 0;
        transform: scale(0.8);
        transition: all 0.8s ease;
    }

    .why-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
        border-radius: 12px;
    }

    /* Hover → zoom + naik ke depan */
    .why-card:hover {
        transform: scale(1.1);
        z-index: 10;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.35);
    }

    .why-card:hover img {
        transform: scale(1.15);
    }

    /* Animasi muncul */
    .why-card.show {
        opacity: 1;
        transform: scale(1);
    }

    /* Saat sudah muncul di scroll */
    .fade-in {
        opacity: 1 !important;
        transform: translateX(0) !important;
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
        .service-boxes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .why-card {
            width: 100%;
            height: 140px;
        }

        .why-choose-wrapper {
            text-align: center !important;
            justify-content: center;
        }

        .text-block {
            text-align: center !important;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".fade-left, .fade-right");
        const cards = document.querySelectorAll(".service-boxes .why-card");

        // Fade kiri/kanan (text & video)
        function checkScroll() {
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) el.classList.add("fade-in");
            });
        }

        window.addEventListener("scroll", checkScroll);
        checkScroll();

        // Animasi kotak muncul satu per satu setiap 1 detik
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let index = 0;
                    const interval = setInterval(() => {
                        if (index < cards.length) {
                            cards[index].classList.add("show");
                            index++;
                        } else {
                            clearInterval(interval);
                        }
                    }, 1000); // tiap 1 detik
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        if (cards.length > 0) observer.observe(cards[0]);
    });
</script>
