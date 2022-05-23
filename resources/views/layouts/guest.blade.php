<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Typography CSS -->
        <link rel="stylesheet" href="css/typography.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        
        {{-- Content --}}
            {{ $slot }} 
        {{-- End Content --}}
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="js/smooth-scrollbar.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/custom.js"></script>
    </body>
</html>