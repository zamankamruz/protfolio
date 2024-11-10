<section class="section service" id="service">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    @foreach ($sections as $section)
                    
                    <div class="text-center mb-5">
                        <h6 class="mb-0 text-muted fs-15">{{$section->title}}</h6>
                        <h2>{{$section->subtitle}}</h2>
                        <p class="para-width text-muted mb-0 fs-15">{{$section->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row">

            @foreach ($services as $service)
            
            
                <div class="col-lg-4">
                    <div class="info-item box-shadow mt-4 pt-2">
                        <div class="p-4">
                            <div class="research avatar-sm bg-soft-purple text-center">
                                <i class="{{$service->icon_class}}"></i>
                            </div>
                            <h6 class="mt-4">{{$service->title}}</h6>
                            <p class="text-muted fs-15">{{$service->description}}</p>
                        </div>
                    </div>
                </div>

              


                @endforeach
               
            </div>

        </div>
        <!-- end container -->
    </section>