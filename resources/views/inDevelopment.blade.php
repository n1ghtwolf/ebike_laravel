@extends('home')

@section('content')
<div role="main" class="main" style="min-height: calc(100vh - 393px);">
    <div class="container">
        <div class="row mt-5">
            <div class="col text-center">
                <div class="logo">
                    <a href="index.html">
                        <img width="100" height="48" src="img/logo-default-slim.png" alt="Porto">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-normal text-7 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;"><strong class="font-weight-extra-bold">Maintenance Mode</strong></h2>
                </div>
                <div class="overflow-hidden mb-1">
                    <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">The website is undergoing some scheduled maintenance.<br>Please come back later.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="far fa-life-ring"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Whats this about?</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Come back later</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Get in Touch</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
