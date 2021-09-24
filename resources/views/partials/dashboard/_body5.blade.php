
<div class="boxed-inner">
    <div id="loading">
        @include('partials.dashboard._body_loader')
    </div>
    <main class="main-content">
        @include('partials.dashboard._body_header2')
        <div class="conatiner-fluid content-inner pb-0">
        {{ $slot }}
        </div>
        @include('partials.dashboard._body_footer')
    </main>
</div>
@include('partials.dashboard._scripts')