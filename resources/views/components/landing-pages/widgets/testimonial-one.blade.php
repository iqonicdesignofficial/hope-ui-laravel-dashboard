<div class=" position-relative">
    <div class="shape">
        <img src="{{asset('images/landing-pages/images/home-2/shape.webp')}}" alt="{{$id}}" class="img-fluid">
    </div>
    <div class="card-body position-relative">
        <h6 class="mb-3 mt-3">{{$testTitle}}</h6>
        <p>{{$testText}}</p>
        <div class="border-bottom"></div>
        <div class="d-flex align-items-center mt-3">
            <img src="{{asset('images/landing-pages/images/home-2/' . $testUser) }}" alt="{{$id}}" class="img-fluid  rounded-pill">
            <div class="ms-3">
                <p class="mb-2">{{$userTitle}}</p>
                <div class="d-flex align-items-center">
                    <x-landing-pages.widgets.rating-fill rating="4" fill="true" />
                </div>
            </div>
        </div>
    </div>
</div>
