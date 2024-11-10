<section class="section about-me" id="aboutme">
        <!-- container -->
        <div class="container">
            <div class="about-box">
                <div class="row">

                    <div class="col-lg-6 position-relative">
                        <div class="image-round"></div>
                        <div class="about-image p-4 pb-0">
                            <img src="{{asset('frontend/HTML/images/about.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-item p-5">
                        <h2 class="display-5 fw-semibold">{{ $about->title ?? 'Default Title' }}</h2>
                        <p class="text-muted fs-14">{{ $about->description ?? 'Default description content.' }}</p>
                            <ul class="nav nav-pills mb-3 mt-4 pt-2" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Skills</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Experience</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">


                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">

                                    @foreach ($skills as $skill)

                                    <div class="skill-item mt-4 pt-2">
                                        <div class="d-flex justify-content-between">
                                            <h6>{{$skill->name}}</h6>
                                            <h6>{{$skill->percentage}}%</h6>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->percentage}}%;"></div>
                                        </div>
                                    </div>

                                    @endforeach

                                </div>


                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="experience">
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            <div class="col-10">
                                                @foreach ($experiences as $experience)
                                                
                                                
                                                <div class="mt-4 pt-2">

                                                    <h5>{{$experience->title}}</h5>
                                                    <p class="text-muted fs-15">{{$experience->start_date}}-{{$experience->years_experience}} year Experience</p>
                                                    <p class="text-muted fs-15">{{$experience->description}}</p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="experience">
                                    @foreach ($educations as $education)
                                        <div class="row position-relative">
                                            <div class="col-2">
                                                <div class="border-left"></div>
                                            </div>
                                            
                                            
                                            
                                            <div class="col-10">
                                                <div class="mt-4 pt-2">
                                                    <h5>{{$education->title}}</h5>
                                                    <p class="text-muted fs-15 mb-0">{{$education->start_year}}-{{$education->end_year}} ({{$education->duration}} year)</p>
                                                    <p class="text-muted fs-15 mb-0">{{$education->description}}</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        @endforeach
                                 
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

