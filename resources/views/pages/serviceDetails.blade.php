@extends('frontend.master')
@section('content')
    <section class="h-700px sm-h-400px xs-h-300px overlap-height cover-background"
        style="background: url('{{ asset('front/images/blog-post-layout-02-img-01.jpg') }}');">
    </section>
    <!-- end section -->

    <section class="big-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8 col-lg-10 text-center overlap-gap-section pb-5">

                    <h3 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Transportation<span
                            class="text-gradient-orange-pink font-weight-600"> and </span> Logistics </h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 p-sm-0">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s"><img
                                src="{{ asset('front/service.jpg') }}" alt="" /></div>
                        <div class="col-12 col-lg-5 offset-lg-1 col-md-6 last-paragraph-no-margin wow animate__fadeIn"
                            data-wow-delay="0.4s">
                            <div class="d-flex alt-font margin-15px-bottom"><span
                                    class="align-self-center w-30px h-1px bg-orange margin-10px-right d-none d-md-inline-block"></span>
                                <div class="flex-grow-1 text-orange font-weight-500"><img
                                        src="{{ asset('front/favicon_sea.png') }}" alt="" srcset=""></div>
                            </div>

                            <h5
                                class="alt-font text-extra-dark-gray margin-35px-bottom font-weight-500 xs-margin-25px-bottom">
                                Liner Representation</h5>
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
                </div>
            </div>
            
        </div>
        
    </section>



    <section class="big-section bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center margin-six-bottom">
                    <h6 class="alt-font text-extra-dark-gray font-weight-500">Info banners style 03</h6>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                <!-- start info banner item -->
                <div class="col text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-55px-tb lg-padding-1-rem-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('front/service.jpg') }}" alt=""/>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-extra-medium font-weight-500 d-block text-extra-dark-gray margin-10px-bottom"> Liner Representation</span>
                            <p class="w-75 lg-w-85 mx-auto">Lorem ipsum is simply dummy text of the printing industry</p>
                            <span class="d-block text-golden-brown font-weight-500 text-uppercase margin-15px-top">Just $19.00</span>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-8px"></div>
                    </div>
                </div>
                <!-- end info banner item -->
                <!-- start info banner item -->
                <div class="col text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-55px-tb lg-padding-1-rem-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('front/service.jpg') }}" alt=""/>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
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
                        <div class="feature-box-overlay bg-white border-radius-8px"></div>
                    </div>
                </div>
                <!-- end info banner item -->
                <!-- start info banner item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <div class="feature-box feature-box-shadow h-100 padding-2-rem-lr padding-55px-tb lg-padding-1-rem-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('front/service.jpg') }}" alt=""/>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-extra-medium font-weight-500 d-block text-extra-dark-gray margin-10px-bottom"Linea/span>
                            <p class="w-75 lg-w-85 mx-auto">Lorem ipsum is simply dummy text of the printing industry</p>
                            <span class="d-block text-golden-brown font-weight-500 text-uppercase margin-15px-top">Just $16.00</span>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-8px"></div>
                    </div>
                </div>
                <!-- end info banner item -->
            </div>
        </div>
    </section>
@endsection
