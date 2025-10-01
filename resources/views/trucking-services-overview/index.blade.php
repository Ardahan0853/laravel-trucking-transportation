@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush

@section('content')
    <div id="masterslider" class="master-slider ms-skin-default">

        <!-- slide  start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="masterslider/blank.gif" data-src="img/slider/slide02.jpg" alt="International Air freight"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 58px; top: 420px; font-size: 59px"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                International Air Freight
            </h2>

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 540px; top: 480px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 375px; top: 500px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                Fast International Air Delivery
            </p>
        </div><!-- .ms-slide end -->

        <!-- slide start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="masterslider/blank.gif" data-src="img/slider/slide03.jpg" alt="Worldwide freight services"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 258px; top: 420px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                Freight services
            </h2>

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 540px; top: 480px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 278px; top: 500px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                Road, air, train or overseas. We got it covered!
            </p>
        </div><!-- .ms-slide end -->

        <!-- slide start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="masterslider/blank.gif" data-src="img/slider/slide04.jpg" alt="Worldwide freight services"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 388px; top: 420px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                Trucking
            </h2>

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 540px; top: 480px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="300"
            />

            <p class="ms-layer pi-text"
               style="left: 265px; top: 500px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="600"
            >
                Powerful Transport & Logistics Web Solution
            </p>
        </div><!-- .ms-slide end -->


        <!-- slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="masterslider/blank.gif" data-src="img/slider/slide01.jpg" alt="Strongest distribution network"/>

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 0; top: 310px;"
                 data-type="image"
                 data-effect="left(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="0"
            />

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 340px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="300"
            >
                strongest
            </h2>

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 400px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="600"
            >
                distribution
            </h2>

            <h2 class="ms-layer pi-caption01"
                style="left: 0; top: 460px;"
                data-type="text"
                data-effect="left(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="900"
            >
                network
            </h2>
        </div><!-- .ms-slide end -->
    </div><!-- #masterslider end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="custom-heading">
                        <h2>what we offer</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="overland-transportation.html">Ground transportation</a>
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="ocean-freight.html">Ocean freight</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="air-freight.html">Air freight</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="consulting-services.html">Consulting services</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="contract-logistics.html">Contract Logistics</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="supply-chain-management.html">End-to-end solutions</a>
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="custom-heading">
                        <h2>Download our brochure</h2>
                    </div>

                    <img src="img/pics/brochure01.jpg" class="float-left" alt=""/>
                    <br/>

                    <p>
                        Learn more about us. Download our annual brochure
                        2015 (available in English and German).
                    </p>

                    <a class="read-more" href="">
                            <span>
                                order now
                                <i class="fa fa-chevron-right"></i>
                            </span>
                    </a>
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-12 custom-bkg bkg-grey">
                    <div class="custom-heading">
                        <h2>track your load</h2>
                    </div>

                    <p>
                        Already have a shipping number, please insert it bellow.
                    </p>

                    <form class="tracking">
                        <input class="package-id" type="text" placeholder="#PACKAGE ID">
                        <input type="submit" class="submit" value="">
                    </form>
                </div><!-- .col-md-4.custom-bkg.bkg-grey end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content mb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>Our services</h2>
                        <p>TAILORED LOGISTIC SERVICES</p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row mb-0">
                <ul class="services-gallery clearfix">
                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <img src="img/pics/img04.jpg" alt="less-than-truckload"/>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="overland-transportation.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>LESS-THAN-TRUCKLOAD (ltl)</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="rail-transportation.html">
                                    <img src="img/pics/img05.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="rail-transportation.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>RAIL INTERNATIONAL SHIPPING</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="air-freight.html">
                                    <img src="img/pics/img06.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="air-freight.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>AIR FREIGHT</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="overland-transportation.html">
                                    <img src="img/pics/img07.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="overland-transportation.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>FROST SHIPPING</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="ocean-freight.html">
                                    <img src="img/pics/img08.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="ocean-freight.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>OCEAN FREIGHT</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="overland-transportation.html">
                                    <img src="img/pics/img09.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="overland-transportation.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>FAST DELIVERY</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="supply-chain-management.html">
                                    <img src="img/pics/img10.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="supply-chain-management.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>END-TO-END SOLUTIONS</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->

                    <li class="col-md-3">
                        <figure class="service-item-container">
                            <div class="service-item">
                                <a href="warehousing.html">
                                    <img src="img/pics/img11.jpg" alt="less-than-truckload"/>
                                </a>

                                <div class="hover-mask-container">
                                    <div class="hover-mask"></div>
                                    <div class="hover-details">
                                        <a href="warehousing.html">
                                                <span>
                                                    view details
                                                </span>
                                        </a>
                                    </div><!-- .hover-details end -->
                                </div><!-- .hover-mask-container end -->
                            </div><!-- .service-item end -->

                            <figcaption>
                                <h3>WAREHOUSING</h3>
                            </figcaption>
                        </figure><!-- .service-item end -->
                    </li><!-- .service-item end -->
                </ul><!-- #services-gallery end -->
            </div><!-- .row end -->
        </div><!-- .container-fluid end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>News</h2>
                        <p>Stay informed</p>
                    </div><!-- .custom-heading02 end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
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
                                    According to your needs, We now provide
                                    full supply chain management services.
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
                                    <h4>First quartal 2015 revenue report released</h4>
                                </a>

                                <p>
                                    First quarter 2015 revenue report
                                    released, raise of profit by 15%. You
                                    can download it in our news press release
                                    section.
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
                                <p class="day">11</p>
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
                                    <h4>We are hiring. Become one of our drivers!</h4>
                                </a>

                                <p>
                                    We are hiring. We need two professional
                                    drivers A, B, C and D drivers license
                                    category. Read more for details.
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
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-grey">
        <div class="container">
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
@endpush
