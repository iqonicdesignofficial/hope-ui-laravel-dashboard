<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu">
    <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center justify-content-between w-100 landing-header">

            <a href="{{ route('landing-pages.index') }}" class="navbar-brand m-0 d-xl-flex d-none">
                <!--Logo start-->
                <svg class="icon-30 text-primary" width="30" class="text-primary" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                        transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                        transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                </svg>
                <!--logo End-->
                <h5 class="logo-title">Hope UI</h5>
            </a>
            <div class="d-flex align-items-center d-xl-none">
                <button class="d-xl-none btn btn-primary rounded-pill p-1 pt-0" data-bs-toggle="offcanvas"
                    data-bs-target="#navbar_main" aria-expanded="false" aria-controls="navbar_main">
                    <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg>
                </button>

                <a href="{{ route('landing-pages.index') }}" class="navbar-brand ms-3  d-xl-none">
                    <!--Logo start-->
                    <svg class="icon-30 text-primary" width="30" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                            transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                    </svg>
                    <!--logo End-->
                    <h5 class="logo-title">Hope UI</h5>
                </a>
            </div>
            <ul class="d-block d-xl-none list-unstyled m-0">
                <li class="nav-item dropdown iq-responsive-menu ">
                    <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11"
                        style="width: 18rem;">
                        <li class="px-3 py-0">
                            <div class="form-group input-group mb-0">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-text">
                                    <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Horizontal Menu Start -->
            <nav id="navbar_main" class="nav navbar navbar-expand-xl hover-nav horizontal-nav mobile-offcanvas ">
                <div class="container-fluid p-lg-0">
                    <div class="offcanvas-header px-0">
                        <div class="navbar-brand ms-3">
                            <svg class="icon-30 text-primary" width="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                    transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                    transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                    transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                    transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                            </svg>
                            <h5 class="logo-title">{{ env('APP_NAME') }}</h5>
                        </div>
                        <button class="btn-close float-end px-3"></button>
                    </div>
                    <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                        <li class="nav-item ">
                            <a class="nav-link menu-arrow justify-content-start" data-bs-toggle="collapse"
                                href="#homeData" role="button" aria-expanded="false" aria-controls="homeData">
                                <span class="item-name">Home</span>
                                <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-18"
                                    width="18" height="18" viewBox="0 0 24 24">
                                    <path d="M19 8.5L12 15.5L5 8.5" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                                <li class="nav-item">
                                    <a class="nav-link {{ activeRoute(route('landing-pages.index')) }}"
                                        href="{{ route('landing-pages.index') }}">
                                        App Landing Page
                                    </a>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ activeRoute(route('landing-pages.software')) }}"
                                        href="{{ route('landing-pages.software') }}">Software Landing Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.about')) }}"
                                href="{{ route('landing-pages.about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.feature')) }}"
                                href="{{ route('landing-pages.feature') }}">Features</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.pricing')) }}"
                                href="{{ route('landing-pages.pricing') }}">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.blog')) }}"
                                href="{{ route('landing-pages.blog') }}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.faq')) }}"
                                href="{{ route('landing-pages.faq') }}">Faq</a></li>
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('landing-pages.contact')) }}"
                                href="{{ route('landing-pages.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- container-fluid.// -->
            </nav>
            <!-- Sidebar Menu End -->
        </div>
    </div>
</nav>
