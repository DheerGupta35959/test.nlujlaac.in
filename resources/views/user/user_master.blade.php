<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Legal Aid and Awareness Committee, NLUJ – Legal Aid and Awareness Committee, NLUJ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{asset('/../../upload/Logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/../frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/../frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('../frontend/css/style.css')}}" rel="stylesheet">  
</head>

<body>
    <!-- Header Start -->
    @include('user.body.header')
    <!-- Header End -->


    <!-- Carousel Start -->
	@include('user.body.carousel')
    <!-- Carousel End -->    
    
    <!-- Main Content Start -->
    @yield('user')
    <!-- Main Content End -->

    <!-- Footer Start -->
	@include('user.body.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('./../frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('./../frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('./../frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./../frontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('./../frontend/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('./../frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/../frontend/js/main.js')}}"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    
</body>

</html>