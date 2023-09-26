<footer>
    <div class="bg-secondary inner-box ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('landing-pages.index') }}" class="navbar-brand  d-flex align-items-center">
                        <svg class="icon-30 text-primary" width="30" viewBox="0 0 30 30" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                        </svg>
                        <h4 class="logo-title ms-3 text-white">{{ env('APP_NAME') }}</h4>
                    </a>
                    <p class="text-white my-4">It is a long established fact that a reader will be distracted by the
                        readable content of a page when
                        looking at its layout. </p>
                    <div class="d-flex align-items-center mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6V22L8 18L16 22L23 18V2L16 6L8 2L1 6Z" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16 6V22" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8 2V18" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="ms-4 mb-0 text-white">2798 Meadow Lane, Napa, California- 94559</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 15.9201V18.9201C21.0011 19.1986 20.9441 19.4743 20.8325 19.7294C20.7209 19.9846 20.5573 20.2137 20.3521 20.402C20.1468 20.5902 19.9046 20.7336 19.6407 20.8228C19.3769 20.912 19.0974 20.9452 18.82 20.9201C15.7428 20.5857 12.787 19.5342 10.19 17.8501C7.77382 16.3148 5.72533 14.2663 4.18999 11.8501C2.49997 9.2413 1.44824 6.27109 1.11999 3.1801C1.095 2.90356 1.12787 2.62486 1.21649 2.36172C1.30512 2.09859 1.44756 1.85679 1.63476 1.65172C1.82196 1.44665 2.0498 1.28281 2.30379 1.17062C2.55777 1.05843 2.83233 1.00036 3.10999 1.0001H6.10999C6.5953 0.995321 7.06579 1.16718 7.43376 1.48363C7.80173 1.80008 8.04207 2.23954 8.10999 2.7201C8.23662 3.68016 8.47144 4.62282 8.80999 5.5301C8.94454 5.88802 8.97366 6.27701 8.8939 6.65098C8.81415 7.02494 8.62886 7.36821 8.35999 7.6401L7.08999 8.9101C8.51355 11.4136 10.5864 13.4865 13.09 14.9101L14.36 13.6401C14.6319 13.3712 14.9751 13.1859 15.3491 13.1062C15.7231 13.0264 16.1121 13.0556 16.47 13.1901C17.3773 13.5286 18.3199 13.7635 19.28 13.8901C19.7658 13.9586 20.2094 14.2033 20.5265 14.5776C20.8437 14.9519 21.0122 15.4297 21 15.9201Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="ms-4 mb-0 text-white">(808) 555-0111</p>
                    </div>
                </div>
                <div class="col-md-2 mt-md-0 mt-4">
                    <h5 class="mb-4 text-white">Links</h5>
                    <ul class="m-0 p-0 list-unstyled text-white">
                        <li class="mb-3">About us</li>
                        <li class="mb-3">Features</li>
                        <li class="mb-3">Reviews</li>
                        <li>Team</li>
                    </ul>

                </div>
                <div class="col-md-2 mt-md-0 mt-4">
                    <h5 class="mb-4 text-white">Help</h5>
                    <ul class="m-0 p-0 list-unstyled text-white">
                        <li class="mb-3" i>My Account</li>
                        <li class="mb-3">Returns & Refunds</li>
                        <li class="mb-3">Payment Policy</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div class="col-md-4 mt-md-0 mt-4">
                    <h5 class="mb-4 text-white">Newsletter</h5>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control input-email ps-0" placeholder="Username"
                            aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text input-email-btn" id="basic-addon1"></span>
                    </div>

                    <ul class="list-unstyled p-0 m-0 d-flex mt-4">
                        <li>
                            <a href="#"><img src="{{ asset('images/brands/08.png') }}" alt="fb"
                                    loading="lazy" class="rounded-pill"></a>
                        </li>
                        <li class="ps-3">
                            <a href="#"><img src="{{ asset('images/brands/09.png') }}" alt="gm"
                                    loading="lazy" class="rounded-pill"></a>
                        </li>
                        <li class="ps-3">
                            <a href="#"><img src="{{ asset('images/brands/10.png') }}" alt="im"
                                    loading="lazy" class="rounded-pill"></a>
                        </li>
                        <li class="ps-3">
                            <a href="#"><img src="{{ asset('images/brands/13.png') }}" alt="li"
                                    loading="lazy" class="rounded-pill"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-secondary ">
        <div class="container border-top  py-4 border-primary">
            <div class="row">
                <div class="col-md-12 text-center text-white">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Hope UI, All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
