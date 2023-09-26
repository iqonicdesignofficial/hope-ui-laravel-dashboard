<x-app-layout layout="landing" :isHeader1=true>
    <x-landing-pages.widgets.sub-header subTitle="Contact Us" subBreadcrume="Contact Us"/>
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
            <div class="card rounded-1 mb-lg-0">
                <div class="card-body text-center">
                    <div class="services bg-soft-primary rounded-pill text-center mx-auto mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="32" height="32"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                    </div>
                        <h5 class="mt-4">Address</h5>
                        <p class="mt-3">234 North Avenue Luke Lane, IN 360001</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card rounded-1 mb-lg-0">
                    <div class="card-body text-center">
                        <div class="services bg-soft-primary rounded-pill text-center mx-auto mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="32" height="32"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                        </div>
                        <h5 class="mt-4">Email Us</h5>
                        <p class="mt-3">Mail@hopeui.Com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card rounded-1 mb-lg-0">
                    <div class="card-body text-center">
                        <div class="services bg-soft-primary rounded-pill text-center mx-auto mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="32" height="32"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        </div>
                        <h5 class="mt-4">Call Us</h5>
                        <p class="mt-3">0 123 456 789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-padding bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-2 text-uppercase text-white">
                   Contact Us
                </p>
                <h2 class="text-white mb-4">Have any query? <br> Get in Touch.</h2>
                <img src="{{asset('images/landing-pages/images/home-4/contact.webp')}}" alt="" class="img-fluid" loading="lazy">
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="form-group">
                    <label for="full-name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full-name" placeholder="Your Name" >
                </div>
                <div class="form-group">
                    <label for="your-email" class="form-label">Your Email</label>
                    <input type="text" class="form-control" id="your-email" placeholder="Your Email" >
                </div>
                <div class="form-group">
                    <label for="your-subject" class="form-label">Your Subject</label>
                    <input type="text" class="form-control" id="your-subject" placeholder="Your Subject" >
                </div>
                <div class="form-group mb-3">
                <label for="your-message" class="form-label">Your Message</label>
                <textarea name="message" rows="10" class="form-control" >Your Message</textarea>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="customCheck1">
                    <label class="form-check-label" for="customCheck1">By Clicking You Agree To Use Our “Form” Terms & Condition</label>
                </div>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </div>

</div>
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d123505.75790910245!2d121.05573800000002!3d14.681181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sus!4v1676356596840!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</x-app-layout>
