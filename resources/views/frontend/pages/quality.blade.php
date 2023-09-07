@extends('frontend.layouts.app')

@section('content')

<!--=================================
intro-title -->
<section class="intro-title blue-bg" style="background-color: #289dd2;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Quality</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quality</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
intro-title -->





<!--=================================
feature  -->
<section class="all-feature page-section-ptb sec-relative">
    <div class="side-content-image">
        <!-- <img class="img-fluid center-block" src="{{asset('assets/images/bg-element/04.png')}}" alt=""> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>features that you need</span>
                    <h3 class="text-center">All your business needs</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box-02 right mt-5 mb-8 text-left text-md-right">
                    <div class="icon">
                        <i class="ti-rocket"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Qualitative Research</h5>
                        <p>Qualitative research is characterized as a statistical surveying technique that spotlights on getting information through unconditional and conversational communication.</p>
                    </div>
                </div>
                <div class="feature-box-02 right mb-8 text-left text-md-right">
                    <div class="icon">
                        <i class="ti-wallet"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Quantitative Research</h5>
                        <p>Quantitative research is characterized as a deliberate examination by get-together quantifiable information and performing measurable or computational procedures. </p>
                    </div>
                </div>
                <div class="feature-box-02 right text-left text-md-right">
                    <div class="icon">
                        <i class="ti-layers"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Online Research</h5>
                        <p>Online research strategies are manners by which analysts can gather information by means of web. It is additionally alluded to as Web research,Internet science or Online methods.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 d-none d-lg-block">
                <img src="{{asset('frontend/assets/assets/images/device/mobile.jpg')}}" class="img-fluid center-block mt-5" style="height: 580px;" alt="">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box-02 mt-5 mb-8 text-left">
                    <div class="icon">
                        <i class="ti-dashboard"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Telephone Surveys</h5>
                        <p>A phone study, otherwise called CATI is an exploration technique where the specialist reviews respondents via phone. </p>
                    </div>
                </div>
                <div class="feature-box-02 mb-8 text-left">
                    <div class="icon">
                        <i class="ti-receipt"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Business Research</h5>
                        <p>Business research is a procuring nitty gritty data of business and involving such data in expanding the benefit.. </p>
                    </div>
                </div>
                <div class="feature-box-02 text-left">
                    <div class="icon">
                        <i class="ti-bar-chart"></i>
                    </div>
                    <div class="info">
                        <h5 class="mb-1">Other Services</h5>
                        <p>Our aptitude depends on using different programming apparatuses utilized for statistical surveying. Contact us quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
feature -->

@endsection