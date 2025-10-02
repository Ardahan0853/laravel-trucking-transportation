@extends('layouts.main')

@section('title', __('TRUCKPOST'))
@push('styles')
<link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush
@section('content')
    <div class="page-title-style01 page-title-negative-top pt-bkg01">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('about_page_title') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>{{ __('about_subtitle') }}</h2>
                        <p>{{ __('about_subtitle_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="intro-title">
                        <p>{{ __('about_subtitle_text_2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content custom-bkg bkg-grey column-img-bkg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                    <div class="custom-heading">
                        <h3>{{ __('about_section2_title') }}</h3>
                    </div>
                    <p>{{ __('about_section2_text') }}</p>
                    <p>{{ __('about_section2_text2') }}</p>
                    <br/>
                </div>
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/ACwovG6ZUpU" title="YouTube video"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content column-img-bkg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/LCX5QMX6Lzs" title="YouTube video"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-2 col-md-pull-2 custom-col-padding-both">
                    <div class="custom-heading">
                        <h3>{{ __('about_section3_title') }}</h3>
                    </div>
                    <p>{{ __('about_section3_text') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content custom-bkg bkg-grey column-img-bkg mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-2 custom-col-padding-both">
                    <div class="custom-heading">
                        <h3>{{ __('about_section4_title') }}</h3>
                    </div>

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('about_section4_item') }}</h3>
                                <p>{{ __('about_section4_text') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('about_section4_item2') }}</h3>
                                <p>{{ __('about_section4_text2') }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 img-bkg02"></div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="custom-heading02">
                    <h2>{{ __('about_section5_title') }}</h2>
                    <p>{{ __('about_section5_subtitle') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h4>{{ __('about_section5_title_2') }}</h4>
                        <p>{{ __('about_section5_paragraph') }}</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h4>{{ __('about_section5_title_3') }}</h4>
                        <p>{{ __('about_section5_paragraph_2') }}</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h4>{{ __('about_section5_title_4') }}</h4>
                        <p>{{ __('about_section5_paragraph_3') }}</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-icon-center">
                        <div class="icon-container">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <h4>{{ __('about_section5_title_5') }}</h4>
                        <p>{{ __('about_section5_paragraph_4') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading">
                        <h2>{{ __('about_location_title') }}</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-latvia.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_1_title') }}</h5>
                                    <p class="position">{{ __('location_1_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-sweden.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_2_title') }}</h5>
                                    <p class="position">{{ __('location_2_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-estonia.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_3_title') }}</h5>
                                    <p class="position">{{ __('location_3_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-finland.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_4_title') }}</h5>
                                    <p class="position">{{ __('location_4_subtitle') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-denmark.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_5_title') }}</h5>
                                    <p class="position">{{ __('location_5_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-lithuania.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_6_title') }}</h5>
                                    <p class="position">{{ __('location_6_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-sweden.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_7_title') }}</h5>
                                    <p class="position">{{ __('location_7_subtitle') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-cesis.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_8_title') }}</h5>
                                    <p class="position">{{ __('location_8_subtitle') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="img/sponsorlar/BALTICOVO.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/BLS.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/CESU-ALUS.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/DELTA-LV.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/ELIS.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/HAVI.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/HEAD.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/JYSK.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/KREISS.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/kurbads.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/OTANKIMILL.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/R-GRUPA.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/RMC.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/schwenk-logo.png" alt=""/></div>
                            <div class="owl-item"><img src="img/sponsorlar/VIKINGBUS.png" alt=""/></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function ($) {
            'use strict';

            function equalHeight() {
                $('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
                    var maxHeight = $(this).outerHeight();
                    $('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
                });
            };

            $(document).ready(equalHeight);
            $(window).resize(equalHeight);

            $('#client-carousel').owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                responsive: {
                    0: {
                        items: 2,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    600: {
                        items: 3,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true
                    },
                    1000: {
                        items: 6,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true
                    }
                }
            });
        });
        /* ]]> */
    </script>
@endpush
