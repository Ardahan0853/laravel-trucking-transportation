@extends('layouts.main')
@section('title', 'TRUCKPOST')

@section('content')
    <!-- SLIDER start -->
    <div id="masterslider" class="master-slider ms-skin-default mb-0">
        <!-- first slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{'masterslider/blank.gif'}}" data-src="{{'img/slider/fleet-management-platform-desktop1.webp'}}"
                 alt="Fleet Management Platform"/>

            <!-- Ana başlık -->
            <h2 class="ms-layer pi-caption01"
                style="left: 50px; top: 250px; font-size: 42px; font-weight: 700; color: #fff; line-height: 1.3;"
                data-type="text"
                data-effect="left(short)"
                data-duration="500"
                data-delay="300"
                data-hide-effect="fade">
                <span style="color:#206bc4;">Your No.1 Choice</span> of Fleet Management<br>Platform for Video
                Telematics
            </h2>

            <!-- Alt açıklama -->
            <p class="ms-layer pi-caption01"
               style="left: 50px; top: 360px; font-size: 20px; color: #fff;"
               data-type="text"
               data-effect="left(short)"
               data-duration="500"
               data-delay="600"
               data-hide-effect="fade">
                Reduced business costs and better fleet performance are just a few clicks away!
            </p>

            <!-- İstatistikler -->
            <div class="ms-layer"
                 style="left: 50px; top: 400px; font-size: 22px; font-weight:600; color: #fff; line-height: 1.6;"
                 data-type="text"
                 data-effect="bottom(short)"
                 data-duration="500"
                 data-delay="900"
                 data-hide-effect="fade">
                31k+ <span style="font-weight:400; color: #fff;">active clients</span> &nbsp;&nbsp;&nbsp;
                400+ <span style="font-weight:400; color: #fff;">partners worldwide</span> &nbsp;&nbsp;&nbsp;
                19+ <span style="font-weight:400; color: #fff;">years in business</span>
            </div>

            <!-- Butonlar -->
            <div class="ms-layer"
                 style="left: 50px; top: 480px;"
                 data-type="text"
                 data-effect="bottom(short)"
                 data-duration="500"
                 data-delay="1200"
                 data-hide-effect="fade">
                <a href="contact.html"
                   style="background:#206bc4; color:#fff; padding:12px 25px; border-radius:6px; text-decoration:none; font-weight:600; margin-right:10px;">
                    Get a demo</a>
                <a href="#"
                   style="background:#fff; color:#206bc4; padding:12px 25px; border-radius:6px; text-decoration:none; font-weight:600;">
                    Explore plans</a>
            </div>
        </div><!-- .ms-slide end -->
    </div><!-- #masterslider end -->
    <!-- SLIDER end -->

    <!-- SPONSORLAR START -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="{{'img/sponsorlar/BALTICOVO.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/BLS.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/CESU-ALUS.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/DELTA-LV.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/ELIS.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/HAVI.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/HEAD.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/JYSK.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/KREISS.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/kurbads.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/OTANKIMILL.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/R-GRUPA.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/RMC.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/schwenk-logo.png'}}" alt=""/></div>
                            <div class="owl-item"><img src="{{'img/sponsorlar/VIKINGBUS.png'}}" alt=""/></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SPONSORLAR END -->

    <!-- Video start -->
    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="video-wrapper">
                    <iframe
                        src="https://www.youtube.com/embed/ACwovG6ZUpU"
                        title="YouTube video"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Video end -->

    <!-- SECTION 2 START -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>{{ __('section2_title') }}</h2>
                        <p>{{ __('section2_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="row mb-30">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{'img/svg/pi-checklist-2.svg'}}" alt="checklist icon"/>
                        </div>
                        <div class="service-details">
                            <h3>{{ __('section2_subtitle') }}</h3>
                            <p>{{ __('section2_subtitle_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{'img/svg/pi-globe-5.svg'}}" alt="globe icon"/>
                        </div>
                        <div class="service-details">
                            <h3>{{ __('section2_subtitle2') }}</h3>
                            <p>{{ __('section2_subtitle2_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{'img/svg/pi-forklift-truck-5.svg'}}" alt="forktruck icon"/>
                        </div>
                        <div class="service-details">
                            <h3>{{ __('section2_subtitle3') }}</h3>
                            <p>{{ __('section2_subtitle3_text') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="service-icon-left-boxed">
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <img src="{{'img/svg/pi-touch-desktop.svg'}}" alt="touch icon"/>
                        </div>
                        <div class="service-details">
                            <h3>{{ __('section2_subtitle4') }}</h3>
                            <p>{{ __('section2_subtitle4_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION 2 END -->

    <!-- OUR SERVICES START -->
    <div class="page-content custom-bkg bkg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>{{ __('services') }}</h2>
                        <p>{{ __('services-subtitle') }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/transport-logistics2.webp'}}" alt="Trucking"/>
                            <a href={{route('logistic.index')}} class="read-more02">
                                <span>Learn more <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-1') }}</h4>
                            </div>
                            <p>{{ __('services-1-subtitle') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/construction2.webp'}}" alt="Trucking"/>
                            <a href="{{route('construction.index')}}" class="read-more02">
                                <span>Learn More <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-2') }}</h4>
                            </div>
                            <p>{{ __('services-2-subtitle') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/courier-delivery2.webp'}}" alt="Trucking"/>
                            <a href="{{route('delivery-management.index')}}" class="read-more02">
                                <span>Learn more <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-3') }}</h4>
                            </div>
                            <p>{{ __('services-3-subtitle') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/agriculture2.webp'}}" alt="Trucking"/>
                            <a href="{{route('agriculture.index')}}" class="read-more02">
                                <span>Learn more <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-4') }}</h4>
                            </div>
                            <p>{{ __('services-4-subtitle') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/waste-management2.webp'}}" alt="Trucking"/>
                            <a href="{{route('waste-management.index')}}" class="read-more02">
                                <span>Learn more <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-5') }}</h4>
                            </div>
                            <p>{{ __('services-5-subtitle') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-feature-box">
                        <div class="service-media">
                            <img src="{{'img/pics/PASSENGER-CARD-2.webp'}}" alt="Trucking"/>
                            <a href="{{route('passenger-transport.index')}}" class="read-more02">
                                <span>Learn more <i class="fa fa-chevron-right"></i></span>
                            </a>
                        </div>
                        <div class="service-body">
                            <div class="custom-heading">
                                <h4>{{ __('services-6') }}</h4>
                            </div>
                            <p>{{ __('services-6-subtitle') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DETAIL START -->
    <div class="page-content custom-bkg bkg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="custom-heading">
                        <h2>{{ __('homepage-detail-title') }}</h2>
                        <p>{{ __('homepage-detail-title-2') }}</p>
                    </div>

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('homepage-detail-subtitle-1') }}</h3>
                                <p>{{ __('homepage-detail-paragraph-1') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('homepage-detail-subtitle-2') }}</h3>
                                <p>{{ __('homepage-detail-paragraph-2') }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('homepage-detail-subtitle-3') }}</h3>
                                <p>{{ __('homepage-detail-paragraph-3') }}</p>
                            </div>
                        </li>
                    </ul>

                    <div style="text-align:center; margin-top:20px;">
                        <a href="contact.html"
                           style="display:inline-block;
                                  background:#206bc4;
                                  color:#fff;
                                  padding:12px 25px;
                                  border-radius:6px;
                                  text-decoration:none;
                                  font-weight:600;">
                            Get a demo
                        </a>
                    </div>
                </div>

                <div class="col-md-7 triggerAnimation animated" data-animate="fadeInRight">
                    <img src="{{'img/pics/img34 (1).jpg'}}" alt="trucking"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{'img/svg/pi-checklist-2.svg'}}" alt=""/>
                            </div>
                            <h4>{{ __('homepage-detail-subtitle-4') }}</h4>
                        </div>
                        <p>{{ __('homepage-detail-paragraph-4') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{'img/svg/pi-globe-5.svg'}}" alt=""/>
                            </div>
                            <h4>{{ __('homepage-detail-subtitle-5') }}</h4>
                        </div>
                        <p>{{ __('homepage-detail-paragraph-5') }}</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{'img/svg/pi-forklift-truck-4.svg'}}" alt=""/>
                            </div>
                            <h4>{{ __('homepage-detail-subtitle-6') }}</h4>
                        </div>
                        <p>{{ __('homepage-detail-paragraph-6') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
