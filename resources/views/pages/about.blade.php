@extends('frontend.master')
@section('content')
   <!-- start page title -->
   <section class="parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('front/images/about-us-bg.jpg')}}');">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                <h1 class="alt-font text-white opacity-6 margin-20px-bottom">About our company</h1>
                <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">We create Lives with every Shipment!</h2>
            </div>
            <div class="down-section text-center"><a href="#about" class="section-link">
         </a></div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pe-lg-0 d-flex md-margin-30px-bottom">
                <div class="w-100 md-h-700px sm-h-550px xs-h-450px cover-background" style="background-image:url('{{ asset('front/images/about-us-img-07.jpg')}}'); height:800px"></div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 ps-lg-0 d-flex sm-margin-30px-bottom">
                <div class="justify-content-center w-100 d-flex flex-column bg-fast-blue padding-5-half-rem-lr lg-padding-3-rem-lr md-padding-4-rem-all">
               
                    <span class="text-extra-large alt-font font-weight-500 text-white margin-20px-bottom d-block">Who we are</span>
                    <p class="text-white opacity-7">Baconi Group Holding is one of the largest diversified holding groups in the MENA region, with several firms specialized in different sectors, including transportation and logistics, marine & cargo surveyors, and oil and gas consultancy.</p>
                    <p class="text-white opacity-7">With a solid presence throughout the Levant and the wider Middle East, Baconi Group Holding supports businesses in realizing growth through its comprehensive services, visionary management, knowledgeable investment team, and motivation to bring added value and distinction to its partners.</p>
                  
                  
                    <p class="text-white opacity-7">Our dynamic team of professionals, hands on approach to management and technological edge, enable Baconi Group Holding to stay ahead of market and industry trends, and adapt to our ever changing environment.

                    </p>
                   
                    <p class="text-white opacity-7">Each of the companies within Baconi Group Holding is a leader in its respective sector and is renowned for overall efficiency and effective specialized solutions. With solid affiliations with global firms, Baconi Group Holding is your pillar for success in the Levant and wider Middle East.

                    </p>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-10 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">Principles</h3>
                {{-- <span class="text-extra-medium margin-15px-bottom alt-font d-block w-100">Principles</span> --}}
                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">In our pursuit of excellence, Baconi Group Holding, through its range of affiliates, has earned the trust and privilege to represent and work with several prominent multinational principles and top names in each industry:</h6>
            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 client-logo-style-01 align-items-center margin-5-half-rem-top sm-margin-5-rem-top">
            <!-- start client item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" >
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-35.png') }}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-37.png') }}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-33.png') }}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-38.png')}}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-margin-15px-bottom wow animate__fadeIn">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-39.png')}}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-34.png')}}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-40.png')}}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center wow animate__fadeIn" data-wow-delay="0.6s">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                    <a href="#"><img class="client-box-image" src="{{ asset('front/images/client-logo-36.png')}}" alt="" /></a>
                </div>
            </div>
            <!-- end client item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-light-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">Memberships</h3>

            

                <h6 class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">Each affiliate within Baconi Group Holding is a proud member of various regional syndicates as well as international associations:</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- start feature box item -->
            <div class="col-12 col-lg-3 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                     <img src="{{ asset('front/7.jpg') }}" alt="" srcset="">
                    </div>
                    {{-- <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull theme options</span>
                        <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text. Adipiscing eiusmod tempor incididunt magna.</p>
                    </div> --}}
                    <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                     <img src="{{ asset('front/7.jpg') }}" alt="" srcset="">
                    </div>
                    {{-- <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull theme options</span>
                        <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text. Adipiscing eiusmod tempor incididunt magna.</p>
                    </div> --}}
                    <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                </div>
            </div>
            <!-- end feature box item -->
            <div class="col-6 col-lg-3 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                     <img src="{{ asset('front/7.jpg') }}" alt="" srcset="">
                    </div>
                    {{-- <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull theme options</span>
                        <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text. Adipiscing eiusmod tempor incididunt magna.</p>
                    </div> --}}
                    <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                    <div class="feature-box-icon">
                     <img src="{{ asset('front/7.jpg') }}" alt="" srcset="">
                    </div>
                    {{-- <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull theme options</span>
                        <p>Lorem ipsum is simply dummy text of the printing typesetting lorem ipsum been text. Adipiscing eiusmod tempor incididunt magna.</p>
                    </div> --}}
                    <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                </div>
            </div>
         
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 md-margin-50px-bottom wow animate__fadeIn">
                <!-- start slider -->
                <div class="swiper-container white-move border-all border-width-12px border-color-white box-shadow-large border-radius-8px" data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start slider item --><div class="swiper-slide"><img src="{{ asset('front/images/about-us-img-08.jpg')}}" alt=""></div><!-- end slider item -->
                        <!-- start slider item --><div class="swiper-slide"><img src="{{ asset('front/images/about-us-img-09.jpg')}}" alt=""></div><!-- end slider item -->
                        <!-- start slider item --><div class="swiper-slide"><img src="{{ asset('front/images/about-us-img-10.jpg')}}" alt=""></div><!-- end slider item -->
                    </div>  
                    <!-- start slider navigation -->
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-01 light"><i class="feather icon-feather-arrow-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-01 light"><i class="feather icon-feather-arrow-left" aria-hidden="true"></i></div>
                    <!-- end slider navigation -->
                </div>
                <!-- end slider -->
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 wow animate__fadeIn" data-wow-delay="0.2s">
                <h5 class="alt-font text-extra-dark-gray font-weight-500">Corporate Social Responsibility</h5>
                <p>Baconi Group Holding is not only here to help your business grow. We focus on giving back to the community by being an active corporate citizen. At Baconi Group, our contribution includes monthly and yearly donations to various NPOs and charity foundations such as SOS, Rafic Al Tofol (Child protection) Association, and the Cancer Center.</p>
               <p>As for protecting the environment, Baconi Group Holding takes recycling very seriously at all offices and locations, and supports initiatives that reduce waste and encourage sustainability for a greener world.</p>
            </div>
        </div>
    </div>
