<footer class="bg-secondary inner-box ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <a href="{{path}}dashboard/index.html" class="navbar-brand mb-4 d-flex pb-5 align-items-center">
                    <svg class="icon-30 text-primary" width="30"
                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                            transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)"
                            fill="currentColor" />
                        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                            transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                            transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                    </svg>
                    <h4 class="logo-title ms-3 text-white">{{env('APP_NAME')}}</h4>
                </a>

                <div class="d-flex align-items-center pt-5">
                    <h6 class="text-white">Follow Us:</h6>
                    <ul class="list-unstyled gap-3 d-flex m-0 ms-2 fw-bold">
                        <li>FB</li>
                        <span>|</span>
                        <li>IN</li>
                        <span>|</span>
                        <li>LI</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <h5 class="mb-4 text-white ">Quick Links</h5>
                <ul class="m-0 p-0 list-unstyled">
                    <li class="mb-3">Search</li>
                    <li class="mb-3">Terms of Service</li>
                    <li class="mb-3">Refund policy</li>
                    <li class="mb-3">Privacy Policy</li>

                </ul>

            </div>

            <div class="col-lg-6">
                <h5 class="mb-4 text-white ">Subscribe to save your designs</h5>

                <form class="row g-3">
                    <div class="col-auto">
                        <input type="email" class="form-control" id="inputemail2" placeholder="Email Address">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
                    </div>
                </form>
            </div>
            <hr class="bottom-hr" />
            <div class="col-md-12 text-center">
                <p>©
                    <script>document.write(new Date().getFullYear())</script> Hope UI, All Rights Reserved.
                </p>
            </div>
        </div>
    </div>

</footer>
