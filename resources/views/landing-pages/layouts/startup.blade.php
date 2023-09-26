<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/hope-ui.css?v=1.0') }}">
        <link rel="stylesheet" href="{{ asset('css/landing-pages.css') }}">

    </head>
    <body class="landing-pages " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
        <div id="loading">
            @include('landing-pages.components.partials.header-2')
        </div>
        <div class="wrapper">
            {{ $slot }}
        </div>
        @if($isFooter1)
            @include('landing-pages.components.partials.footer-one')
        @elseif ($isFooter2)
            @include('landing-pages.components.partials.footer-two')
        @else
            @include('landing-pages.components.partials.footer')
        @endif
            @include('landing-pages.components.partials.scripts')
    </body>
</html>
