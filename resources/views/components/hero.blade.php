<section class="p-0 hero-section" style="position: relative; overflow: hidden; min-height: 100vh;">

    <!-- Background image -->
    <div class="hero-bg"></div>

    <!-- Overlay gelap -->
    <div class="hero-overlay"></div>

    <!-- Konten di atas background -->
    <article class="content"
        style="position: relative; z-index: 2; display: flex; align-items: center; min-height: 100vh; text-align: left; color: white; padding: 2rem 5%;">
        <div>
            <p style="font-size: 1.5rem; margin: 0;">WELCOME TO</p>
            <h1 style="font-size: 3rem; font-weight: bold; margin: 0;">DAPUR GEMILANG</h1>
            <p id="changing-text" style="font-size: 1.2rem; margin: 10px 0 20px;">
                Aluminium Furnished Project
            </p>
            <a href="#project"
                style="display: inline-block; padding: 10px 25px; background-color: transparent; color: white; text-decoration: none; font-weight: bold; border: 2px solid white; border-radius: 5px;">
                Our Project
            </a>
        </div>
    </article>
</section>

<style>
    .hero-section {
        position: relative;
        overflow: hidden;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('redesign/images/hero1.webp') }}');
        background-size: cover;
        background-position: center;
        transform: scale(1);
        transition: transform 1.2s ease;
        z-index: 0;
    }

    .hero-section:hover .hero-bg {
        transform: scale(1.1);
        /* zoom in ketika hover */
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
    }

    @media (max-width: 768px) {
        .hero-bg {
            background-image: url('{{ asset('redesign/images/heromobile.webp') }}') !important;
        }
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const texts = [
            "Aluminium Furnished Expert",
            "Interior Design",
            "Custom Kitchen Set"
        ];
        let index = 0;
        let charIndex = 0;
        const textElement = document.getElementById("changing-text");
        let isDeleting = false;

        function typeEffect() {
            const currentText = texts[index];
            if (isDeleting) {
                textElement.textContent = currentText.substring(0, charIndex--);
                if (charIndex < 0) {
                    isDeleting = false;
                    index = (index + 1) % texts.length;
                    setTimeout(typeEffect, 10);
                } else {
                    setTimeout(typeEffect, 50);
                }
            } else {
                textElement.textContent = currentText.substring(0, charIndex++);
                if (charIndex > currentText.length) {
                    isDeleting = true;
                    setTimeout(typeEffect, 1500); // tunggu sebentar sebelum hapus
                } else {
                    setTimeout(typeEffect, 100);
                }
            }
        }

        typeEffect();
    });
</script>
