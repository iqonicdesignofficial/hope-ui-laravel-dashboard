<img src="{{asset('images/landing-pages/images/' . $blogImage) }}" alt="image" class="img-fluid" loading="lazy">
<div class="card-body">
    <p>{{$blogText}}</p>
    <h6 class="my-2"><a href="{{ route('landing-pages.blog-detail')}}">{{$blogTitle}}</a></h6>
</div>

