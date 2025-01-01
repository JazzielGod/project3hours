<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Herencia --}}
    {{-- <title>Jazz - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')"> --}}
    {{-- Components --}}
    <title>Jazz - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script> --}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- @include('partials.navigation') --}}
    <x-layouts.navigation />
    {{-- <pre>{{ $sum }}</pre> --}}

    @if (@session('status'))
        <div class="">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

    
</body>
</html>