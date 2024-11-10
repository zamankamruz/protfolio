<section class="contact pt-5 pb-0" id="contact">
        <!-- start container -->
        <div class="container">

            <div class="shape-1">
                <img src="{{asset('frontend/HTML/images/testi/shape.png')}}" alt="" class="img-fluid">
            </div>

            <div class="contact-item">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <div class="mb-4">
                                <h3>Let's Connect</h3>
                                <p class="text-muted mb-0">Looking for help? Fill the form and start a new adventure.
                                </p>
                            </div>

                            <hr>

                            <div class="info-content mt-4">
                                <h6>Address :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-home-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">744 New York Ave, Brooklyn, Kings,<br>
                                            New York 10224</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info-content mt-4 pt-2">
                                <h6>Phone :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-phone-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">(+642) 245 356 432</p>
                                        <p class="mb-0 fs-15">(+420) 336 476 328</p>
                                    </div>
                                </div>
                            </div>


                            <div class="info-content mt-4 pt-2">
                                <h6>Support :</h6>
                                <div class="d-flex">
                                    <div class="icon">
                                        <i class="mdi mdi-email-outline fs-24 text-primary"></i>
                                    </div>
                                    <div class="icon-content ms-3">
                                        <p class="mb-0 fs-15">hellosuppot@gmail.com</p>
                                        <p class="mb-0 fs-15">help@.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 ">
                        <div class="custom-form mt-4 ">
                            <form method="post" name="myForm" onsubmit="return validateForm()">

                                <h6 class="mb-0 text-muted">Let's talk</h6>
                                <h3>Enter your project details</h3>
                                <p class=" fs-15 text-muted">Content here, content here', making it look like
                                    readable English. Many desktop publishing packages.</p>
                                <p id="error-msg" style="opacity: 1;">
                                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                                </p>


                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control contact-form"
                                                placeholder="Your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email"
                                                class="form-control contact-form" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control contact-form" id="subject"
                                                placeholder="Your Subject..">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea name="comments" id="comments" rows="4"
                                                class="form-control contact-form h-auto"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-lg-12 d-grid">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-2">
                <img src="{{asset('frontend/HTML/images/testi/shape-2.png')}}" alt="" class="img-fluid">
            </div>

            <div class="shape-3 ">
                <img src="{{asset('frontend/HTML/images/testi/shape-3.png')}}" alt="" class="img-fluid">
            </div>
        </div>
        <!-- end container -->
    </section>