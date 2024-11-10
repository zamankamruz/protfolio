<nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container-fluid custom-container">
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="{{asset('frontend/HTML/images/logo-light.png')}}" class="logo-light" alt="" height="34">
                <img src="images{{asset('frontend/HTML/logo-dark.png')}}" class="logo-dark" alt="" height="34">
            </a>

            <button class="navbar-toggler me-3 order-2 ms-4" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#aboutme" class="nav-link ">About Us</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#service" class="nav-link ">Service</a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover">
                        <a href="#work" class="nav-link ">Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testi" class="nav-link">Testimonial</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                <!--end navbar-nav-->
                <div class="ms-auto ps-2 ps-lg-0" >
                    <a href="{{route('login')}}" class="btn btn-dark rounded-pill my-3 my-lg-0">Login</a>
                </div>
            </div>
        </div>
        <!--end container-->
    </nav>