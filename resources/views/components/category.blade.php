<section class="py-5" style="background-color: #1c3455;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2" style="color: #ffffff;">SEE OUR FINISHED PROJECT</h2>
        </div>
        <div class="row g-4">
            <!-- Category Card 1 -->
            <div class="col-md-4">
                <a href="{{ route('event') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden"
                        style="transition: transform 0.3s, box-shadow 0.3s;background-color: #1c3455;">
                        <img src="{{ asset('redesign/images/KITCHEN.webp') }}" class="card-img-top" alt="Kitchen Set">
                        <div class="card-body" style="padding: 0.5rem;">
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Project Finished.</p>
                            <p style="margin: 0; font-weight: bold; font-size: 1.25rem; color: #dcf3f0;">Alumunium
                                Kitchen Set</p>
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Mrs. S - Gading Serpong</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Category Card 2 -->
            <div class="col-md-4">
                <a href="{{ route('event') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden"
                        style="transition: transform 0.3s, box-shadow 0.3s;background-color: #1c3455;">
                        <img src="{{ asset('redesign/images/KITCHEN.webp') }}" class="card-img-top" alt="Kitchen Set">
                        <div class="card-body" style="padding: 0.5rem;">
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Project Finished.</p>
                            <p style="margin: 0; font-weight: bold; font-size: 1.25rem; color: #dcf3f0;">Alumunium
                                Kitchen Set</p>
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Mrs. S - Gading Serpong</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Category Card 3 -->
            <div class="col-md-4">
                <a href="{{ route('event') }}" class="text-decoration-none">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden"
                        style="transition: transform 0.3s, box-shadow 0.3s;background-color: #1c3455;">
                        <img src="{{ asset('redesign/images/KITCHEN.webp') }}" class="card-img-top" alt="Kitchen Set">
                        <div class="card-body" style="padding: 0.5rem;">
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Project Finished.</p>
                            <p style="margin: 0; font-weight: bold; font-size: 1.25rem; color: #dcf3f0;">Alumunium
                                Kitchen Set</p>
                            <p style="margin: 0; color: #dcf3f0; font-size: 0.875rem;">Mrs. S - Gading Serpong</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Button View More -->
        <div class="text-center mt-4">
            <a href="#" class="btn"
                style="
                   background-color: #dcf3f0;
                   color: #121f31;
                   font-weight: 500;
                   padding: 0.5rem 1.5rem;
                   border-radius: 0.375rem;
                   transition: background-color 0.3s;
               "
                onmouseover="this.style.backgroundColor='#005e81';" onmouseout="this.style.backgroundColor='#88dc7f';">
                View More
            </a>
        </div>
    </div>
</section>

<style>
    /* Animasi scroll untuk card */
    .card {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
        transition: transform 0.4s ease, opacity 0.4s ease, box-shadow 0.4s ease, z-index 0.4s ease;
        z-index: 1;
    }

    /* Muncul saat scroll */
    .card.show {
        animation: fadeUp 0.8s ease forwards;
    }

    /* Hover efek */
    .card:hover {
        transform: scale(1.1);
        z-index: 10;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.35);
    }

    .card:hover img {
        transform: scale(1.15);
        transition: transform 0.4s ease;
    }

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
        const cards = document.querySelectorAll(".card");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                    observer.unobserve(entry.target); // animasi 1x aja
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => observer.observe(card));
    });
</script>
