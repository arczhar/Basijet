@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="mask flex-center">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Request service anywhere</h4>
                        <p>Request service to fix your office airconditioning unit, refrigirator, water dispenser and more right on your computer or mobile phone.</p>
                        </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{url('/argon/img/carousel/request.png') }}" class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="mask flex-center">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Stay Updated</h4>
                        <p>SRSS sends you text updates on the status of your request.</p>
                        </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{url('/argon/img/carousel/notif.png') }}" class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="mask flex-center">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Great Customer Service</h4>
                        <p>Property Management Office ensures that you are entitled to open dispute when you didn't receive your unit or it malfunctioned after service.</p>
                         </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{url('/argon/img/carousel/dispute.png') }}" class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
          <!--slide end--> 
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
            {{-- <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                    </div>
                </div>
            </div> --}}
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>

    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
