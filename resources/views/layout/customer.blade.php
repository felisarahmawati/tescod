<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords"
        content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/logo.png') }}">

    <title>L-Ebook</title>

    <!-- Mobile Specific Meta-->
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="/../../assets/user/vendors/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/bootstrap/bootstrap.css') }}">
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Iconfont Css -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/fonts/gilroy/font-gilroy.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/magnific-popup/magnific-popup.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/animated-headline/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/owl/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/vendors/owl/assets/owl.theme.default.min.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/user/css/woocomerce.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/notyf/notyf.min.css') }}">

    <!-- Iconfont Css -->
    <link rel="stylesheet" href="/../../assets/user/vendors/awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/../../assets/user/vendors/flaticon/flaticon.css">
    <link rel="stylesheet" href="/../../assets/user/fonts/gilroy/font-gilroy.css">
    <link rel="stylesheet" href="/../../assets/user/vendors/magnific-popup/magnific-popup.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="/../../assets/user/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="/../../assets/user/vendors/animated-headline/animated-headline.css">
    <link rel="stylesheet" href="/../../assets/user/vendors/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/../../assets/user/vendors/owl/assets/owl.theme.default.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/../../assets/user/css/woocomerce.css">
    <link rel="stylesheet" href="/../../assets/user/css/style.css">
    <link rel="stylesheet" href="/../../assets/user/css/responsive.css">
</head>

<body id="top-header">

    @stack('style')

    @include('layouts_user.navbar')

    <div>
        @yield('container')
        @yield('landingPageHome')
        @yield('landingPageHomeMading')
        @yield('ebook')
    </div>

    @stack('script')

    @include('layouts_user.footer')

    <script src="{{ asset('assets/user/vendors/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/notyf/notyf.min.js') }}" type="application/javascript"></script>

    <!-- Bootstrap 5:0 -->
    <script src="{{ asset('assets/user/vendors/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/user/vendors/bootstrap/bootstrap.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/user/vendors/counterup/waypoint.js') }}"></script>
    <script src="{{ asset('assets/user/vendors/counterup/jquery.counterup.min.js') }}"></script>
    <!--  Owl Carousel -->
    <script src="{{ asset('assets/user/vendors/owl/owl.carousel.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('assets/user/vendors/isotope/jquery.isotope.js') }}"></script>
    <script src="{{ asset('assets/user/vendors/isotope/imagelaoded.min.js') }}"></script>
    <!-- Animated Headline -->
    <script src="{{ asset('assets/user/vendors/animated-headline/animated-headline.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/user/vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/user/js/script.js') }}"></script>



</body>

</html>
