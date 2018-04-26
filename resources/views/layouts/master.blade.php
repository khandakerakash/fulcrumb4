<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home | @yield('title')</title>

    <!-- FONT AWESOME CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

<div id="app">
    {{--@include('partials/utility/preloader')--}}
    @include('partials/common/header')
    @include('partials/common/nav')
    @yield('content')

    {{--@include('partials/common/footer')--}}
</div>
<!-- /#app -->

<!-- JS -->
<script src="{{asset('js/app.js')}}"></script>
@yield('app-scripts')

</body>
</html>