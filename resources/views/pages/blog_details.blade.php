@extends('frontend.master')
@section('content')
<section class="blog-right-side-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                <div class="row">
                    <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                        <ul class="list-unstyled margin-2-rem-bottom">
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a href="blog-grid.html">09 January 2020</a></li>
                            <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-folder text-fast-blue margin-10px-right"></i><a href="blog-grid.html">Creative</a></li>
                            <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a href="blog-grid.html">Shane doe</a></li>
                        </ul>
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">Asia-North Europe rates sinking again as GRIs 'run out of steam</h5>
                        <img src="{{ asset('front/images/blog-img54.jpg') }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                      
                        
                        <p>Ocean carriers are giving back their recent Asia-North Europe FAK rate increases via heavy discounts for October shipments from China.</p>
                        <p>Indeed, shippers are receiving rate offers from major carriers, valid until 15 October, from China to Antwerp, Rotterdam and Hamburg at less than $1,000 per 40ft – with rates for UK ports further discounted.</p>
                       <p>With a prediction that the rate increases on the tradelane would “relatively quickly run out of steam”, the August edition of MSI’s Horizon report cites the “gargantuan supply influx” of newbuild ultra-large container vessels being phased into service loops as the principal cause.</p>
                       
                 
                 
                 
                    </div>

              
                    <div class="col-12 text-center elements-social social-icon-style-09 mx-auto">
                        <ul class="medium-icon">
                            <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            {{-- <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li> --}}
                            <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                            <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                            {{-- <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fab fa-behance"></i><span></span></a></li> --}}
                        </ul>
                    </div>                            
                </div>
            </div>
            <!-- start sidebar -->
            <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                <div class="d-inline-block w-100 margin-5-rem-bottom">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-25px-bottom">Search posts</span>
                    <form id="search-form" role="search" method="get" action="https://lithohtml.themezaa.com/search-result.html">
                        <div class="position-relative">
                            <input class="search-input medium-input border-color-medium-gray border-radius-4px mb-0" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off" />
                            <button type="submit" class="bg-transparent btn text-fast-blue position-absolute right-5px top-8px text-medium md-top-8px sm-top-10px search-button"><i class="feather icon-feather-search ms-0"></i></button>
                        </div> 
                    </form>
                </div>
                <div class="border-all border-color-medium-gray border-radius-4px padding-40px-all text-center margin-5-rem-bottom xs-margin-35px-bottom">
                    <a href="about-me.html"><img src="images/avtar29.jpg" alt="" class="rounded-circle margin-5px-bottom w-100px d-block mx-auto"/></a>
                    <a href="blog-grid.html" class="text-extra-dark-gray alt-font font-weight-500 margin-20px-top d-inline-block text-medium">Baconi Group</a>
                    {{-- <span class="text-medium d-block line-height-18px margin-20px-bottom">Co-founder</span> --}}
                    <p>Through solid affiliations with global firms, Baconi Group is your pillar for success in the Levant and wider Middle East.</p>
                    <div class="social-icon-style-02 text-center">
                        <ul class="extra-small-icon">
                            <li class="mx-0"><a class="facebook" href="http://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li class="mx-0"><a class="dribbble" href="http://dribbble.com/" target="_blank"><i class="fab fa-linkedin"></i><span></span></a></li>
                            {{-- <li class="mx-0"><a class="twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li> --}}
                            <li class="mx-0"><a class="instagram" href="http://instagram.com/" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Services</span>
                    <ul class="list-style-07 list-unstyled">
                        <li><a href="blog-grid.html">Transportation and Logistics</a></li>
                        <li><a href="blog-grid.html">Consultancy
</a></li>
                        <li><a href="blog-grid.html">Protection & Indemnity</a></li>
                     
                    </ul>
                </div>
                <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                    <ul class="latest-post-sidebar position-relative">
                        <li class="d-flex wow animate__fadeIn" data-wow-delay="0.2s">
                            <figure class="flex-shrink-0">
                                <a href="blog-post-layout-01.html"><img class="border-radius-3px" src="{{ asset('front/images/blog-img68.jpg') }}" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1">
                                <a href="blog-post-layout-01.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Fashion is anything</a>
                                <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                            </div>
                        </li>
                        <li class="d-flex wow animate__fadeIn" data-wow-delay="0.4s">
                            <figure class="flex-shrink-0">
                                <a href="blog-post-layout-02.html"><img class="border-radius-3px" src="{{ asset('front/images/blog-img110.jpg') }}" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1">
                                <a href="blog-post-layout-02.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Design transcends </a>
                                <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                            </div>
                        </li>
                        <li class="d-flex wow animate__fadeIn" data-wow-delay="0.6s">
                            <figure class="flex-shrink-0">
                                <a href="blog-post-layout-03.html"><img class="border-radius-3px" src="{{ asset('front/images/blog-img126.jpg') }}" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1">
                                <a href="blog-post-layout-03.html" class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">Never give in except</a>
                                <span class="text-medium d-block line-height-22px">Lorem ipsum is simply as dummy text of the...</span>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </aside>
            <!-- end sidebar -->
        </div>
    </div>
</section>
<!-- end blog content section -->
<!-- start section -->
<section class="bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-md-6 text-center margin-5-rem-bottom wow animate__fadeIn">
                <span class="alt-font font-weight-500 text-uppercase d-inline-block">You may also like</span>
                <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related posts</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-clean blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-01.html"><img src="{{ asset('front/images/latest-news-img25.jpg') }}" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">23 February 2020</a>
                                <a href="blog-post-layout-01.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Build perfect websites</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-02.html"><img src="{{ asset('front/images/latest-news-img17.jpg') }}" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">18 February 2020</a>
                                <a href="blog-post-layout-02.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Beautiful layouts design</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                            <div class="blog-post-image bg-gradient-fast-blue-purple">
                                <a href="blog-post-layout-03.html"><img src="{{ asset('front/images/latest-news-img25.jpg') }}" alt="">
                                    <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="post-details padding-30px-all xl-padding-25px-lr">
                                <a href="blog-grid.html" class="post-author text-medium text-uppercase">23 January 2019</a>
                                <a href="blog-post-layout-03.html" class="text-extra-dark-gray font-weight-500 alt-font d-block">Fashion is not something</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
    </div>
</section>
    @endsection