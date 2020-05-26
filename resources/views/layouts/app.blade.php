<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bege -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @if(request()->is('admin*'))
        <!-- Css Admin -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @else
        <!-- Css Bege -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}} ">
        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-plugins-call.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo.png">
</head>
<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div id="app" class="wrapper home-three home-four">
        @include('layouts.header')
        <main id="main">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
</body>

<!-- Scripts -->
@if(request()->is('admin*'))
    <script src="{{ asset('js/app.js') }}" defer></script>
@else
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-3.2.1.min.js') }}"><\/script>')</script>
    <!-- Popper min js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap min js  -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- nivo slider pack js  -->
    <script src="{{ asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- All plugins here -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Main js  -->
    <script src="{{ asset('js/main.js') }}"></script>
@endif

</html>
