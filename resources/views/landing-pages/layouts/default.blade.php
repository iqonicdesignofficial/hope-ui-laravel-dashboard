<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hope-ui.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('css/landing-pages.css') }}">

</head>

<body class="landing-pages " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <div id="loading">
        @if ($isHeader1)
            @include('landing-pages.components.partials.header-1')
        @else
            @include('landing-pages.components.partials.header-2')
        @endif
    </div>
    <div class="wrapper">
        {{ $slot }}
    </div>
    <div id="back-to-top" style="display: none;">
        <a class="btn btn-warning btn-xs p-0 position-fixed top" id="top" href="#top">
            <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 15.5L12 8.5L19 15.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </a>
    </div>
    <a class="btn btn-fixed-end btn-primary btn-icon btn-dashboard" href="../dashboard">Dashboard Demo</a>

    @include('landing-pages.components.partials.footer')
    @include('landing-pages.components.partials.scripts')
</body>

</html>
