<x-app-layout layout="landing" :isHeader1=true>
    <x-landing-pages.widgets.sub-header subTitle="Faq" subBreadcrume="Faq" />
    <div class="section-card-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-2 text-uppercase text-primary">
                        faq
                    </p>
                    <h2 class="text-secondary mb-4">Foremost Common <span class="text-primary">Questions</span></h2>
                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                        officia consequat duis enim velit mollit. Exercitation veniam consequat.</p>
                </div>
                <div class="col-lg-6 mt-md-0 mt-4">
                    <div class="accordion custom-accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.</p>
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
                                        amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                        amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam
                                        consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding pt-0">
        <x-landing-pages.widgets.contact-detail />
    </div>
</x-app-layout>
