@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush

@section('content')
    <div id="masterslider" class="master-slider ms-skin-default">
        <!-- slide start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slide04.jpg')}}" alt="Worldwide freight services"/>

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

            <img class="ms-layer" src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slider-line.jpg')}}" alt=""
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

        <!-- slide  start -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slide02.jpg')}}" alt="International Air freight"/>

            <h2 class="ms-layer pi-caption01"
                style="left: 58px; top: 420px; font-size: 59px;"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                International Air Freight
            </h2>

            <img class="ms-layer" src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slider-line.jpg')}}" alt=""
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
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slide03.jpg')}}" alt="Worldwide freight services"/>

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

            <img class="ms-layer" src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slider-line.jpg')}}" alt=""
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

        <!-- slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slide01.jpg')}}" alt="Strongest distribution network"/>

            <img class="ms-layer" src="{{asset('masterslider/blank.gif')}}" data-src="{{asset('img/slider/slider-line.jpg')}}" alt=""
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
                        <h3>your sector</h3>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Healtcare</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Automotive</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Food and beverage</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Electronics</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Metals & Coal</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Building Materials</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Retail</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Consumer goods</a>
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <a href="">Chemicals</a>
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-6 clearfix">
                    <div class="custom-heading">
                        <h3>our locations</h3>
                    </div><!-- .custom-heading end -->

                    <img src="{{asset('img/pics/locations.jpg')}}" alt=""/>

                    <br/>

                    <p>
                        Trucking Co. covers over 150 locations all over the
                        globe plus numerous logistic partner companies from
                        different areas of supply chain.
                    </p>

                    <a class="read-more" href="locations.html">
                            <span>
                                view all locations
                                <i class="fa fa-map-marker"></i>
                            </span>
                    </a>
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-12">
                    <div class="custom-heading">
                        <h3>quick quote</h3>
                    </div><!-- .custom-heading end -->

                    <form class="wpcf7 shipping-quote clearfix">
                        <fieldset>
                            <label>Origin ZIP:</label>
                            <input type="text" id="tracking-origin" class="wpcf7-text">
                        </fieldset>

                        <fieldset>
                            <label>Destination ZIP:</label>
                            <input type="text" id="tracking-destination" class="wpcf7-text">
                        </fieldset>

                        <fieldset>
                            <label>Total weight:</label>
                            <input type="text" id="tracking-weight" class="wpcf7-text">
                        </fieldset>

                        <fieldset>
                            <label>No. of packages:</label>
                            <input type="text" id="tracking-packages" class="wpcf7-text">
                        </fieldset>

                        <fieldset>
                            <label>Your email:</label>
                            <input type="email" id="tracking-email" class="wpcf7-text">
                        </fieldset>

                        <input type="submit" value="get rate quote" class="submit">
                    </form>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-5">
                    <div class="custom-heading">
                        <h2>WHY CHOOSE TRUCKING</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>Fast Worldwide delivery</h3>

                                <p>
                                    From Europe to Asutralia, by air or sea?
                                    We offer fast, reliable and accurate
                                    worldwide delivery directly to your doors,
                                    factory and warehouses.
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>End-to-end solution available</h3>

                                <p>
                                    From 2015 Trucking offers new service -
                                    we are now offering end-to-end solutions
                                    using multiple transportation means and
                                    covering all supply chain from the origin
                                    to the destination.
                                </p>
                            </div><!-- .li-content end -->
                        </li>

                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>

                            <div class="li-content">
                                <h3>Safety & Compliance</h3>

                                <p>
                                    Safety of your cargo is one of our top
                                    priorities. Every package is handled with
                                    most care by our trained and high skilled
                                    personnel. You can be sure that your cargo
                                    will travel and arrive safely.
                                </p>
                            </div><!-- .li-content end -->
                        </li>
                    </ul><!-- .fa-ul .fa-ul-large end -->
                </div><!-- .col-md-5 end -->

                <div class="col-md-7 triggerAnimation animated" data-animate="fadeInRight">
                    <img src="{{asset('img/pics/img34.jpg')}}" alt="trucking"/>
                </div><!-- .col-md-7 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{asset('img/svg/pi-checklist-2.svg')}}" alt=""/>
                            </div><!-- .icon-container end -->

                            <h4>Contract logistics</h4>
                        </div><!-- .service-title end -->

                        <p>
                            Need custom logistic service? We got it covered.
                            From overland, air, rail and sea transportation.
                            Fast, safe and accurate shipment provided all
                            over the globe.
                        </p>
                    </div><!-- .service-icon-center-boxed end -->

                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{asset('img/svg/pi-globe-5.svg')}}" alt=""/>
                            </div><!-- .icon-container end -->

                            <h4>Worldwide freight</h4>
                        </div><!-- .service-title end -->

                        <p>
                            trucking company offers the best logistics
                            services using all mens of supply chain. Use our
                            overland, ocean and air freight solutions for
                            shipment of your goods.
                        </p>
                    </div><!-- .service-icon-center-boxed end -->
                </div><!-- .col-md-4 end -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-icon-center-boxed">
                        <div class="service-title">
                            <div class="icon-container">
                                <img src="{{asset('img/svg/pi-forklift-truck-4.svg')}}" alt=""/>
                            </div><!-- .icon-container end -->

                            <h4>Warehousing</h4>
                        </div><!-- .service-title end -->

                        <p>
                            Trucking offers intelligent warehouse solution.
                            Lower your storage and good maintenance by using
                            our modern and intelligent warehouses. You can
                            see all locations on location page.
                        </p>
                    </div><!-- .service-icon-center-boxed end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content parallax parallax02 mb-70 dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02 simple">
                        <h2>The company promise</h2>
                    </div><!-- .custom-heading02 end -->

                    <div class="statement">
                        <p>
                            As a contractor we promise to take care of all
                            supply chain management, to make your shipments
                            travel safe, fast and on time.
                        </p>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading02 simple">
                        <h2>Clients & Awards</h2>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-container">
                        <div id="client-carousel" class="owl-carousel owl-carousel-navigation">
                            <div class="owl-item"><img src="{{asset('img/pics/client01.png')}}" alt=""/></div>
                            <div class="owl-item"><img src="{{asset('img/pics/client02.png')}}" alt=""/></div>
                            <div class="owl-item"><img src="{{asset('img/pics/client03.png')}}" alt=""/></div>
                            <div class="owl-item"><img src="{{asset('img/pics/client04.png')}}" alt=""/></div>
                            <div class="owl-item"><img src="{{asset('img/pics/client05.png')}}" alt=""/></div>
                            <div class="owl-item"><img src="{{asset('img/pics/client06.png')}}" alt=""/></div>
                        </div><!-- .owl-carousel.owl-carousel-navigation end -->
                    </div><!-- .carousel-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection

@push('scripts')
@endpush
