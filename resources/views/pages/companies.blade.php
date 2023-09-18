@extends('frontend.master')
@section('content')
<div class="slider-blog-banner swiper-container black-move" data-slider-options='{ "loop": true, "centeredSlides": true, "slidesPerView": "1", "speed": 1000, "pagination": { "el": ".swiper-pagination", "clickable": true }, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "breakpoints": { "992": { "slidesPerView": "auto" } }, "effect": "slide" }'>
    <div class="swiper-wrapper">
        <!-- start slider item -->
        <div class="swiper-slide w-55"><img src="{{ asset('front/images/single-project-page-05-img-01.jpg') }}" class="w-100" alt=""/></div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class="swiper-slide w-55"><img src="{{ asset('front/images/single-project-page-05-img-02.jpg') }}" class="w-100" alt=""/></div>
        <!-- end slider item -->
        <!-- start slider item -->
        <div class="swiper-slide w-55"><img src="{{ asset('front/images/single-project-page-05-img-03.jpg') }}" class="w-100" alt=""/></div>
        <!-- end slider item -->
    </div>
    <!-- start slider pagination -->
    <!--<div class="swiper-pagination"></div>-->
    <!-- end slider pagination -->
    <!-- start slider navigation -->
    <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-left text-extra-dark-gray"></i></div>
    <div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 box-shadow-large bg-white"><i class="feather icon-feather-arrow-right text-extra-dark-gray"></i></div>
    <!-- end slider navigation -->
</div>  
</section>
<!-- end section -->
<!-- start section -->
<section class="wow animate__fadeIn">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('front/partner-1_2.png') }}" alt=""/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">Seanautics is the proud agent of ONE Line. ONE line is among the top container lines worldwide spanning oceans and continents as well as cultures and industries. ONE Line reflects the new world standard, by taking pride in its core values, including agility, teamwork, commitment and best practice.</p>
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">The Seanautics team renders the highest caliber of professionalism to provide the best possible services, standards and expertise, which ensure a consistent level of performance and personalized services to both our customers and our principal. This dedication is a reflection of the management’s extensive knowledge in the transportation industry, with experience of more than 40 years.</p>
       
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">Kindly check below link for a full range of ONE services and trade routes.</p>
            <a href="#" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top">View Website</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb ">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('front/favicon_sea.png') }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-8 col-lg-3 offset-lg-1 col-md-5 col-sm-6 md-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
            <img src="{{ asset('front/partner-1_2.png') }}"   alt=""/>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 text-center text-lg-start last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
            {{-- <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Early bird coffee identity</h5> --}}
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">Seanautics is the proud agent of ONE Line. ONE line is among the top container lines worldwide spanning oceans and continents as well as cultures and industries. ONE Line reflects the new world standard, by taking pride in its core values, including agility, teamwork, commitment and best practice.</p>
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">The Seanautics team renders the highest caliber of professionalism to provide the best possible services, standards and expertise, which ensure a consistent level of performance and personalized services to both our customers and our principal. This dedication is a reflection of the management’s extensive knowledge in the transportation industry, with experience of more than 40 years.</p>
       
            <p class="w-100 md-w-80 text-center text-lg-start md-margin-auto-lr">Kindly check below link for a full range of ONE services and trade routes.</p>
            <a href="#" class="btn btn-fancy btn-large btn-gradient-tan-geraldine btn-round-edge-small margin-25px-top">View Website</a>
        </div>
        <div class="col-12 col-md-12 text-center d-flex flex-row align-items-center margin-4-rem-tb wow animate__fadeIn">
            <span class="w-100 h-1px bg-medium-gray"></span>
            <img src="{{ asset('front/favicon_sea.png') }}" width="100" alt=""/>
            <span class="w-100 h-1px bg-medium-gray"></span>
        </div>
       
    </div>
</div>
</section>
@endsection