@extends('layout')
@section('content')

<section id="hero">
    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url({{asset('frontend/assets/img/slide/slide-1.jpg')}});">
        <div class="carousel-container">
            <h2 class="text-align-center"> Thank you !! Your survey has been {{(request()->route()->parameters['type'])}} .
            </h2>
        </div>
    </div>
</section>

<main id="main">
    <!-- ======= Respondent Table ======= -->
    <section>
        <div class="container">
            <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
                <table id="example2" class="table table-hover  text-center">
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>User ID</th>
                            <th>IP Address</th>
                            <th>Survey Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $color = "";
                        $bgc = "";
                        if ($survey->status == "complete") {
                            $color = "success";
                            $bgc = "#d4ffde";
                        } else if ($survey->status == "terminate") {
                            $color = "danger";
                            $bgc = "#ffd4d8";
                        } else {
                            $color = "#075dff";
                            $bgc = "#28d0ff";
                        }
                        ?>
                        <tr>
                            <td>{{$survey->project_id}}</td>
                            <td>{{$survey->user_id}}</td>
                            <td>{{$survey->ip_address}}</td>
                            <td class="text-center">
                                <div style="background-color: {{$bgc }}; width: fit-content; margin: auto; padding: 0 15px;" class="text-{{$color}} rounded-pill">
                                    {{$survey->status}}
                                </div>
                            </td>
                        </tr>
                        @if ($survey == '' )
                        <tr>
                            <td colspan="5">No Result Found</td>
                        </tr>
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
    </section>
    <!-- End Respondent -->
</main>
<!-- End #main -->
@endsection