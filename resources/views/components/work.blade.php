<section class="p-0 hero-section"
    style="position: relative; overflow: hidden; background-image: url('{{ asset('redesign/images/hero1.webp') }}'); background-size: cover; background-position: center; min-height: 100vh;">

    <!-- Overlay gelap -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); z-index: 1;">
    </div>

    <!-- Konten di atas background -->
    <article class="content"
        style="position: relative; z-index: 2; display: flex; align-items: center; justify-content: center; min-height: 100vh; text-align: center; color: white; padding: 2rem 5%;">
        <div>
            <h1 id="hero-title" class="fade-text" style="font-size: 3rem; font-weight: bold; margin: 0;">
                DESIGN YOUR PERFECT KITCHEN
            </h1>
            <p id="hero-subtitle" class="fade-text" style="font-size: 1.2rem; margin: 10px 0 20px;">
                Share your vision with us — together, we’ll transform it into reality.
            </p>
            <a href="{{ route('contact') }}" class="cta-btn">
                CONTACT US
            </a>
        </div>
    </article>
</section>

<style>
    @media (max-width: 768px) {
        .hero-section {
            background-image: url('{{ asset('redesign/images/heromobile.webp') }}') !important;
        }

        .hero-section .content h1 {
            font-size: 2rem;
        }

        .hero-section .content p {
            font-size: 1rem;
        }
    }

    /* Animasi Fade teks */
    .fade-text {
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .fade-out {
        opacity: 0;
    }

    /* --- CONTACT US Button Animasi --- */
    .cta-btn {
        display: inline-block;
        padding: 10px 25px;
        background-color: white;
        color: black;
        text-decoration: none;
        font-weight: bold;
        border: 2px solid white;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        opacity: 0;
        transform: scale(0.8);
        animation: buttonEntry 1s ease forwards, pulse 2s infinite ease-in-out 1s;
    }

    /* Efek muncul zoom in */
    @keyframes buttonEntry {
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Efek pulse */
    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Shine effect */
    .cta-btn::after {
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

    .cta-btn:hover::after {
        left: 100%;
    }

    /* Hover invert color */
    .cta-btn:hover {
        background-color: black;
        color: white;
        border-color: white;
        transition: all 0.3s ease;
    }
</style>

<script>
    const slides = [{
            title: "DESIGN YOUR PERFECT KITCHEN",
            subtitle: "Share your vision with us — together, we’ll transform it into reality."
        },
        {
            title: "BUILDING SPACES THAT INSPIRE",
            subtitle: "From ideas to execution, we’ll craft a kitchen that fits your lifestyle."
        },
        {
            title: "MAKE YOUR HOME TRULY YOURS",
            subtitle: "Let’s collaborate to design a kitchen that reflects your taste and personality."
        },
        {
            title: "TRANSFORMING IDEAS INTO REALITY",
            subtitle: "Your dream kitchen starts here. Let’s create something extraordinary together."
        },
        {
            title: "CRAFTED FOR YOUR EVERYDAY MOMENTS",
            subtitle: "Tell us how you live, and we’ll design a kitchen that makes every day special."
        }
    ];

    let index = 0;
    const titleEl = document.getElementById("hero-title");
    const subtitleEl = document.getElementById("hero-subtitle");

    function changeSlide() {
        // fade out
        titleEl.classList.add("fade-out");
        subtitleEl.classList.add("fade-out");

        setTimeout(() => {
            // ganti text
            index = (index + 1) % slides.length;
            titleEl.textContent = slides[index].title;
            subtitleEl.textContent = slides[index].subtitle;

            // fade in
            titleEl.classList.remove("fade-out");
            subtitleEl.classList.remove("fade-out");
        }, 500);
    }

    setInterval(changeSlide, 1500); // ganti tiap 1.5 detik
</script>
