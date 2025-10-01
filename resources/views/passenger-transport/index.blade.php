@extends('layouts.main')

@section('title', 'Passenger Transport')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/color-default.css') }}">
@endpush

@section('content')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg03">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="services6_title"></h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <!-- Section 01 start -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="custom-heading">
                        <h2 id="services6_section_title"></h2>
                    </div><!-- .custom-heading end --></p>
                    <p id="services6_section_text"></p>
                    <p id="services6_section_text2"></p>

                    <ul class="fa-ul">
                        <li id="services6_section_list">
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p id="service6_list_item"></p>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p id="service6_list_item_2"></p>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p id="service6_list_item_3"></p>
                        </li>

                    </ul><!-- .fa-ul end -->

                </div><!-- .col-md-8 end -->

                <div class="col-md-4">
                    <img src="img/pics/bus-passenger-transport-desktop.webp" alt="trucking"/>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 01 end -->

    <!-- Section 02 start -->
    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-full-img">
                    <img src="img/pics/DRIVER-BEHAVIOUR-5.webp" alt="trucking"/>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2 id="services6_section2_title"></h2>
                    </div><!-- .custom-heading end -->
                    <p id="services6_section2_subtitle" class="text-big"></p>
                    <p id="services6_section2_text"></p>
                </div><!-- .col-md-6.custom-col-padding end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 02 end -->

    <!-- Section 03 start -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="custom-heading">
                        <h2 id="services6_section3_title"></h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3 id="services6_section3_subtitle"></h3>

                                <p id="services6_section3_text"></p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3 id="services6_section3_subtitle2"></h3>

                                <p id="services6_section3_text2"></p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3 id="services6_section3_subtitle3"></h3>

                                <p id="services6_section3_text3"></p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3 id="services6_section3_subtitle4"></h3>

                                <p id="services6_section3_text4"></p>
                            </div><!-- .li-content end -->
                        </li>
                    </ul><!-- .fa-ul .fa-ul-large end -->
                </div><!-- .col-md-5 end -->

                <div class="col-md-7 triggerAnimation animated" data-animate="fadeInRight">
                    <img src="img/pics/mapon-devices-desktop.webp" alt="trucking"/>
                </div><!-- .col-md-7 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 03 end -->


    <!-- Section 04 start -->
    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="video-wrapper">
                    <iframe
                        src="https://www.youtube.com/embed/eUEuWGYsXMc"
                        title="YouTube video"
                        allowfullscreen>
                    </iframe>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 04 end -->
@endsection
