<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== Page Title ========== -->
    <title>Global Marketing - @yield('title')</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/mega-menu/mega_menu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/assets/css/style-customizer.css')}}" />

    <!-- ========== End Stylesheet ========== -->
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
    <!-- Start Navigation -->
    @include('frontend.layouts.navbar')
    <!-- End Navigation -->
    <!-- End Header -->
    @yield('content')
    <!-- Start Footer 
    ============================================= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

</body>

</html>