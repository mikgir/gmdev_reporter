<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css?family=Bentham|Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:400,700|Noto+Serif:400,400i,700,700i|Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <!-- Library -->
    <link href="{{ asset('css/lib.css') }}" rel="stylesheet">
    <!-- Custom - Common CSS -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elements.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}

</head>
<body>
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div>
<!-- Loader /- -->
<x-header></x-header>
<div class="main-container mt-lg-5">
    @yield('content')
</div>
<x-footer></x-footer>

<!-- JQuery v1.12.4 -->
<script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
<!-- Library - Js -->
<script src="{{ asset('js/lib.js') }}"></script>
<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
<!-- Library - Theme JS -->
<script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>

