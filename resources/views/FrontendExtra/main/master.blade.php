<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{('Frontend_extra/assets/img/favicon.ico')}}" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{('Frontend_extra/assets/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{('Frontend_extra/assets/lib/slick/slick-theme.css')}}" rel="stylesheet">
        @notifyCss



        <!-- Template Stylesheet -->
        <link href="{{('Frontend_extra/assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        
        <!-- Nav Bar Start -->
        @include('FrontendExtra.fixed.nav')
        @include('FrontendExtra.fixed.searchbar')

        <!-- Footer End -->
        <x:notify-messages />
        @yield('content')
        
        <!-- Footer Bottom Start -->
       @include('FrontendExtra.fixed.footer')
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{('Frontend_extra/assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{('Frontend_extra/assets/lib/slick/slick.min.js')}}"></script>
        
        <!-- Template Javascript -->
        <script src="{{('Frontend_extra/assets/js/main.js')}}"></script>
        @notifyJs
    </body>
</html>
