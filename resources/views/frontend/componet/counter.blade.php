<section class="section counter" id="counter">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h2>{{$achievement->title}}</h2>
                        <p class="para-width text-muted mb-0 fs-15">{{ $achievement->description }}</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                 
            @foreach ($counters as $counter)

                <div class="col-lg-3 col-md-6 mt-4 pt-2">

                   

                    <div class="counter-item">
                        <div class="counter-icon text-center">
                            <img src="{{asset('frontend/HTML/images/counter/heart.png')}}" alt="" class="img-fluid">
                        </div>
                        <div class="counter-velue text-center mt-3">
                            <h2 class="counter_value fw-bold d-inline-block mb-0" data-bs-target="{{$counter->value}}">0</h2><span
                                class="h2 fw-bold">
                        </div>
                        <div class="text-center">
                            <p class="text-muted fw-semibold fs-15">{{$counter->title}}</p>
                        </div>
                    </div>

                 

                </div>
                @endforeach
                
              

           
            </div>
        </div>
        <!-- end container -->
    </section>