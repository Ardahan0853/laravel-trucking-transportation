@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush

@section('content')
    <div id="masterslider" class="master-slider ms-skin-default">
        <!-- first slide -->
        <div class="ms-slide">
            <!-- slide background -->
            <img src="img/slidervideo-bg.jpg" data-src="img/slider/video-bg.jpg" alt="Video slider"/>

            <video data-autopause="false" data-mute="false" data-loop="true" data-fill-mode="fill"
                   class="ms-slide-bgvideo"
                   style="left: 0; top:0;">
                <source src="http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.mp4"
                        type="video/mp4">
                <source src="http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.webm"
                        type="video/webm">
                <source src="http://www.pixel-industry.com/html/trucking/Truck_Driving_on_Country_Road.ogg"
                        type="video/ogg">
            </video>

            <h2 class="ms-layer pi-caption01"
                style="left: 130px; top: 420px; font-size: 55px"
                data-type="text"
                data-effect="top(short)"
                data-duration="300"
                data-hide-effect="fade"
                data-delay="0"
            >
                EYE CATCHING VIDEO SLIDER
            </h2>

            <img class="ms-layer" src="masterslider/blank.gif" data-src="img/slider/slider-line.jpg" alt=""
                 style="left: 540px; top: 480px;"
                 data-type="image"
                 data-effect="bottom(short)"
                 data-duration="300"
                 data-hide-effect="fade"
                 data-delay="0"
            />

            <p class="ms-layer pi-text"
               style="left: 395px; top: 500px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="500"
            >
                Grab your user's attention
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
                 data-delay="100"
            />

            <p class="ms-layer pi-text"
               style="left: 278px; top: 500px;"
               data-type="text"
               data-effect="top(short)"
               data-duration="300"
               data-hide-effect="fade"
               data-delay="300"
            >
                Road, air, train or overseas. We got it covered!
            </p>
        </div><!-- .ms-slide end -->
    </div><!-- #masterslider end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 clearfix">
                    <ul class="tabs">
                        <li class="active">
                            <a href="#tab1">about us</a>
                        </li><!-- .active end -->

                        <li>
                            <a href="#tab2">contact information</a>
                        </li>

                        <li>
                            <a href="#tab3">our locations</a>
                        </li>
                    </ul><!-- .tabs end -->

                    <div class="tab-content-wrap">
                        <div id="tab1" class="tab-content">
                            <img src="img/pics/illustration01.png" alt="" class="float-left"/>

                            <br/>

                            <p class="text-big">
                                Welcome, we are Trucking, experienced
                                logistics company operating in over 150
                                countries across the world.
                            </p>

                            <p>
                                This is one more option for a homepage. As
                                you can see there are different styles for
                                each company size and requirement. You can
                                choose from eight homepage styles or create
                                your own, the choices are unlimited.
                            </p>

                            <p>
                                We offer fast, accurate and reliable delivery,
                                professional certified drivers and personnel.
                                We have successfully delivered over 2 millions
                                of packages and are operating in over 150
                                countries worldwide with over 2 435 clients.
                            </p>

                            <a class="read-more" href="about01.html">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                            </a>
                        </div><!-- #tab1.tab-content end -->

                        <div id="tab2" class="tab-content">
                            <img src="img/pics/illustration02.png" alt="" class="float-right"/>

                            <br/>

                            <p class="text-big">
                                This is Trucking, powerful transportation and
                                logistics HTML5 Template.
                            </p>

                            <p>
                                Give your site a fresh new look with this
                                amazing HTML template. Trucking comes with
                                various design layouts to achieve any desired
                                feel and look, from simple corporate to
                                powerful trucking oriented website.
                            </p>

                            <p>
                                Trucking is suited for both small trucking
                                companies as well as large logistics services
                                companies. In this template you will find
                                locations page which is great for large companies
                                and for example vehicle gallery page which is great
                                for small trucking companies.
                            </p>

                            <a class="read-more" href="contact-locations.html">
                                    <span>
                                        contact us
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                            </a>
                        </div><!-- #tab2.tab-content end -->

                        <div id="tab3" class="tab-content">
                            <img src="img/pics/locations.jpg" alt="" class="float-left"/>

                            <br/>

                            <p class="text-big">
                                Unique, fresh and modern layouts to
                                showcase your business in the best way there is.
                            </p>

                            <p>
                                Trucking offers ten homepage layouts to choose
                                from. Every layout has specific elements in
                                order to provide as many options for customization as
                                possible. One really nice layout is locations
                                page, where we used Google maps to display
                                multiple locations.

                            </p>

                            <p>
                                You can also display company locations by
                                using an image and placing little hot spots
                                on it. That type is used on one of the homepages
                                but you can use it in any page you like.
                            </p>

                            <a class="read-more" href="locations.html">
                                    <span>
                                        view all locations
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                            </a>
                        </div><!-- #tab3.tab-content end -->
                    </div><!-- .tab-content-wrap end -->
                </div><!-- .col-md-8 end -->

                <div class="col-md-4 clearfix">
                    <div class="custom-heading">
                        <h2>company news</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="pi-latest-posts">
                        <li>
                            <div class="post-media">
                                <img src="img/blog/latest01.jpg" alt=""/>
                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <div class="post-date">
                                    <p>
                                        <i class="fa fa-calendar"></i>
                                        MAY 15, 2015
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        Trucking - Company of the Year 2014
                                    </h4>
                                </a>

                                <a href="news-single.html" class="read-more">
                                        <span>
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>

                        <li>
                            <div class="post-media">
                                <img src="img/blog/latest02.jpg" alt=""/>
                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <div class="post-date">
                                    <p>
                                        <i class="fa fa-calendar"></i>
                                        MAY 15, 2015
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        First quartal 2015 revenue report released
                                    </h4>
                                </a>

                                <a href="news-single.html" class="read-more">
                                        <span>
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>

                        <li>
                            <div class="post-media">
                                <img src="img/blog/latest03.jpg" alt=""/>
                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <div class="post-date">
                                    <p>
                                        <i class="fa fa-calendar"></i>
                                        MAY 12, 2015
                                    </p>
                                </div>

                                <a href="news-single.html">
                                    <h4>
                                        We are hiring. Become one of our drivers!
                                    </h4>
                                </a>

                                <a href="news-single.html" class="read-more">
                                        <span>
                                            Read more
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                </a>
                            </div><!-- .post-details end -->
                        </li>
                    </ul><!-- .pi-latest-posts end -->
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <div class="page-content parallax parallax01 dark mb-70">
        <div class="container">
            <div class="row">
                <div class="custom-heading02">
                    <h2>Our services</h2>
                    <p>
                        More than just a trucking template
                    </p>
                </div><!-- .custom-heading02 end -->
            </div><!-- .row end -->

            <div class="row mb-30">
                <div class="col-md-6">
                    <div class="service-icon-left">
                        <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                            <img src="img/svg/pi-checklist-2.svg" alt="checklist icon">
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Contract logistics</h3>

                            <p>
                                Need custom logistic service? We got it
                                covered. From overland, air, rail and sea
                                transportation. Fast, safe and accurate
                                shipment provided all over the globe.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="service-icon-left">
                        <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                            <img src="img/svg/pi-globe-5.svg" alt="globe icon">
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Overland, Ocean and Air Freight</h3>

                            <p>
                                trucking company offers the best logistics
                                services using all mens of supply chain.
                                Use our overland, ocean and air freight
                                solutions for shipment of your goods.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row.mb-30 end -->

            <div class="row">
                <div class="col-md-6">
                    <div class="service-icon-left">
                        <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                            <img src="img/svg/pi-forklift-truck-5.svg" alt="forklift truck icon">
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Warehousing and Storage</h3>

                            <p>
                                Trucking offers intelligent warehouse
                                solution. Lower your storage and good
                                maintenance by using our modern and
                                intelligent warehouses. You can see all
                                locations on location page.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="service-icon-left">
                        <div class="icon-container triggerAnimation animated" data-animate="zoomIn">
                            <img src="img/svg/pi-touch-desktop.svg" alt="touch icon">
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h3>Consulting Services</h3>

                            <p>
                                Don't know what mean of transportation
                                would be right for you, or you need someone
                                for full supply chain management? Please
                                contact us. Our team of professionals will
                                be happy to help.
                            </p>
                        </div><!-- .service-details end -->
                    </div><!-- .service-icon-left end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content.parallax end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="custom-heading">
                        <h2>board of directors</h2>
                    </div><!-- .custom-heading end -->

                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team01.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>martha parker</h5>
                                    <p class="position">
                                        Company founder
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team02.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>jonathan blum</h5>
                                    <p class="position">
                                        Chief Technical Officer
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <img src="img/pics/team03.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>tom beck</h5>
                                    <p class="position">
                                        Chief Operations Officer
                                    </p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-9 end -->

                <div class="col-md-3">
                    <div class="custom-heading">
                        <h2>join our team</h2>
                    </div><!-- .custom-heading end -->

                    <div class="promo-box promo-bkg01">
                        <h4>Drivers needed</h4>
                        <p>
                            We are hiring drivers and have 2 opened
                            positions. See what we offer and what we need
                            and apply today!
                        </p>

                        <a href="driver-application.html" class="btn btn-medium btn-yellow">
                            <span>apply now</span>
                        </a>
                    </div><!-- .promo-box end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .contaienr end -->
    </div><!-- .page-content end -->

    <div class="page-content custom-bkg bkg-grey">
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
