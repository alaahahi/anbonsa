<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{app()->getLocale()=='ar'?'rtl':'ltr'}}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> 
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="/assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="/assets/fonts/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/assets/css/theme-dark.css">

        <!-- Title -->
        <title>Bonsa - SEO & Marketing Company HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        
        

    
    
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">
        <div class="app">
        @inertia

        <!-- Jquery Min JS -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="/assets/js/meanmenu.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="/assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="/assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="/assets/js/custom.js"></script>
    
        </div>
    </body>
</html>
