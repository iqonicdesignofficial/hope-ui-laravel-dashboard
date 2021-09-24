@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
        </div>
    </div>
@endif
