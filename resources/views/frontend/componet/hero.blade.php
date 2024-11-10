<section class="home" id="home" style="background-image: url(./images/bg-home.png);">
        <!-- start container -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-slider" id="home-slider">
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-item">
                                        <p class="text-warning fw-semibold mb-0">{{$homeSection->title}}</p>
                                        <div class="home-title mb-0 fw-bold h1">
                                            <span class="typewrite " data-period="2000"
                                                data-type='[ "{{$homeSection->subtitle}}" ]'>
                                                <span class="wrap text-dark"></span>
                                            </span>
                                        </div>
                                        <p class="mt-3 text-muted">{{$homeSection->description}}</p>


                                        <div class="home-link d-inline-block mt-5">
                                            <div class="d-flex align-items-center">
                                                <div class="btn-link ">
                                                    <a href="" class="text-dark h6">
                                                        <div class="read-link btn-link-warning"><span>See my work
                                                            </span></div>
                                                    </a>
                                                </div>
                       
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="my-image">
                                        <img src="{{$homeSection->profile_image}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>