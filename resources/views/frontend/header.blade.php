
    <!-- start navigation -->
    <nav class="navbar top-space navbar-expand-lg navbar-boxed navbar-dark bg-black header-dark fixed-top header-reverse-scroll">
        <div class="container-fluid nav-header-container">
            <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                <a class="navbar-brand" href="index-2.html">
                    <img src="{{asset('front/images/logo-white.png')}}" data-at2x="{{asset('front/images/logo-white@2x.png')}}" class="default-logo" alt="">
                    <img src="{{asset('front/logodark')}}" data-at2x="{{asset('front/logodark')}}" class="alt-logo" alt="">
                    <img src="{{asset('front/images/logo-green-dark.png')}}" data-at2x="{{asset('front/images/logo-green-dark@2x.png')}}" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order px-lg-0">
                <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item {{ Route::currentRouteName() == 'homePage' ? 'active' : '' }}">
                            <a href="{{ route('homePage') }}" class="nav-link">Home</a>
                          
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'aboutPage' ? 'active' : '' }}">
                            <a href="{{ route('aboutPage') }}" class="nav-link">About-us</a>
                          
                           
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('servicePage') }}" class="nav-link">Services</a>
                          
                          
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'companiesPage' ? 'active' : '' }}">

                            <a href="{{ route('companiesPage') }}" class="nav-link">Companies</a>
                          
                          
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() == 'blogPage' ? 'active' : '' }}">

                            <a href="{{ route('blogPage') }}" class="nav-link">Blog</a>
                          
                          
                        </li>
                      
                        <li class="nav-item {{ Route::currentRouteName() == 'contactPage' ? 'active' : '' }}">

                            <a href="{{ route('contactPage') }}" class="nav-link">Contact</a>
                          
                          
                        </li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end pe-0 font-size-0">
                {{-- <div class="header-search-icon search-form-wrapper">
                    <a href="javascript:void(0)" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                    <!-- start search input -->
                    <div class="form-wrapper">
                        <button title="Close" type="button" class="search-close alt-font">×</button>
                        <form id="search-form" role="search" method="get" class="search-form text-start" action="https://lithohtml.themezaa.com/search-result.html">
                            <div class="search-form-box">
                                <span class="search-label alt-font text-small text-uppercase text-medium-gray">What are you looking for?</span>
                                <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                <button type="submit" class="search-button">
                                    <i class="feather icon-feather-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- end search input -->
                </div> --}}
                
            </div>
        </div>
    </nav>
   