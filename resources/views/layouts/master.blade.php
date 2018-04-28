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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('aos/aos.css') }}" rel="stylesheet">
    @yield('css')
    <style>
        * {
            padding: 0;
            margin: 0 auto;
        }

        .plusDiv {
            /*background-color: red;*/
            background-color: rgba(255, 0, 0, 0.4);
            width: 100px;
            height: 100px;
            /*opacity: 0.3;
            filter: alpha(opacity=50); !* For IE8 and earlier *!*/
            position: absolute;
            left: 665px;
            top: 500px;
        }

        .closeDiv {
            /*background-color: red;*/
            background-color: rgba(255, 0, 0, 0.4);
            width: 100px;
            height: 100px;
            /*opacity: 0.3;
            filter: alpha(opacity=50); !* For IE8 and earlier *!*/
            position: absolute;
            left: 665px;
            top: 500px;
        }

        .closeDiv1 {
            /*background-color: red;*/
            background-color: rgba(255, 0, 0, 0.7);
            width: 750px;
            height: 600px;
        }

        .backImage {
            /*width: 750px;
            height: 600px;*/
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 706.656px;
        }

        .bg_red, .bg_red1, .bg_red2 {
            background-color: rgba(255, 0, 0, 0.6);
        }

        .paddingRemove {
            padding: 0;
            margin: 0 auto;
            width: 1200px;
        }

        .blackBox, .blackBox1, .blackBox2 {
            text-align: center;
            padding-top: 328.5px;
            padding-bottom: 325px;
            background: #000000;
            color: #fff;
        }

        .blackBox h1, .blackBox1 h1, .blackBox2 h1 {
            font-size: 40px;
            font-style: italic;
            font-weight: bold;
        }

        .innerText, .innerText1, .innerText2 {
            padding: 100px;
            color: #fff;
        }

        .innerTextTitle {
            font-size: 30px;
            font-style: italic;
            font-weight: bold;
        }

        .innerTextSubTitle {
            font-size: 20px;
            font-style: italic;
            font-weight: bold;
            color: red;
        }

        .button {
            background-color: transparent;
            border: 2px solid #fff;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        body {
            font-family: sans-serif;
            color: #000000;
            font-size: 14px;
        }

        .btn-round {
            width: 100px;
            height: 100px;
            border-radius: 100px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .btn-square {
            width: 100px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.6);
            /* position: absolute;
             left: 482px;
             top: 607px;*/
            z-index: 9999;
            float: left;
            margin-top: 607px;

        }

        .btn-square1 {
            width: 100px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.6);
            /*position: absolute;
            left: 588px;
            top: 607px;*/
            z-index: 9999;
            float: right;
            margin-top: 607px;

        }

        .btn-square2 {
            width: 100px;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.6);
            /*position: absolute;
            left: 481px;
            top: 607px;*/
            z-index: 9999;
            float: right;
            margin-top: 607px;

        }

        .close {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 50px;
            top: 25px;
            left: -25px;
            overflow: hidden;
        }

        .close::before, .close::after {
            content: '';
            position: absolute;
            height: 2px;
            width: 100%;
            top: 50%;
            left: 0;
            margin-top: -1px;
            background: #fff;
        }

        .close::before {
            transform: rotate(0deg);
        }

        .close::after {
            transform: rotate(90deg);
        }

        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes plusButton {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, -135deg);
                transform: rotate3d(0, 0, 1, -135deg);
                background-color: rgba(255, 0, 0, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                background-color: rgba(255, 255, 255, 0.6);
            }
        }

        @keyframes plusButton {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                background-color: rgba(255, 255, 255, 0.6);
            }
        }

        .plusButton {
            -webkit-animation-name: plusButton;
            animation-name: plusButton;
        }

        @-webkit-keyframes closeButton {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                background-color: rgba(255, 255, 255, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
            }
        }

        @keyframes closeButton {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: none;
                transform: none;
                background-color: rgba(255, 255, 255, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
            }
        }

        .closeButton {
            -webkit-animation-name: closeButton;
            animation-name: closeButton;
        }

        @-webkit-keyframes circleShape {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                background-color: rgba(255, 255, 255, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
                border-radius: 100px;
            }
        }

        @keyframes circleShape {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                background-color: rgba(255, 255, 255, 0.6);
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
                border-radius: 100px;
            }
        }

        .circleShape {
            -webkit-animation-name: circleShape;
            animation-name: circleShape;
        }

        @-webkit-keyframes squareShape {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
                border-radius: 100px;
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                background-color: rgba(255, 255, 255, 0.6);
                border-radius: 0px;
            }
        }

        @keyframes squareShape {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 135deg);
                transform: rotate3d(0, 0, 1, 135deg);
                background-color: rgba(255, 0, 0, 0.6);
                border-radius: 100px;
            }
            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                background-color: rgba(255, 255, 255, 0.6);
                border-radius: 0px;
            }
        }

        .squareShape {
            -webkit-animation-name: squareShape;
            animation-name: squareShape;
        }

        .leftDiv {
            width: 581px;
            float: left;
        }

        .rightDiv {
            width: 482px;
            float: left;
        }

        .leftDiv1 {
            /*width: 681px;*/
            width: 51%;
            float: left;
        }

        .rightDiv1 {
            /*width: 668px;*/
            width: 49%;

            float: right;
        }

        .titleStyle {
            font-size: 36px;
            font-weight: bold;
            font-style: italic;
        }

        .subTitleColor {
            color: #0000002e;
            font-style: italic;
        }

    </style>
