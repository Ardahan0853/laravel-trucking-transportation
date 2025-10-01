@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@section('content')
    <div class="master-wrapper">
        <!-- .master-slider start -->
        <div id="masterslider" class="master-slider ms-skin-default mb-30">
            <!-- slide start -->
            <div class="ms-slide" data-delay="5">
                <img src="masterslider/blank.gif" data-src="img/slider/slide05-05.jpg" alt=""/>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 125px;"
                    data-type="text"
                    data-delay="500"
                >
                    air freight
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 185px;"
                    data-type="text"
                    data-delay="800"
                >
                    overland
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 245px;"
                    data-type="text"
                    data-delay="1100"
                >
                    or sea
                </h2>

                <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slide05-04.png" alt=""
                     style="left: 350px; top: 160px;"
                     data-type="image"
                     data-delay="1300"
                     data-effect="right(short)"
                />

                <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slide05-03.png" alt=""
                     style="left: 770px; top: 85px;"
                     data-type="image"
                     data-delay="1500"
                     data-effect="scalefrom(0.7,0.7,380,450,br,false)"
                />

                <p class="ms-layer pi-text"
                   style="left: 30px; top: 320px;"
                   data-type="text"
                   data-delay="1600"
                >
                    First class freight services!
                </p>
            </div><!-- slide end -->

            <!-- slide start -->
            <div class="ms-slide" data-delay="5">
                <img src="masterslider/blank.gif" data-src="img/slider/slide05-01.jpg" alt=""/>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 125px;"
                    data-type="text"
                    data-delay="500"
                >
                    worldwide
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 185px;"
                    data-type="text"
                    data-delay="800"
                >
                    freight
                </h2>

                <h2 class="ms-layer pi-caption01 pi-caption-dark"
                    style="left: 30px; top: 245px;"
                    data-type="text"
                    data-delay="1100"
                >
                    services
                </h2>

                <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slide05-02.png" alt=""
                     style="left: 30px; top: 10px;"
                     data-type="image"
                     data-delay="1900"
                     data-effect="right(short,false)"
                     data-duration="500"
                     data-hide-effect="fade"
                />

                <p class="ms-layer pi-text"
                   style="left: 30px; top: 305px;"
                   data-type="text"
                   data-delay="1300"
                >
                    Road, air train or overseas
                </p>

                <p class="ms-layer pi-text"
                   style="left: 30px; top: 340px;"
                   data-type="text"
                   data-delay="1600"
                >
                    We got it covered
                </p>
            </div><!-- slide end -->
        </div><!-- .master-slider end -->
    </div><!-- .master-wrapper end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 clearfix">
                    <div class="carousel-container">
                        <div id="services-carousel" class="owl-carousel owl-dot">
                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img01.jpg" alt="Trucking"/>

                                        <a href="overland-transportation.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>GROUND SHIPPING</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            We have a wide experience in overland
                                            industry specific logistic solutions like
                                            pharmaceutical logistics, retail,
                                            ship parts, chemical industry and
                                            automotive logistics by train or road.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img02.jpg" alt="Trucking"/>

                                        <a href="large-projects.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>LARGE PROJECTS</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            Need large projects transportation
                                            service? No worries. We provide large
                                            project logistics services by air,
                                            ground, sea and rail. We handle all
                                            from big vehicles transportation to
                                            oil platforms movement.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img03.jpg" alt="Trucking"/>

                                        <a href="air-freight.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>INTERNATIONAL AIR FREIGHT</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            We provide full supply chain management
                                            package including cost effective and fast
                                            air freight. You can also combine this
                                            package with other means of transportation.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img13.jpg" alt="Trucking"/>

                                        <a href="contract-logistics.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>contract logistics</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            Trucking covers all parts of supply
                                            chain management, from sea, air, rail
                                            and overland transportation. All services
                                            can be adjusted according to your needs, so
                                            feel free to contact us.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img14.jpg" alt="Trucking"/>

                                        <a href="warehousing.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>WAREHOUSING</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            Need custom and intelligent warehouse
                                            solution? Please contact us. We offer
                                            intelligent warehouse solutions all
                                            over the globe. View our locations
                                            page to get full list of locations.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->

                            <div class="owl-item">
                                <div class="service-feature-box">
                                    <div class="service-media">
                                        <img src="img/pics/img15.jpg" alt="Trucking"/>

                                        <a href="consulting-services.html" class="read-more02">
                                                <span>
                                                    Read more
                                                    <i class="fa fa-chevron-right"></i>
                                                </span>
                                        </a>
                                    </div><!-- .service-media end -->

                                    <div class="service-body">
                                        <div class="custom-heading">
                                            <h4>CONSULTING</h4>
                                        </div><!-- .custom-heading end -->

                                        <p>
                                            If you need help in any part of supply
                                            chain management or need any logistic
                                            service but not sure what will best suit for you
                                            please contact us. Our team will be happy to
                                            help you.
                                        </p>
                                    </div><!-- .service-body end -->
                                </div><!-- .service-feature-box-end -->
                            </div><!-- .owl-item end -->
                        </div><!-- #services-carousel end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-8">
                    <div class="custom-heading">
                        <h3>company news</h3>
                    </div><!-- .custom-heading end -->

                    <ul class="pi-latest-posts02 clearfix">
                        <li>
                            <div class="post-date">
                                <p class="day">15</p>
                                <p class="month">may</p>
                            </div><!-- .post-date end -->

                            <div class="post-details">
                                <div class="post-category">
                                    <p>
                                        <i class="fa fa-tags"></i>
                                        press
                                    </p>
                                </div><!-- .post-category end -->

                                <a href="news-single.html">
                                    <h4>New service available: end-to-end logistics</h4>
                                </a>

                                <p>
                                    New service available. End-to-end-logistics.
                                    According to your needs, We now provide full supply chain management
                                    services.
                                </p>

                                <a class="read-more" href="news-single.html">
                                        <span>
                                            read more
                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>

                        <li>
                            <div class="post-date">
                                <p class="day">12</p>
                                <p class="month">may</p>
                            </div><!-- .post-date end -->

                            <div class="post-details">
                                <div class="post-category">
                                    <p>
                                        <i class="fa fa-tags"></i>
                                        company news
                                    </p>
                                </div><!-- .post-category end -->

                                <a href="news-single.html">
                                    <h4>First quarter 2015 revenue report released</h4>
                                </a>

                                <p>
                                    First quarter 2015 revenue report released,
                                    raise of profit by 15%. You
                                    can download it in our news press release section.
                                </p>

                                <a class="read-more" href="news-single.html">
                                        <span>
                                            read more
                                            <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>
                    </ul><!-- .pi-latest-posts02 end -->
                </div><!-- .col-md-8 end -->

                <div class="col-md-4">
                    <div class="promo-box02 promo-bkg02">
                        <div class="custom-heading centered">
                            <h3>we are hiring</h3>
                        </div><!-- .custom-heading.centered end -->

                        <p class="centered">
                            We are hiring drivers and have 2 opened positions.
                            See what we offer and what we need and apply today!
                        </p>

                        <a class="btn btn-big btn-yellow btn-centered" href="driver-application.html">
                            <span>apply now</span>
                        </a>
                    </div><!-- .promo-box02 end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-grey">
        <div class="container">

            <div class="row">
                <div class="custom-heading02 simple">
                    <h2>Clients & Awards</h2>
                </div><!-- .custom-heading02 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="img/pics/client01.png" alt=""/></div>
                            <div class="owl-item"><img src="img/pics/client02.png" alt=""/></div>
                            <div class="owl-item"><img src="img/pics/client03.png" alt=""/></div>
                            <div class="owl-item"><img src="img/pics/client04.png" alt=""/></div>
                            <div class="owl-item"><img src="img/pics/client05.png" alt=""/></div>
                            <div class="owl-item"><img src="img/pics/client06.png" alt=""/></div>
                        </div><!-- .owl-carousel.owl-carousel-navigation end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection

@push('scripts')
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function ($) {
            'use strict';

            // MASTER SLIDER START
            var slider = new MasterSlider();
            slider.setup('masterslider', {
                width: 1170, // slider standard width
                height: 530, // slider standard height
                layout: "boxed",
                loop: true,
                autoplay: true,
                speed: 40
                // more slider options goes here...
                // check slider options section in documentation for more options.
            });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');

            $('#services-carousel').owlCarousel({
                items: 3,
                loop: true,
                margin: 0,
                responsiveClass: true,
                mouseDrag: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        mouseDrag: true,
                        autoHeight: true
                    }
                }
            });

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
