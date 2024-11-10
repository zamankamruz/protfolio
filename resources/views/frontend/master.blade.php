<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Protfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" " />
    <meta name="keywords" content="" />
    <meta content="Themesdesign" name="author" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/bootstrap.min.css')}}" type="text/css" id="bootstrap-style" />

    <!-- Material Icon Css -->
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/materialdesignicons.min.css')}}" type="text/css" />

    <!-- Unicon Css -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/tiny-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/tiny-slider.css.map')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/swiper.min.css')}}" type="text/css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('frontend/HTML/css/style.min.css')}}" type="text/css" />


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMw1je47uTOC3qkFxtlz5q3TwThSx5WbDe5Sgtc" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha384-qRTh9B0B6I4/jXfaYXjtF1ftUbHod0MbT6Aey5oZ5mAzbrD5+Kv+I1ctFpiA7Gp5" crossorigin="anonymous">




</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">

    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-end">
        <i class="uil uil-brightness mode-dark mx-auto"></i>
        <i class="uil uil-moon bx-spin mode-light"></i>
    </a>


    <!--Navbar Start-->
     @include('frontend.componet.navber')
    <!-- Navbar End -->


    
    <!-- home section -->

    @include('frontend.componet.hero')
    <!-- end home section -->



    <!-- about-me section -->
    @include('frontend.componet.about')
    <!-- end about-me -->


    <!-- start service -->
    @include('frontend.componet.service')
    <!-- end service -->



    <!-- start counter -->
    @include('frontend.componet.counter')
    <!-- end counter -->



    <!-- start my-work -->
    @include('frontend.componet.work')
    <!-- end my-work -->


    <!-- start pricing -->
    @include('frontend.componet.pricing')
    <!-- end pricing -->



    <!-- start testimonial -->
    @include('frontend.componet.testimonial')
    <!-- end testimonial -->


    <!-- start contact -->
    @include('frontend.componet.contact')

    <!-- end contact -->


    <!-- start footer -->
    @include('frontend.componet.footer')

    <!-- end footer -->


    <!--Bootstrap Js-->
    <script src="{{asset('frontend/HTML/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Slider Js -->
    <script src="{{asset('frontend/HTML/js/tiny-slider.js')}}"></script>
    <script src="{{asset('frontend/HTML/js/swiper.min.js')}}"></script>

    <!-- conter -->
    <script src="{{asset('frontend/HTML/js/counter.init.js')}}"></script>

    <!-- App Js -->
    <script src="{{asset('frontend/HTML/js/app.js')}}"></script>

</body>

</html>