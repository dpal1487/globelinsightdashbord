@extends('frontend.layouts.app')


@section('content')
<!--=================================
intro-title -->
<section class="intro-title black-bg" style="background-color: #289dd2;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Contact</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
contact -->
<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>We provide high quality services</span>
                    <h3 class="text-center">Get In Touch</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row touch-in white-bg m-0">
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-direction-alt text-blue"></i>
                                </div>
                                <h5><a href="service-detail.html">Z-6/91 Nehru Market</a></h5>
                                <span> Rajouri Garden Delhi-110027</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-headphone-alt text-blue"></i>
                                </div>
                                <h5><a href="service-detail.html">+91 8882942336</a></h5>
                                <span>Mon-Fri 8:30am-6:30pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-0">
                            <div class="contact-box">
                                <div class="contact-icon">
                                    <i class="ti-email text-blue"></i>
                                </div>
                                <h5><a href="service-detail.html">business@globalinsightsresearch.com</a></h5>
                                <span>24 X 7 online support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
contact -->
<!--=================================
contact from -->
<section class="page-section-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">SEND MESSAGE</h3>
            </div>
            <div class="col-md-12">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Global Insights Research!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->

                <div id="" style="display:none">Success/Error Message Goes Here</div>
                <form class="gray-form row" method="POST" action="{{route('contact-us')}}">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="url" name="url" class="form-control" placeholder="Website URL">
                            @if ($errors->has('url'))
                            <span class="text-danger mx-3">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                            @if ($errors->has('name'))
                            <span class="text-danger mx-3">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Adress">
                            @if ($errors->has('email'))
                            <span class="text-danger mx-3">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" placeholder="Phone Number">
                            @if ($errors->has('mobile'))
                            <span class="text-danger mx-3">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="message" placeholder="Massage"></textarea>
                            @if ($errors->has('message'))
                            <span class="text-danger mx-3">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- <input type="hidden" name="action" value="sendEmail" /> -->
                        <button name="submit" type="submit" class="button"><span>Submit Now</span></button>
                    </div>
                </form>
                <div id="ajaxloader" style="display:none"><img class="center-block" src="images/form-loader.gif" alt=""></div>
            </div>
        </div>
    </div>
</section>

<!--=================================
contact from -->


<!--=================================
contact-map -->

<section class="contact-map">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.346248871349!2d77.07441867550249!3d28.679287325639326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d043f84a32017%3A0x7f509db33a81525f!2sNehru%20Market%2C%20Camp%20No%204%2C%20Jwalapuri%2C%20Paschim%20Vihar%2C%20Delhi%2C%20110087!5e0!3m2!1sen!2sin!4v1692809490135!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!--=================================
contact-map -->
@endsection