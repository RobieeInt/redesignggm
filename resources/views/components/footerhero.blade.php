<footer class="footer-dark bg-dark-gray" style="padding: 1rem 5%; background-color: #1c3556; color: white;">
    <style>
        .footerhero-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            flex-wrap: nowrap;
            /* tetap satu baris */
        }

        .footerhero-flex>div {
            flex: 1 1 0;
        }

        .footerhero-flex>div:nth-child(1) {
            text-align: left;
            font-size: 0.85rem;
            /* lebih kecil supaya muat 1 baris */
            white-space: nowrap;
            /* jangan pecah ke baris baru */
            overflow: hidden;
            text-overflow: ellipsis;
            /* kalau kebesaran tetap potong dengan ... */
        }

        .footerhero-flex>div:nth-child(2) {
            text-align: center;
            font-size: 0.85rem;
            white-space: nowrap;
        }

        .footerhero-flex>div:nth-child(3) {
            text-align: right;
        }

        .footerhero-flex img {
            vertical-align: middle;
            filter: invert(1);
            width: 18px;
            margin-left: 0.25rem;
        }

        @media (max-width: 600px) {

            .footerhero-flex>div:nth-child(1),
            .footerhero-flex>div:nth-child(2) {
                font-size: 0.65rem !important;
                /* lebih kecil di mobile */
            }

            .footerhero-flex img {
                width: 14px;
                /* ikon lebih kecil di mobile */
                margin-left: 0.15rem;
            }
        }
    </style>

    <div class="footerhero-flex">

        <!-- Kiri -->
        <div>
            2025 by <strong>Dapur Gemilang</strong>
        </div>

        <!-- Tengah -->
        <div>
            <a href="#top" style="color: white; text-decoration: none; font-weight: bold;">GO TO TOP</a>
        </div>

        <!-- Kanan -->
        <div>
            <a href="#" title="Instagram">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/instagram.svg" alt="Instagram">
            </a>
            <a href="#" title="TikTok">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/tiktok.svg" alt="TikTok">
            </a>
            <a href="#" title="Facebook">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="#" title="YouTube">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@v9/icons/youtube.svg" alt="YouTube">
            </a>
        </div>

    </div>
</footer>
