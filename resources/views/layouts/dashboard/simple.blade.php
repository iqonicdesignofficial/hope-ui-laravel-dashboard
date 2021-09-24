@props(['dir'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{$dir ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{env('APP_NAME')}} | Responsive Bootstrap 5 Admin Dashboard Template</title>
    @include('partials.dashboard._head')
</head>
<body class data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0" >
    @include('partials.dashboard._body7')
</body>
</html>