</section>



<section class="big-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center margin-4-half-rem-bottom sm-margin-3-rem-bottom">
                <h3 class="text-extra-dark-gray alt-font font-weight-600">Our Team</h3>

                {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500">Creative people</h5> --}}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="swiper-container black-move swiper-pagination-bottom" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>
                    <div class="swiper-wrapper">
                        <!-- start team member slider item -->
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('front/images/home-events-conference-img-11.jpg')}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">Alexander Harvard</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">Co Founder</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- end team member slider item -->
                        <!-- start team member slider item -->
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('front/images/home-events-conference-img-07.jpg')}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">Bryan Jonhson</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">Manager</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- end team member slider item -->
                        <!-- start team member slider item -->
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('front/images/home-events-conference-img-08.jpg')}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">Jemmy Watson</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">Designer</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- end team member slider item -->
                        <!-- start team member slider item -->
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('front/images/home-events-conference-img-09.jpg')}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">Jeremy Dupont</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">Manager</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- end team member slider item -->
                        <!-- start team member slider item -->
                        <div class="swiper-slide">
                            <div class="team-style-01 text-center">
                                <figure class="border-radius-5px">
                                    <div class="team-member-image">
                                        <img alt="" src="{{ asset('front/images/home-events-conference-img-06.jpg')}}">
                                        <div class="team-overlay bg-transparent-gradient-sky-blue-pink border-radius-5px"></div>
                                    </div>
                                    <figcaption class="align-items-center justify-content-center d-flex flex-column padding-20px-lr padding-30px-tb">
                                        <span class="team-title d-block alt-font text-white">Jhon Harvard</span>
                                        <span class="team-sub-title text-small d-block text-white text-uppercase">Manager</span>
                                        <div class="social-icon w-100 position-absolute bottom-30px left-0px">
                                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/" target="_blank" class="text-white"><i class="fab fa-twitter"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- end team member slider item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection