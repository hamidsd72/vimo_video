<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <link href="/css/app.css" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/hover/hover.min.css" rel="stylesheet">
        <link href="/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Harmattan:wght@700&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'Harmattan', sans-serif;
            }
        </style>
        {{-- <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: 'El Messiri', sans-serif;
            }
        </style> --}}
        
        <title>VimoPlayer</title>
    </head>
    <body style="background-color: darkslategray">

        @yield('content')

        <script src="/js/app.js"></script>
        <!-- Vendor JS Files -->
        <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/assets/vendor/typed/typed.js"></script>
        <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>
    </body>
</html>
