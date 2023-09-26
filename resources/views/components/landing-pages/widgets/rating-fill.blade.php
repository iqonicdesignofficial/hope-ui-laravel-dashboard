{{-- {{#if @partial-block}}
    {{> @partial-block }}
{{else}}
    {{#for 6}}
        {{#compare ../rating '>=' this}} --}}
            {{-- {{> modules/landing-pages/components/widgets/rating-star fill="true"}} --}}
            {{-- <x-landing-pages.widgets.rating-star fill="true" /> --}}
        {{-- {{else}} --}}
        {{-- <x-landing-pages.widgets.rating-star /> --}}
            {{-- {{> modules/landing-pages/components/widgets/rating-star}} --}}
        {{-- {{/compare}}
    {{/for}}
{{/if}} --}}


@if(isset($partial))
    {{-- @include($__env->getRenderedContent()) --}}
@else
    @for($i = 0; $i < 5; $i++)
        @if($rating > $i)
        <x-landing-pages.widgets.rating-star rating=4 fill="true" />
        @else
        <x-landing-pages.widgets.rating-star />
        @endif
    @endfor
@endif
