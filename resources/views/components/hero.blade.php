<section class="p-0 hero-section"
    style="position: relative; overflow: hidden; background-image: url('{{ asset('redesign/images/hero1.webp') }}'); background-size: cover; background-position: center; min-height: 100vh;">
    <!-- Overlay gelap -->
    <div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); z-index: 1;">
    </div>

    <!-- Konten di atas background -->
    <article class="content"
        style="position: relative; z-index: 2; display: flex; align-items: center; min-height: 100vh; text-align: left; color: white; padding: 2rem 5%;">
        <div>
            <p style="font-size: 1.5rem; margin: 0;">WELCOME TO</p>
            <h1 style="font-size: 3rem; font-weight: bold; margin: 0;">DAPUR GEMILANG</h1>
            <p style="font-size: 1.2rem; margin: 10px 0 20px;">Aluminium Furnished Project</p>
            <a href="#project"
                style="display: inline-block; padding: 10px 25px; background-color: transparent; color: white; text-decoration: none; font-weight: bold; border: 2px solid white; border-radius: 5px;">
                Our Project
            </a>
        </div>
    </article>
</section>

<style>
    @media (max-width: 768px) {
        .hero-section {
            background-image: url('{{ asset('redesign/images/heromobile.webp') }}') !important;
        }
    }
</style>
