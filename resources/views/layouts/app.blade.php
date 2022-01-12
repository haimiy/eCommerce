<!DOCTYPE html>
<html lang="en">
<!-- molla/index-4.html  22 Nov 2019 09:53:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-4.css') }}">

    @yield('css')
</head>
<body>
    <div class="page-wrapper">
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div><!-- End .page-wrapper -->

        @include('layouts.other')
        
        @include('layouts.login_register')

     <!-- Plugins JS File -->
     <script src="{{  asset('assets/js/jquery.min.js') }}"></script>
     <script src="{{  asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.waypoints.min.js') }}"></script>
     <script src="{{  asset('assets/js/superfish.min.js') }}"></script>
     <script src="{{  asset('assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
     <script src="{{  asset('assets/js/bootstrap-input-spinner.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.plugin.min.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{  asset('assets/js/jquery.countdown.min.js') }}"></script>
     <!-- Main JS File -->
     <script src="{{  asset('assets/js/main.js') }}"></script>
     <script src="{{  asset('assets/js/demos/demo-4.js') }}"></script>

     @yield('js')
 </body>
 
 <!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
 </html>
