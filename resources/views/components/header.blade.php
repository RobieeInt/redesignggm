<header class="header-with-topbar" style="position: relative; z-index: 10; background-color: transparent;">
    <nav class="navbar navbar-expand-lg header-light disable-fixed" data-header-hover="light"
        style="background-color: transparent !important;">
        <div class="container-fluid">
            <div class="col-auto">
                <a class="navbar-brand" href="{{ route('landing-page') }}">
                    <img src="{{ asset('redesign/images/logo.webp') }}" alt="Logo"
                        style="max-height:50px; height:auto; width:auto;">
                </a>
            </div>
            <div class="col-auto menu-order position-static xs-ps-0">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="{{ route('landing-page') }}" class="nav-link"
                                style="color:white;">Home</a></li>
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link"
                                style="color:white;">Event</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link"
                                style="color:white;">About</a></li>
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link"
                                style="color:white;">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto ms-auto">

            </div>
        </div>
    </nav>
</header>
