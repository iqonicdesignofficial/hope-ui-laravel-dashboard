<x-app-layout layout="landing" :isHeader1=true>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <x-landing-pages.widgets.blog-deatail blogImage="blog/01.webp" cardClass="mt-4"
            blogDate="December 26, 2022" blogTitle="The Cheapest Destinations Of All Time, A List Of Beauty And Budget."
            blogAuther="Travel" />
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3>Leave a Apply</h3>
                    <p class="my-4">Your Email Address Will Not Be Published. Required Fields Are Marked *</p>
                    <div class="form-group mb-3">
                        <label for="your-message" class="form-label">Comment *</label>
                        <textarea name="message" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="full-name" class="form-label">Name *</label>
                        <input type="text" class="form-control" id="full-name">
                    </div>
                    <div class="form-group">
                        <label for="your-email" class="form-label">Email *</label>
                        <input type="text" class="form-control" id="your-email">
                    </div>
                    <div class="form-group">
                        <label for="your-subject" class="form-label">Website</label>
                        <input type="text" class="form-control" id="your-subject">
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Save My Name, Email, And Website In This
                            Browser For The Next Time I Comment.</label>
                    </div>
                    <a href="#" class="btn btn-primary">Post Comment</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