</head>
<body>

<div id="app">
    {{--@include('partials/utility/preloader')--}}
    @include('partials/common/header')
    @include('partials/common/nav')
    @yield('content')
    @include('partials/common/footer')
</div>
<!-- /#app -->

<!-- JS -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('aos/aos.js')}}"></script>
<script src="{{asset('js/multislider.min.js')}}"></script>
<script>
    $(window).on('load', function () {
        AOS.init({
            easing: 'ease-out', duration: 1100, disable: function () {
                var maxWidth = 1020;
                return window.innerWidth < maxWidth;
            }
        });
    });
</script>

<script>

    $(function () {

        $('.blackBox').hide();
        $('.leftpartHide').show();
        $('.innerText').hide();
        $(".btn-square").click({animateIn: "circleShape", animateOut: "squareShape"}, animate_function);

        function animate_function(event) {
            var info = $(this);
            var sectionDIv = info.closest('.sectionDiv');
            sectionDIv.closest('.row').find('.blackBox').toggle();
            sectionDIv.closest('.row').find('.leftpartHide').toggle();
            sectionDIv.closest('.row').find('.backImage').toggleClass('bg_red');
            sectionDIv.closest('.row').find(".innerText").toggle('show');

            if ($(this).hasClass(event.data.animateIn)) {
                $(this).removeClass(event.data.animateIn).addClass(event.data.animateOut);
            }
            else if ($(this).hasClass(event.data.animateOut)) {
                $(this).removeClass(event.data.animateOut).addClass(event.data.animateIn);
            }
            else {
                $(this).addClass('animated ' + event.data.animateIn);
            }
        }


        //do something
        $('.blackBox1').hide();
        $('.innerText1').hide();
        $('.bg_red1').hide();
        $(".btn-square1").click({animateIn: "circleShape", animateOut: "squareShape"}, animate_function1);

        function animate_function1(event) {
            var info = $(this);
            var sectionDIv = info.closest('.sectionDiv1');
            sectionDIv.toggleClass('bg_red1');
            sectionDIv.find(".innerText1").toggle();
            sectionDIv.closest('.row').find('.rightshowDiv1').toggle();
            sectionDIv.closest('.row').find('.blackBox1').toggle();
            if ($(this).hasClass(event.data.animateIn)) {
                $(this).removeClass(event.data.animateIn).addClass(event.data.animateOut);
            }
            else if ($(this).hasClass(event.data.animateOut)) {
                $(this).removeClass(event.data.animateOut).addClass(event.data.animateIn);
            }
            else {
                $(this).addClass('animated ' + event.data.animateIn);
            }
        }


        $('.blackBox2').hide();
        $('.innerText2').hide();
        $('.bg_red2').hide();
        $(".btn-square2").click({animateIn: "circleShape", animateOut: "squareShape"}, animate_function2);

        function animate_function2(event) {
            var info = $(this);
            var sectionDIv = info.closest('.sectionDiv2');
            sectionDIv.toggleClass('bg_red2');
            sectionDIv.find(".innerText2").toggle();
            sectionDIv.closest('.row').find('.rightshowDiv2').toggle();
            sectionDIv.closest('.row').find('.blackBox2').toggle();

            if ($(this).hasClass(event.data.animateIn)) {
                $(this).removeClass(event.data.animateIn).addClass(event.data.animateOut);
            }
            else if ($(this).hasClass(event.data.animateOut)) {
                $(this).removeClass(event.data.animateOut).addClass(event.data.animateIn);
            }
            else {
                $(this).addClass('animated ' + event.data.animateIn);
            }
        }

        $(".btn-round").click({animateIn: "closeButton", animateOut: "plusButton"}, animate_function);

        //end do something
    });
</script>

<script>
    // For Multiple Item Client Slider
    $('#basicSlider').multislider({
        continuous: true,
        duration: 2000
    });
    $('#mixedSlider').multislider({
        duration: 750,
        interval: 3000
    });
</script>
@yield('app-scripts')
</body>
</html>