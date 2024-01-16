@extends('frontend.layouts.app')
@section('title') {{'About us'}} @endsection
@section('content')
<!--================================= intro-title =================================-->
<section class="intro-title blue-bg" style="background-color: #289dd2;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">about us</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================= intro-title =================================-->
<!--================================= welcome =================================-->
<section class="page-section-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="section-title text-center">
                    <span>About Company</span>
                    <h3 class="text-center">Welcome to Global Insights Research</h3>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <p class="mb-2">Global Market Research is a market research firm with a focus on delivering unmatched research, analytics, and consulting services to businesses across the globe. We are expert in Market Research. Our dedicated teams are experienced in cost-effective survey design and analysis, online and mobile survey software and hosting, and respondent panels, such as B2B, consumer, healthcare professionals, IT, and teenagers. We have extensive experience in creating and supporting custom panel network development and long-term engagement</p>
            </div>
            <div class="col-md-12 text-center mt-5">
                <div class="section-title text-center">
                    <h3 class="text-center">What we do</h3>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <p class="mt-0">At Global Insights Research, we help businesses grow. We create reports with the facts about markets, including information about trends, technologies, opportunities, and challenges. Our reports give important insights into what might happen in the future. We do both regular reports and custom research projects for clients around the world. All our work is designed to help our clients make the best decisions that will help their business grow.</p>
            </div>
            <div class="col-md-12 text-center mt-5">
                <div class="section-title text-center">
                    <h3 class="text-center">Our mission</h3>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <p class="mt-0">Our goal is to help clients understand their business and the market better. We connect people from all over the world to give them insights and opinions. We want to help individuals and businesses reach their highest potential.</p>
            </div>
            <div class="about-image">
                <img class="img-fluid center-block" src="{{asset('frontend/assets/assets/images/bg-element/07.png')}}" alt="">
            </div>
        </div>

    </div>
</section>
<!--================================= welcome =================================-->

@endsection