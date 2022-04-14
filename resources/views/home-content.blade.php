@extends('home')

@section('content')
<div role="main" class="main">
    <section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
        <div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-3">
                <div class="col-lg-5 mb-5">
                    <h5 class="text-primary font-weight-bold mb-1">PORTO HTML5 TEMPLATE</h5>
                    <h1 class="font-weight-bold text-12 line-height-2 mb-3">The Best HTML5 Template<span><span class="d-inline-block text-primary highlighted-word highlighted-word-rotate highlighted-word-animation-1 highlighted-word-animation-1-no-animate alternative-font-3 font-weight-bold text-1 ml-2">ever</span></span></h1>
                    <p class="custom-font-size-1">Porto is simply the best choice for your new website. The template is several years among the most popular in the world. <a href="#intro" data-hash="" data-hash-offset="120" class="text-color-light font-weight-semibold text-1 d-block">VIEW MORE <i class="fa fa-long-arrow-alt-right ml-1"></i></a></p>
                    <a class="video-open lightbox d-block text-color-light" href="#popup-content-1" data-trigger-play-video="#popupPresentation"><div class="video-open-icon"></div>See How It Works</a>

                    <div id="popup-content-1" class="dialog dialog-lg zoom-anim-dialog rounded p-3 mfp-hide mfp-close-out">
                        <div class="embed-responsive embed-responsive-4by3">
                            <video id="popupPresentation" class="float-left" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="video/presentation.jpg">
                                <source src="video/presentation.webm" type="video/webm">
                                <source src="video/presentation.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="position-relative border-width-10 border-color-light clearfix border border-radius" data-remove-min-height="" style="min-height: 0px;">
                        <video id="presentation" class="float-left" width="100%" height="100%" muted="" playsinline="" loop="" preload="metadata" poster="video/presentation.jpg" data-auto-play="true">
                            <source src="video/presentation.webm" type="video/webm">
                            <source src="video/presentation.mp4" type="video/mp4">
                        </video>

                    </div>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-5 custom-header-bar py-4 pr-5 z-index-2">
                    <div>
                        <div class="star-rating-wrap d-flex align-items-center justify-content-center position-relative text-dark text-5 py-2 mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i><i class="fas fa-star ml-1"></i>
                        </div>

                        <h4 class="position-relative text-center font-weight-bold text-7 line-height-2 mb-0">Popular HTML5 Site Template</h4>

                        <p class="position-relative text-center font-weight-normal mb-1">* Aproved by 40k buyers since 2013</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section section-no-border section-angled bg-light pt-0 pb-5 m-0">
        <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div>
        <div class="container pb-5" style="min-height: 1000px;">
            <div class="row mb-5 pb-lg-3 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0">The Perfect Template for<br>Beginners or Professionals</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4">YOUR WEBSITE TO <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">A NEW LEVEL</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5">Porto is simply a better choice for your new website design. The template is several years among the most popular in the world, being constantly improved and following the trends of design and best practices of code. Your search for the best solution is over, get your own copy and join tens of thousands of happy customers.</p>
                </div>
                <div class="col-sm-6 col-lg-4 offset-lg-2 counter mb-5 mb-md-0">
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="750" data-appear-animation-duration="750" style="animation-delay: 750ms;">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="80" data-append="+" data-plugin-options="{'accY': 50}">80+</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Included Demos</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">600+ HTML FILES</p>
                        <p class="mb-0"><a href="#demos" data-hash="" data-hash-offset="120" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none">VIEW DEMOS <i class="fas fa-long-arrow-alt-right ml-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 counter divider-left-border">
                    <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750" style="animation-delay: 750ms;">
                        <h3 class="font-weight-extra-bold text-14 line-height-1 mb-2" data-to="40" data-append="K+" data-plugin-options="{'accY': 50}">40K+</h3>
                        <label class="font-weight-semibold negative-ls-1 text-color-dark mb-0">Websites Using Porto HTML</label>
                        <p class="text-color-grey font-weight-semibold pb-1 mb-2">100K+ IN ALL VERSIONS</p>
                        <p class="mb-0"><a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="text-color-primary d-flex align-items-center justify-content-center text-4 font-weight-semibold text-decoration-none" target="_blank">BUILD WEBSITE <i class="fas fa-long-arrow-alt-right ml-2 text-4 mb-0"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="intro row align-items-center justify-content-center justify-content-md-start">
                <div class="col-3 pr-0 pl-3 z-index-2">
                    <img src="img/landing/intro2.jpg" data-src="img/landing/intro2.jpg" class="img-fluid border border-width-10 border-color-light box-shadow-3 rounded d-none d-md-block appear-animation lazyloaded animated fadeInUp appear-animation-visible" alt="Screenshot 2" data-appear-animation="fadeInUp" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                    <div class="position-absolute d-none d-md-flex align-items-end appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="900" style="bottom: -60px; right: -90px; animation-delay: 900ms;">
                        <span class="arrow hlt" style="margin-right: -70px;"></span>
                        <strong class="text-color-dark mb-4 pb-3">modern designs!</strong>
                    </div>
                </div>
                <div class="col-11 col-md-9 pl-0 pr-5 pb-5 pb-md-0 mb-5 mb-md-0">
                    <div class="intro2 pt-5 pt-md-0 mt-5 mt-lg-0 appear-animation pr-5 animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="400" style="animation-delay: 400ms;"><img src="img/landing/intro1.jpg" data-src="img/landing/intro1.jpg" class="img-fluid box-shadow-3 position-relative z-index-1 rounded lazyloaded" alt="Screenshot 1" style="left: -110px;"></div>
                    <div class="intro3 z-index-3 position-absolute appear-animation animated fadeInUp appear-animation-visible" data-appear-animation="fadeInUp" data-appear-animation-delay="800" style="top: 20%; right: 4%; animation-delay: 800ms;">
                        <img src="img/landing/intro3.jpg" data-src="img/landing/intro3.jpg" class="img-fluid border border-width-10 border-color-light box-shadow-3 rounded lazyloaded" alt="Screenshot 3">
                        <div class="position-absolute d-none d-md-flex align-items-end appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" style="bottom: -135px; right: -20px; animation-delay: 1100ms;">
                            <strong class="text-color-dark mb-3">a lot of demos!</strong>
                            <span class="arrow hru"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-no-border pb-0 m-0">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <h2 class="text-7 font-weight-semibold line-height-2 mb-2">The new generation of website templates is here.</h2>
                    <p>A complete suite of tools designed to make life easier with a top quality website templates.</p>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-1"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Super High<br>Performance</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-2"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Created with Top<br>Plugins and Extensions</h4>
                </div>
                <div class="col-sm-4 col-lg-auto icon-box text-center mb-4">
                    <i class="icon-bg icon-3"></i>
                    <h4 class="font-weight-bold custom-font-size-2 line-height-3 mb-0">Extremely Easy<br>to Customize</h4>
                </div>
                <div class="col-sm-12">
                    <hr class="my-5">
                    <h2 class="font-weight-bold text-center text-10 pt-3 mb-4">The Most Customizable + Solid and Tested Base</h2>
                </div>
                <div class="col-lg-8 offset-lg-2 px-lg-0 text-center">
                    <p class="text-4">Porto has a huge variety of options and features to create your site, it has also a very solid based that is being improved and tested by professional developers since 2013.</p>
                </div>
            </div>
            <div class="image-wrapper position-relative z-index-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="height: 0px; padding-bottom: 16%; animation-delay: 500ms;">
                <img src="img/landing/theme_options.png" data-src="img/landing/theme_options.png" class="img-fluid lazyloaded" alt="The Most Customizable Template">
            </div>
        </div>
    </section>

    <section class="section section-no-border section-angled section-dark pb-0 m-0" style="background-repeat: no-repeat; background-color: #0169fe !important;" data-src="img/landing/reason_bg.png">
        <div class="section-angled-layer-top section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 4rem 0;"></div>
        <div class="spacer py-md-4 my-md-5"></div>
        <div class="container pt-5 mt-5">
            <div class="row align-items-center pt-md-5 mt-5">
                <div class="col-lg-6 offset-lg-1 mb-5">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                        <img src="img/landing/porto_dots.png" data-src="img/landing/porto_dots.png" width="154" height="146" class="position-absolute top-auto lazyloaded" alt="6 reasons" data-plugin-float-element="" data-plugin-options="{'startPos': 'none', 'speed': 3, 'transition': true}" style="bottom: 184px; left: 70px; transition: transform 500ms ease-out 0ms; transform: translate3d(0px, 32.2398%, 0px);">
                    </div>
                    <div class="text-reasons">
                        <label class="text-color-light appear-animation z-index-1 animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="250" data-appear-animation-duration="750" style="animation-delay: 250ms;">6</label>
                        <h3 class="text-4 text-md-6 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450" data-appear-animation-duration="750" style="animation-delay: 450ms;">Reasons</h3>
                        <h3 class="text-4 text-md-6 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="750" data-appear-animation-duration="750" style="animation-delay: 750ms;">Why you should choose</h3>
                        <h3 class="text-4 text-md-6 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="950" data-appear-animation-duration="750" style="animation-delay: 950ms;"><span class="highlight-word light">Porto</span></h3>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 pl-lg-4 pl-xl-5 mb-5">
                    <h2 class="text-6 font-weight-semibold line-height-2 mb-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1150" data-appear-animation-duration="750" style="animation-delay: 1150ms;">With Porto your satisfaction is guaranteed.</h2>
                    <p class="custom-text-color-1 line-height-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1350" data-appear-animation-duration="750" style="animation-delay: 1350ms;">We have selected the 6 top reasons to choose Porto. Check below:</p>
                </div>
            </div>
            <div class="row justify-content-center mt-md-5 mb-4 pt-lg-4">
                <div class="col-lg-11">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="animation-delay: 600ms;">
                            <img class="img-fluid lazyloaded" alt="Speed Performance" src="img/landing/reason1.png" data-src="img/landing/reason1.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">1</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">OPTIMIZED FOR</small>Speed Performance</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">Choose Porto and make your site at high performance. We know your website must the fast as possible.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" style="animation-delay: 800ms;">
                            <img class="img-fluid lazyloaded" alt="Solid and tested base" src="img/landing/reason2.png" data-src="img/landing/reason2.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">2</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE MOST</small>Solid and Tested Base</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">Porto has a very solid development base that has been improved since 2013 by our best developers.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" style="animation-delay: 1000ms;">
                            <img class="img-fluid lazyloaded" alt="Top designs created by usability specialists" src="img/landing/reason3.png" data-src="img/landing/reason3.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">3</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">TOP DESIGNS CREATED BY</small>Usability Specialists</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">The designs of all pages and all demos included in Porto were created by usability experts and modern designs standards.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" data-appear-animation-duration="750" style="animation-delay: 300ms;">
                            <img class="img-fluid lazyloaded" alt="The best customer experience" src="img/landing/reason4.png" data-src="img/landing/reason4.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">4</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">THE BEST</small>Customer Experience</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">4.85 average rating based on 2.5k+ review proves that Porto is loved by our customers.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750" style="animation-delay: 500ms;">
                            <img class="img-fluid lazyloaded" alt="Works perfectly with Porto Admin Template" src="img/landing/reason5.png" data-src="img/landing/reason5.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">5</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">WORKS PERFECTLY WITH</small>Porto Admin Template</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">With Porto Admin you can create your back-end panel with same design as the front-end site. Learn more in the next section.</p>
                        </div>
                        <div class="col-10 col-sm-6 col-lg-4 image-box appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" data-appear-animation-duration="750" style="animation-delay: 700ms;">
                            <img class="img-fluid lazyloaded" alt="Always keep template updates" src="img/landing/reason6.png" data-src="img/landing/reason6.png">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-color-dark font-weight-extra-bold text-12 mr-2 line-height-1">6</span>
                                <h4 class="d-flex flex-column font-weight-bold text-5 mb-0"><small class="font-weight-semibold positive-ls-2 line-height-1">ALWAYS KEEP</small>Template Updates</h4>
                            </div>
                            <p class="pr-5 custom-text-color-1">Lifetime regular update makes porto always "best" compared to other competitors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" class="btn btn-dark btn-rounded btn-modern btn-px-5 text-3 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" target="_blank" style="animation-delay: 300ms;">BUY PORTO NOW!</a>
            </div>
        </div>
    </section>

    <section class="section section-no-border section-angled bg-color-light-scale-1 m-0">
        <div class="section-angled-layer-top section-angled-layer-increase-angle" style="padding: 5rem 0; background-color: #0169fe;"></div>
        <div class="container py-5 my-5">
            <div class="row align-items-center text-center my-5">
                <div class="col-md-6">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750" style="animation-delay: 200ms;">Introducing Porto Admin</h2>
                    <p class="font-weight-semibold text-primary text-4 fonts-weight-semibold positive-ls-2 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" data-appear-animation-duration="750" style="animation-delay: 600ms;">ADMIN WITH SAME LOOK FEEL AS THE FRONT-END</p>
                    <p class="pb-2 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" data-appear-animation-duration="750" style="animation-delay: 800ms;">Porto Admin integration give you a package of new features to add in the front-end template, such as advanced tables, advanced forms, etc... Also allows you to create the back-end of your site using the same design.</p>
                    <a href="https://themeforest.net/item/porto-admin-responsive-html5-template/8539472" class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" data-appear-animation-duration="750" target="_blank" style="animation-delay: 1000ms;">VIEW PORTO ADMIN</a>
                    <p class="appear-animation text-3 animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">* Porto Admin <strong class="text-dark">is not included</strong> in the front-end and is available for $16.</p>
                </div>
                <div class="col-md-6 py-5">
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                        <img class=" lazyloaded" src="img/landing/porto_dots2.png" data-src="img/landing/porto_dots2.png" alt="" width="149" height="142" style="position: absolute; top: -60px; right: -8%;">
                    </div>
                    <div class="appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0" data-appear-animation-duration="750" style="animation-delay: 0ms;">
                        <div class="strong-shadow rounded strong-shadow-top-right">
                            <img src="img/landing/porto_admin.jpg" data-src="img/landing/porto_admin.jpg" class="img-fluid border border-width-10 border-color-light rounded box-shadow-3 lazyloaded" alt="Porto Admin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
