<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/css/jquery-ui.css">
        <link rel="stylesheet" href="/css/slick.css">
        <link rel="stylesheet" href="/css/chosen.min.css">
        <link rel="stylesheet" href="/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="/css/magnific-popup.min.css">
        <link rel="stylesheet" href="/css/lightbox.min.css">
        <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css">
        <link rel="stylesheet" href="/css/jquery.scrollbar.min.css">
        <link rel="stylesheet" href="/css/mobile-menu.css">
        <link rel="stylesheet" href="/fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="/css/style.css">

        <!-- Scripts -->
        @routes
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia



        {{--script--}}
        <script src="/js/jquery-1.12.4.min.js"></script>
        <script src="/js/jquery.plugin-countdown.min.js"></script>
        <script src="/js/jquery-countdown.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/magnific-popup.min.js"></script>
        <script src="/js/isotope.min.js"></script>
        <script src="/js/jquery.scrollbar.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
        <script src="/js/mobile-menu.js"></script>
        <script src="/js/chosen.min.js"></script>
        <script src="/js/slick.js"></script>
        <script src="/js/jquery.elevateZoom.min.js"></script>
        <script src="/js/jquery.actual.min.js"></script>
        <script src="/js/fancybox/source/jquery.fancybox.js"></script>
        <script src="/js/lightbox.min.js"></script>
        <script src="/js/owl.thumbs.min.js"></script>
        <script src="/js/jquery.scrollbar.min.js"></script>
        <script src="/js/frontend-plugin.js"></script>
    </body>
</html>
