@extends('frontend.master')
@section('content')
<section class="no-padding one-third-screen position-relative">
    <div class="opacity-full bg-gradient-fast-blue-purple z-index-0"></div>
    <div class="container h-100">
        <div class="row align-items-end justify-content-center h-100">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                <span class="margin-15px-bottom alt-font text-white opacity-8 d-block">we are a creative design studio</span>
                <h1 class="text-white alt-font font-weight-500 letter-spacing-minus-1 margin-5-rem-bottom sm-margin-3-rem-bottom">Unleash your creativity and build website</h1>
                {{-- <span class="w-1px h-80px d-inline-block bg-white margin-5-rem-bottom sm-margin-3-rem-bottom sm-h-50px"></span> --}}
            </div>
        </div>
    </div>
    <video loop="" autoplay="" controls="" muted class="html-video" poster="{{ asset('front/images/background-video-bg.jpg') }}">
        <source type="video/mp4" src="{{ asset('front/video/video.mp4') }}" />
        <source type="video/webm" src="{{ asset('front/video/video.webm') }}" />
    </video>
</section>
<!-- end section -->
<section>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">Baconi Group Holding</span>
                <h4 class="alt-font font-weight-600 text-extra-dark-gray w-95">We help our clients build value digital web solutions</h4>
                <p class="w-80 lg-w-95">Connecting Beirut to the world, one shipment at a time. Let’s optimize your supply chain today</p>
                <a href="{{ route('contactPage') }}" class="btn btn-medium btn-dark-gray margin-15px-top btn-round-edge section-link">Get in Touch<i class="feather icon-feather-arrow-right icon-very-small right-icon"></i></a>
            </div>
            <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                <figure class="image-back-offset-shadow position-right w-100">
                    <img class="border-radius-6px" src="{{ asset('front/22.jpg')}}" alt=""/>
                    {{-- <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span> --}}
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="big-section bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-seven-bottom">
                <h4 class="alt-font text-extra-dark-gray font-weight-500">Our Services</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 tab-style-03 wow animate__fadeIn" data-wow-delay="0.2s">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs justify-content-center text-center text-uppercase margin-5-rem-bottom md-margin-2-rem-bottom">
                    <li class="nav-item"><a class="alt-font font-weight-500 nav-link active" data-bs-toggle="tab" href="#starters-tab">Transportation and Logistics</a></li>
                    <li class="nav-item"><a class="alt-font font-weight-500 nav-link" data-bs-toggle="tab" href="#nonvage-tab">Protection & Indemnity</a></li>
                    <li class="nav-item"><a class="alt-font font-weight-500 nav-link" data-bs-toggle="tab" href="#vegetarian-tab">Consultancy</a></li>

                </ul>
                <!-- end tab navigation -->
                <!-- start tabs content -->
                <div class="tab-content">
                   
                    <!-- start tab content -->                                
                    <div id="starters-tab" class="tab-pane fade in active show">
                        <p class="alt-font text-extra-dark-gray font-weight-600 ">Baconi Group Holding offers global transportation and logistics services, bridging the gap between merchants and carriers by improving communication and optimizing the work process to ensure cargo gets to the right destination safely and on time.</p>
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                            <!-- start services item -->
                            <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <img src="{{ asset('/front/service.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom"> Liner Representation</span>
                                    <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-dark-purple">
                                        <li class="padding-15px-bottom border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Great environment</li>
                                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Free breakfast</li>
                                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Clean room everyday</li>
        
                                    </ul>
                                </div>
                            </div>
                            <!-- end services item -->
                            <!-- start services item -->
                            <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                                <img src="{{ asset('/front/images/our-story-img12.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Dedicated to our clients</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod incididunt.</p>

                                </div>
                            </div>
                            <!-- end services item -->
                            <!-- start services item -->
                            <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                                <img src="{{ asset('/front/images/our-story-img12.jpg') }}" alt="">
                                <div class="bg-white box-shadow-small padding-3-rem-all">
                                    <span class="text-extra-dark-gray alt-font d-block font-weight-500 margin-10px-bottom">Outstanding services</span>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod incididunt.</p>

                                </div>
                            </div>
                            <!-- end services item -->
                        </div>
                    </div>
                    <!-- end tab content -->

                    <div id="nonvage-tab" class="tab-pane fade in">
                      
                        <div class="d-flex alt-font margin-15px-bottom">
                            <span
                            class="align-self-center w-30px h-1px bg-orange margin-10px-right d-none d-md-inline-block"></span>
                                <div class="flex-grow-1 text-orange font-weight-500"><img
                                        src="{{ asset('front/favicon_sea.png') }}" alt="" srcset="">
                                    
                                    </div>


                    
                             </div>
                             <h6  class="alt-font text-extra-dark-gray margin-35px-bottom font-weight-500 xs-margin-25px-bottom">
                                Protection & Indemnity</h6>

               

                          <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-4">

                                    <img
                                    src="{{ asset('front/service.jpg') }}" alt="" />
                                </div>
                                <div class="col-12 col-lg-5 offset-lg-1 margin-30px-bottom">
                                    <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-dark-purple">
                                        <li class="padding-15px-bottom border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Baconi Group Holding offers you advisory services across a vast range of sectors in the MENA region, including oil and gas, renewable energy, industrials, and chemicals to properly guide you to make the most of the promising markets in the Levant and wider Middle East.</li>
                                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Baconi Group Holding assists you with strategy formulation and policy making. Bringing industry specific knowledge to the forefront, empowering private and public clients with insightful advice that shapes informed decision making.</li>
                                       
        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="vegetarian-tab" class="tab-pane fade in">
                      
                        <div class="d-flex alt-font margin-15px-bottom">
                            <span
                            class="align-self-center w-30px h-1px bg-orange margin-10px-right d-none d-md-inline-block"></span>
                                <div class="flex-grow-1 text-orange font-weight-500"><img
                                        src="{{ asset('front/favicon_sea.png') }}" alt="" srcset="">
                                    
                                    </div>


                    
                             </div>
                             <h6  class="alt-font text-extra-dark-gray margin-35px-bottom font-weight-500 xs-margin-25px-bottom">
                                Consultancy</h6>

               

                          <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-4">

                                    <img
                                    src="{{ asset('front/service.jpg') }}" alt="" />
                                </div>
                                <div class="col-12 col-lg-5 offset-lg-1 margin-30px-bottom">
                                    <ul class="list-style-02 alt-font font-weight-500 text-small text-uppercase text-dark-purple">
                                        <li class="padding-15px-bottom border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Baconi Group Holding offers you advisory services across a vast range of sectors in the MENA region, including oil and gas, renewable energy, industrials, and chemicals to properly guide you to make the most of the promising markets in the Levant and wider Middle East.</li>
                                        <li class="padding-15px-tb border-bottom border-color-medium-gray"><img
                                                src="{{ asset('front/favicon_sea.png') }}" class="margin-10px-right"
                                                width="25">Baconi Group Holding assists you with strategy formulation and policy making. Bringing industry specific knowledge to the forefront, empowering private and public clients with insightful advice that shapes informed decision making.</li>
                                       
        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </div>





        
     
    </div>
</section>
@endsection