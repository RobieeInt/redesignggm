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
            {{-- <p style="font-size: 1.5rem; margin: 0;">WELCOME TO</p> --}}
            <h1 style="font-size: 3rem; font-weight: bold; margin: 0;">LET'S WORK TOGETHER</h1>
            <p style="font-size: 1.2rem; margin: 10px 0 20px;">
                let us know what you're looking for in an agency, we'll take a look and see if this could be the start
                of something beautiful
            </p>
            <a href="{{ route('contact') }}"
                style="display: inline-block; padding: 10px 25px; background-color: transparent; color: black;background-color:white; text-decoration: none; font-weight: bold; border: 2px solid white; border-radius: 5px;">
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
            /* lebih pas di mobile */
        }

        .hero-section .content p {
            font-size: 1rem;
        }
    }
</style>
