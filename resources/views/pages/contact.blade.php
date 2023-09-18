@extends('frontend.master')
@section('content')
     <!-- start banner section -->
     <section class="py-0 parallax overlap-height" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('front/images/single-project-page-04-img01.jpg') }}');">
        <div class="opacity-light bg-medium-slate-blue"></div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 position-relative text-center one-fourth-screen d-flex flex-column justify-content-center sm-h-350px">
                <span class="text-uppercase text-small alt-font letter-spacing-5px text-white d-inline-block margin-20px-bottom font-weight-500 sm-margin-10px-bottom">Premium lifestyle brand</span>
                <h2 class="alt-font text-white font-weight-600 text-uppercase d-block mb-0">Contact us</h2>
            </div>
        </div>
    </section>
    <!-- end banner section -->
    <!-- start section -->
    <section class="overflow-visible pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center overlap-section">
                    <div class="overlap-section-inner">
                        <img class="rounded-circle sm-w-30 xs-w-40 border-all border-width-12px border-color-white box-shadow-extra-large" src="{{ asset('front/images/single-project-page-04-img02.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
<section class="big-section bg-light-gray wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-five-bottom">
                <h6 class="alt-font text-extra-dark-gray font-weight-500 wow animate__fadeIn">At Baconi Group Holding, we care about your comments, questions, and ideas.</h6>
            </div>
        </div>
        <div class="row border-top border-width-1px border-color-medium-gray">
            <div class="col-12 p-0 tab-style-07">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs justify-content-center text-center text-uppercase font-weight-500 alt-font margin-10-rem-bottom lg-margin-8-rem-bottom border-bottom border-color-medium-gray md-margin-6-rem-bottom">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#turnaroundconsulting" class="nav-link active"> Get In Touch </a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#strategicplanning">career</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#investmentplanning">Investment planning</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#expensereporting">Expense reporting</a></li> --}}
                </ul>
                <!-- end tab navigation -->
            </div>
        </div>
        <div class="container">
            <div class="tab-content">
                <!-- start tab item -->
                <div id="turnaroundconsulting" class="tab-pane fade in active show">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                                    
                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                                </div>
                                <div class="col-12">
                                    <!-- start contact form -->
                                    <form action="https://lithohtml.themezaa.com/email-templates/contact-form.php" method="post">
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                                <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                            </div>
                                            <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                                <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Your message"></textarea>
                                            </div>
                                            {{-- <div class="col text-start sm-margin-30px-bottom">
                                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                                <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                            </div> --}}
                                            <div class="col text-start sm-margin-30px-bottom">
                                                <input type="hidden" name="redirect" value="">
                                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="form-results d-none"></div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- end tab item -->
                <!-- start tab item -->
                <div id="strategicplanning" class="tab-pane fade">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">

                                    <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">We are always looking for talented and professional specialists with a passion for progress in the region. If you have expertise in one of the fields we operate in and want to be part of Baconi Group Holding.</span>
                                </div>
                                <div class="col-12">
                                    <!-- start contact form -->
                                    <form action="https://lithohtml.themezaa.com/email-templates/contact-form.php" method="post">
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                                <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                               
                                                <input class="medium-input bg-white margin-25px-bottom" type="tel" name="phone" placeholder="Your mobile">
                                                <input class="medium-input bg-whiterequired mb-0" type="file" name="file" placeholder="Your email address">
                                            </div>
                                            <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                                <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Your message"></textarea>
                                            </div>
                                            {{-- <div class="col text-start sm-margin-30px-bottom">
                                                <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                                <label for="terms_condition" class="text-small d-inline-block align-top w-85">I accept the terms & conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                            </div> --}}
                                            <div class="col text-start sm-margin-30px-bottom">
                                                <input type="hidden" name="redirect" value="">
                                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="form-results d-none"></div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab item -->
           
            </div>
        </div>
    </div>
</section>

        <!-- start section -->
        <section class="bg-extra-dark-gray fancy-box-background big-section cover-background" style="background-image: url('{{ asset('front/images/contact-us-classic-01.jpg') }}');">
            <div class="opacity-very-light opacity-0-half z-index-minus-1 bg-gradient-sky-blue-pink"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 col-md-9 text-center margin-5-half-rem-bottom sm-margin-3-half-rem-bottom">
                        <span class="alt-font text-extra-medium text-white opacity-8 margin-10px-bottom d-block">Fill out the form and we’ll be in touch soon!</span>
                        <h4 class="alt-font text-white font-weight-600">Baconi offices round the world</h4>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="bg-banner-image cover-background" style="background-image: url('{{ asset('front/images/contact-us-classic-bg-1.jpg') }}');"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div>
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('front/images/contact-us-img-flag-01.png') }}" class="w-35px d-block" alt="contact us img flag-01" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">Lebanon-Beirut</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">401 Broadway, 24th Floor Orchard View, London, UK</p>
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: +961 4 521 772</span>
                            <a href="mailto:info@yourdomain.com" class="text-fast-blue text-decoration-underline">info@baconigroup.com</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item md-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="bg-banner-image cover-background" style="background-image: url({{ asset('front/images/contact-us-classic-02.jpg')}})"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div>
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('front/images/contact-us-img-flag-02.png')}}" class="w-35px d-block" alt="contact us img flag-02" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">Nicosia, Cyprus</span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">27 Eden Walk Eden Centre Orchard View, Paris, France</p>
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: 123 456 7890</span>
                            <a href="mailto:info@yourdomain.com" class="text-fast-blue text-decoration-underline"></a>info@baconigroup.com
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 fancy-box-item">
                        <div class="bg-banner-image cover-background" style="background-image: url(images/contact-us-classic-03.jpg)"><div class="opacity-medium bg-gradient-sky-blue-pink"></div></div>
                        <div class="feature-box feature-box-left-icon-middle feature-box-dark-hover padding-4-rem-lr padding-3-rem-tb bg-white border-radius-5px overflow-hidden lg-padding-3-rem-lr">
                            <div class="feature-box-icon margin-15px-right">
                                <img src="{{ asset('front/images/contact-us-img-flag-03.png')}}" class="w-35px d-block" alt="contact us img flag-03" />
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font d-block font-weight-500 text-extra-dark-gray">Aqaba, Jordan
                                </span>
                            </div>
                            <div class="bg-medium-gray margin-20px-tb w-100 h-1px"></div>
                            <p class="margin-10px-bottom w-85 lg-w-100 sm-w-75 xs-w-85">523 North Stockport Road Canal Bridge, Toronto, Canada</p>
                            <span class="d-block font-weight-500 margin-10px-top text-extra-dark-gray line-height-20px w-100">Phone: 123 456 7890</span>
                            <a href="mailto:info@yourdomain.com" class="text-fast-blue text-decoration-underline">info@baconigroup.com</a>
                            <div class="feature-box-overlay bg-extra-dark-gray"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 text-center text-sm-end xs-margin-20px-bottom">
                        <span class="alt-font font-weight-500 text-extra-large text-extra-dark-gray d-block letter-spacing-minus-1-half">Connect with social media</span>
                    </div>
                    <div class="col-12 col-md-2 d-none d-md-block">
                        <span class="w-100 h-1px d-block bg-medium-gray"></span>
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-start">
                        <ul class="small-icon">
                            <li><a class="facebook text-extra-dark-gray text-sm-start" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            {{-- <li><a class="twitter text-extra-dark-gray text-sm-start" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
                            <li><a class="instagram text-extra-dark-gray text-sm-start" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="linkedin text-extra-dark-gray text-sm-start" href="http://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col h-600px p-0 md-h-450px xs-h-300px">
                        <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection