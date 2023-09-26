<x-app-layout layout="landing" :isHeader1=true>
    <div class="banner-one-app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <h1 class="text-primary mb-4">We Build Products <br> to <span class="text-secondary">Solve
                            Problems</span> </h1>
                </div>
                <div class="col-lg-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum vel sed in ac aliquam nisl sed.
                        Non
                        arcu quam aliquet amet, donec enim. </p>
                    <div class="d-flex align-items-center">
                        <a hrer="javascript" class="btn btn-primary">Try It For Free</a>
                        <a hrer="javascript" class="btn btn-secondary ms-3">Download Pro</a>
                    </div>
                </div>
                <div class="col-lg-12 mt-4 mt-lg-0">
                    <img src="{{ asset('images/landing-pages/images/home-5/top-banner.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding page-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-3 text-uppercase text-primary">
                        about us
                    </p>
                    <h2 class=" mb-4">What are <span class="text-primary">we</span></h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum ac integer
                        semper sit
                        semper laoreet donec. Vitae turpis pretium placerat augue mauris, adipiscing. Risus pretium,
                        amet mi
                        fringilla gravida risus accumsan.</p>
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="text-primary mb-2">100%</h5>
                            <p class="mb-0">Satisfaction</p>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary mb-2">15k</h5>
                            <p class="mb-0">Downloads</p>
                        </div>
                        <div class="ms-4">
                            <h5 class="text-primary mb-2">24/7</h5>
                            <p class="mb-0">Support</p>
                        </div>
                    </div>
                    <a hrer="#" class="btn btn-primary mt-4">Get Started</a>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <img src="{{ asset('images/landing-pages/images/home-5/about-5.webp') }}" alt=""
                        class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-uppercase text-primary">
                        Features
                    </p>
                    <h2 class=" mb-4">Features Provided <span class="text-primary">For You </span></h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 text-center">
                <x-landing-pages.widgets.feature-section />
            </div>
        </div>
    </div>
    <div class="section-padding bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-2 text-white">
                        Download now
                    </p>
                    <h2 class="mb-5 text-white">Fast, easy, and <span class="text-primary">Affordable</span> </h2>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet at diam vivamus
                        sodales magna
                        suspendisse. Mi volutpat vel convallis sed risus egestas.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-primary">Try It For Free</a>
                        <a href="#" class="btn btn-light ms-2">Download Pro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-primary text-uppercase">Pricing</p>
                    <h2 class="mb-4">Our <span class="text-primary">Price Plans</span></h2>
                </div>
            </div>
            <div class="row  row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card text-center mb-4 mb-lg-0">
                        <div class="card-header bg-soft-primary pb-4">
                            <h6 class="mb-3">Free</h6>
                            <h4 class="">$0 <br>
                                <h6>/Month</h6>
                            </h4>
                            <a href="#" class="btn btn-primary mt-3">Get Started</a>
                        </div>
                        <div class="card-body ">
                            <p>10 users included</p>
                            <p class="text-decoration-line-through">2GB of storage</p>
                            <p class="text-decoration-line-through">Email support</p>
                            <p class="text-decoration-line-through">Help center access</p>
                            <p class="text-decoration-line-through mb-0">Help center access</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center mb-4 mb-lg-0">
                        <div class="card-header bg-soft-primary pb-4">
                            <h6 class="mb-3">Pro</h6>
                            <h4 class="">$199<br>
                                <h6>/Month</h6>
                            </h4>
                            <a href="#" class="btn btn-primary mt-3">Get Started</a>
                        </div>
                        <div class="card-body ">
                            <p>10 users included</p>
                            <p>10GB of storage</p>
                            <p>Priority Email support</p>
                            <p>Help center access</p>
                            <p class=" mb-0">Help center access</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center mb-4 mb-lg-0">
                        <div class="card-header bg-primary pb-4">
                            <h6 class="mb-3 text-white">Enterprise</h6>
                            <h4 class="text-white">$399<br>
                                <h6 class=" text-white">/Month</h6>
                            </h4>
                            <a href="#" class="btn btn-outline-light mt-3">Get Started</a>
                        </div>
                        <div class="card-body ">
                            <p>30 users included</p>
                            <p>15GB of storage</p>
                            <p>Help center access</p>
                            <p class="text-decoration-line-through">Help center access</p>
                            <p class="mb-0 text-decoration-line-through">Call and email support</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center mb-0">
                        <div class="card-header bg-soft-primary pb-4">
                            <h6 class="mb-3">Premium</h6>
                            <h4 class="">5399<br>
                                <h6>/Month</h6>
                            </h4>
                            <a href="#" class="btn btn-primary mt-3">Get Started</a>
                        </div>
                        <div class="card-body ">
                            <p>50 users included</p>
                            <p>60GB of storage</p>
                            <p>24 x 7 call support</p>
                            <p class="text-decoration-line-through">Help center access</p>
                            <p class="mb-0 text-decoration-line-through">Help center access</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-2 text-uppercase text-primary">
                        Team
                    </p>
                    <h2 class="text-secondary mb-4">Expert <span class="text-primary">Teams</span></h2>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card team-image mb-4 mb-lg-0">
                        <x-landing-pages.widgets.team teamImage="team1.webp" teamTitle="Darlene Robertson"
                            teamText="Founder" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card team-image mb-4 mb-lg-0">
                        <x-landing-pages.widgets.team teamImage="team2.webp" teamTitle="Floyd Miles"
                            teamText="UI designer" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card team-image mb-4 mb-lg-0">
                        <x-landing-pages.widgets.team teamImage="team-3.webp" teamTitle="Arlene McCoy"
                            teamText="Researcher" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card team-image mb-4 mb-lg-0">
                        <x-landing-pages.widgets.team teamImage="team-4.webp" teamTitle="Darlene Robertson"
                            teamText="Founder" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p class="mb-3 text-primary text-uppercase">Reviews</p>
                    <h2 class="mb-5">What our <span class="text-primary">Customer’s are saying</span></h2>
                </div>
                <div class="overflow-hidden slider-circle-btn" id="testimonial-one-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.webp" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.webp" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.webp" userTitle="Jenny Wilson" Id="03" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one testTitle="A true game changer."
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-1.webp" userTitle="Eleen Rogers" Id="01" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one testTitle="Best you can Get"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget condimentum
                        luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-2.webp" userTitle="Brooklyn Simmons" Id="02" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden mb-0">
                            <x-landing-pages.widgets.testimonial-one
                                testTitle="Perfect poduct for your
                        business"
                                testText="“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae, eget
                        condimentum luctus nec nec tellus sem sed. Diam elementum tellus posuere ipsum tortor.”"
                                testUser="user-3.webp" userTitle="Jenny Wilson" Id="03" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-box bg-secondary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 align-items-center ">
                <div class="col mb-md-0 mb-5 d-flex justify-content-center">
                    <x-landing-pages.widgets.client client clientImage="07.webp" />
                </div>
                <div class="col mb-md-0 mb-5 d-flex justify-content-center">
                    <x-landing-pages.widgets.client client clientImage="08.webp" />
                </div>
                <div class="col mb-md-0 mb-5 d-flex justify-content-center">
                    <x-landing-pages.widgets.client client clientImage="09.webp" />
                </div>
                <div class="col mb-md-0 mb-5 d-flex justify-content-center">
                    <x-landing-pages.widgets.client client clientImage="10.webp" />
                </div>
                <div class="col d-flex justify-content-center">
                    <x-landing-pages.widgets.client client clientImage="11.webp" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <p class="mb-2 text-uppercase text-primary">
                        Blog
                    </p>
                    <h2 class="text-secondary mb-4">All the <span class="text-primary">Support you Need</span></h2>
                </div>
                <div class="overflow-hidden slider-circle-btn mt-5" id="app-slider">
                    <ul class="p-0 m-0 swiper-wrapper list-inline">
                        <li class="swiper-slide  card-slide card overflow-hidde">
                            <x-landing-pages.widgets.blog blogImage="home-3/02.webp"
                                blogTitle="The
                        Shaping the futures, part by part."
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-3/03.webp"
                                blogTitle="Technology that unwinds your potential." blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-3/04.webp"
                                blogTitle="Generating the best online environment." blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-3/02.webp"
                                blogTitle="The
                        Shaping the futures, part by part."
                                blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-3/03.webp"
                                blogTitle="Technology that unwinds your potential." blogText="Video" />
                        </li>
                        <li class="swiper-slide card-slide card overflow-hidden">
                            <x-landing-pages.widgets.blog blogImage="home-3/04.webp"
                                blogTitle="Generating the best online environment." blogText="Video" />
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-card-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <p class="mb-2 text-uppercase text-primary">
                        faq
                    </p>
                    <h2 class="text-secondary mb-4">Foremost Common <span class="text-primary">Questions</span></h2>
                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                        officia
                        consequat duis enim velit mollit. Exercitation veniam consequat.</p>
                </div>
                <div class="col-lg-7 col-xl-6 mt-4 mt-lg-0">
                    <div class="accordion custom-accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet
                                        sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet
                                        sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet
                                        sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet
                                        sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet
                                        sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
