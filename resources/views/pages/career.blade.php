@extends('frontend.master')
@section('content')
<section class="bg-gradient-light-orange-light-pink">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-end extra-small-screen align-items-end">
            <div class="w-100 w-md-50 page-title-extra-small">
                <h1 class="alt-font text-extra-dark-gray position-relative padding-90px-left padding-15px-right sm-padding-55px-left mb-md-0 sm-margin-20px-bottom"><span class="page-title-separator-line bg-black w-70px sm-w-40px"></span>Contact us modern</h1>
            </div>
            <div class="w-100 w-md-50">
                <h4 class="alt-font font-weight-500 text-extra-dark-gray mb-0">We create brand new corporate identities</h4>
            </div>
        </div>
    </div>
</section>
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                        
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray">Are you ready to work with us?</h4>
                        <p class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">

                            We are always looking for talented and professional specialists with a passion for progress in the region. If you have expertise in one of the fields we operate in and want to be part of Baconi Group Holding, please fill in our application form:
                        </p>
                    </div>
                    <div class="col-12">
                        <!-- start contact form -->
                        <form action="https://lithohtml.themezaa.com/email-templates/contact-form.php" method="post">
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                    <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                    <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                    <input class="medium-input bg-white margin-25px-bottom" type="tel" name="phone" placeholder="Your mobile">
                                    <input class="medium-input bg-white  mb-0" type="file" name="phone" placeholder="CV">
                                  

                                </div>
                                <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                    <textarea class="medium-textarea h-300px bg-white" name="comment" placeholder="Your message"></textarea>
                                </div>
                              
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
</section>
@endsection