<nav class="navbar navbar-expand-md navbar-light main-nav">
    <div class="container-fluid navbar-inner">
         <a href="{{route('landing-pages.index')}}" class="navbar-brand d-lg-none d-flex">
            <svg class="icon-30 text-primary"  width="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
            </svg>
            <h5 class="logo-title ms-3">{{env('APP_NAME')}}</h5>
        </a>
        <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Toggle offcanvas</button>
        <div class="offcanvas-lg offcanvas-end header-one" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
            <ul class=" navbar-nav iq-nav-menu list-unstyled">
                <li class="nav-item">
                    <a class="nav-link menu-arrow justify-content-start" href="#" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="homeData">Home</a>
                    <ul class="iq-header-sub-menu list-unstyled collapse" id="homeData">
                       <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.index'))}}" href="{{route('landing-pages.index')}}"> App Landing Page </a></li>
                       <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.software'))}}" href="{{route('landing-pages.software')}}">Software Landing Page</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.about'))}}" href="{{route('landing-pages.about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.feature'))}}" href="{{route('landing-pages.feature')}}">Features</a></li>
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.pricing'))}}" href="{{route('landing-pages.pricing')}}">Pricing</a></li>
            </ul>
             <a href="{{route('landing-pages.index')}}" class="navbar-brand order-first order-md-0 mx-0 d-flex">
                <svg class="icon-30 text-primary"  width="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                </svg>
                <h5 class="logo-title ms-3 text-white">{{env('APP_NAME')}}</h5>
            </a>
            <ul class=" navbar-nav ">
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.blog'))}}" href="{{route('landing-pages.blog')}}"> Blog </a></li>
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.faq'))}}" href="{{route('landing-pages.faq')}}"> Faq </a></li>
                <li class="nav-item"><a class="nav-link {{activeRoute(route('landing-pages.contact'))}}" href="{{route('landing-pages.contact')}}"> Contact Us </a></li>
            </ul>
        </div>
    </div>
</nav>
