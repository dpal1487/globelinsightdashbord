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
<!--=================================
intro-title -->
<!--=================================
welcome -->
<section class="page-section-pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="section-title text-center">
                    <span>About Company</span>
                    <h3 class="text-center">welcome to Global Insights Research</h3>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <p class="mb-2">Global Insights Research is a leading marketing research company specializing in providing valuable consumer insights to businesses worldwide. With a track record of excellence spanning over a decade, we offer comprehensive research solutions that empower companies to make informed decisions. Our dedicated team of experienced analysts and researchers employ advanced methodologies to gather and analyze data, uncovering market trends, consumer preferences, and competitive landscapes.</p>
                <p class="mb-2"> By harnessing cutting-edge technology, we deliver actionable recommendations that drive strategic marketing initiatives and product development. At Global Insights Research, we understand the importance of data-driven strategies in today's dynamic business environment. Our commitment to accuracy, innovation, and client success sets us apart, making us a trusted partner for companies seeking to navigate the complexities of the market landscape.</p>
            </div>
            <div class="about-image">
                <img class="img-fluid center-block" src="{{asset('frontend/assets/assets/images/bg-element/07.png')}}" alt="">
            </div>
        </div>

    </div>
</section>
<!--=================================
welcome -->
<!--=================================
Our story  -->
<section class="our-story popup-gallery bg" style="background:url(frontend/assets/assets/images/bg/02.jpg);">
    <div class="container-fluid">
        <div class="row no-gutter text-center">
            <div class="col-lg-6 col-md-12 align-self-center">
                <div class="play-video">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=rKoQYbvT4hI"> <span class="ti-control-play"></span> </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="our-story-content text-left blue-bg">
                    <h2 class="text-white mb-2">our story</h2>
                    <span class="mb-2 text-white">As Economic Scientists, we figure out the significance of information security, protection and confidentiality.</span>
                    <p class="mb-2 text-white">Global Insights Research is a worldwide MR arrangements organization, giving worldwide admittance to connected customers across difficult to-contact crowds, including shoppers, medical care and B2B.</p>

                    <p class="mb-2 text-white">We are trusted by clients work in statistical surveying and business knowledge to convey excellence.</p>

                    <p class="mb-2 text-white">We adopt a consultative strategy with our clients, giving arrangements expanding programming, hands on work, facilitating and examination. At present we have representatives which have insight with working with clients across the globe.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
Our story -->




<!--=================================
page-section -->
<section class="page-section-ptb">
    <div class="container">
        <div class="row valign">
            <div class="col-md-6 align-self-center" data-valign-overlay="middle">
                <img class="img-fluid center-block bottom-m" alt="" src="{{asset('frontend/assets/assets/images/device/13.png')}}">
            </div>
            <div class="col-md-6">
                <h3 class="mb-4">Why choose Global Insights Research</h3>
                <p class="mb-2">Global Insights Research has assisted many organizations with finding success with their web based advertising endeavors. We utilize this information and mastery to assist our clients with taking their business to a higher level with results-driven showcasing arrangements.</p>
                <ul class="list-mark">
                    <li>Hundreds of Clients & Years of Experience.</li>
                    <li>Goal Oriented, ROI-Driven Focus.</li>
                    <li>We Are Dedicated to Our Clients’ Success.</li>
                    <li>A Streamlined / Quality-Driven Process.</li>
                    <!-- <li>Ccrambled it to make specimen book a type.</li> -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=================================
page-section -->

@endsection