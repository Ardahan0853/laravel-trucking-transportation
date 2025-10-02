@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@section('content')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg13">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Trucking - Our history</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about03.html">About</a>
                            </li>

                            <li>
                                <a href="#">Company history</a>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->


    <div class="page-content">
        <div class="container">
            <div class="row">
                <aside class="col-md-3 aside aside-left">
                    <ul class="aside-widgets">
                        <li class="widget widget_nav_menu clearfix">
                            <div class="title">
                                <h3>company</h3>
                            </div>

                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="about01.html">About simple</a>
                                </li>

                                <li class="menu-item">
                                    <a href="about02.html">About compact</a>
                                </li>

                                <li class="menu-item">
                                    <a href="about03.html">About with sidebar</a>
                                </li>

                                <li class="menu-item">
                                    <a href="simple-page-title.html">Simple page title</a>
                                </li>

                                <li class="menu-item current-menu-item">
                                    <a href="company-history.html">Company history</a>
                                </li>

                                <li class="menu-item">
                                    <a href="events.html">Company Events</a>
                                </li>

                                <li class="menu-item">
                                    <a href="clients.html">Company clients</a>
                                </li>

                                <li class="menu-item">
                                    <a href="careers.html">Careers</a>
                                </li>

                                <li class="menu-item">
                                    <a href="driver-application.html">Online driver application</a>
                                </li>
                            </ul><!-- .menu end -->
                        </li><!-- .widget.widget_nav_menu end -->

                        <li class="widget widget-text">
                            <div class="title">
                                <h3>brochure download</h3>
                            </div>

                            <img src="img/pics/brochure02.jpg" alt="Trucking brochure"/>
                            <br/>

                            <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                                    <span>
                                        <i class="fa fa-file-pdf-o"></i>
                                        Annual brochure_EN.pdf
                                    </span>
                            </a>

                            <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                                    <span>
                                        <i class="fa fa-file-pdf-o"></i>
                                        Annual brochure_FR.pdf
                                    </span>
                            </a>
                        </li><!-- .widget.widget-text end -->

                        <!-- .widget.widget-text start -->
                        <li class="widget widget-text">
                            <div class="title">
                                <h3>contact us</h3>
                            </div>

                            <img src="img/pics/locations.jpg" alt="contact us"/>

                            <br/>

                            <p>
                                Let us know what can we do for you. Contact
                                us today!
                            </p>

                            <a href="contact-simple.html" class="read-more">
                                    <span>
                                        Contact us
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                            </a>
                        </li><!-- .widget-text end -->
                    </ul><!-- .aside-widgets end -->
                </aside><!-- .aside.aside-left end -->

                <div class="col-md-9">
                    <div class="nivo-wrapper">
                        <div id="slider-1" class="nivoSlider">
                            <img src="{{asset('img/pics/history01.jpg')}}" alt="image 1" title="#slider-caption-1"/>
                            <img src="{{asset('img/pics/history02.jpg')}}" alt="image" title="#slider-caption-2"/>
                            <img src="{{asset('img/pics/history03.jpg')}}" alt="image" title="#slider-caption-3"/>
                        </div><!-- #slider-1.nivoSlider end -->

                        <!-- .captions start -->
                        <div id="slider-caption-1" class="nivo-caption">
                            <h3>Delivery</h3>
                        </div>

                        <div id="slider-caption-2" class="nivo-caption">
                            <h3>Supply Chain management</h3>
                        </div>

                        <div id="slider-caption-3" class="nivo-caption">
                            <h3>Warehousing</h3>
                        </div>
                    </div><!-- .nivo-wrapper end -->

                    <br/><br/>

                    <div class="custom-heading">
                        <h2>our history</h2>
                    </div>

                    <p>
                        A wonderful serenity has taken possession of my
                        entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone, and
                        feel the charm of existence in this spot, which was
                        created for the bliss of souls like mine. I am so
                        happy, my dear friend, so absorbed in the exquisite
                        sense of mere tranquil existence, that I neglect my
                        talents. I should be incapable of drawing a single
                        stroke at the present moment; and yet I feel that
                        I never was a greater artist than now.
                    </p>

                    <br/>

                    <ul class="company-timeline clearfix">
                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2008 Creating powerful logisics and transport network</h3>

                                <p>
                                    Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae
                                    vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam
                                    eius modi tempora incidunt ut labore et
                                    dolore magnam aliquam quaerat voluptatem.
                                </p>
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->

                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2010 Incorporating End-to-end solutions</h3>

                                <p>
                                    Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae
                                    vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam
                                    eius modi tempora incidunt ut labore et
                                    dolore magnam aliquam quaerat voluptatem.
                                </p>
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->

                        <li>
                            <div class="icon-date-container">
                                <i class="fa fa-calendar"></i>
                            </div><!-- .icon-date-container end -->

                            <div class="timeline-item-details">
                                <h3>2014 Expanding our network</h3>

                                <p>
                                    Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam,
                                    eaque ipsa quae ab illo inventore
                                    veritatis et quasi architecto beatae
                                    vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui
                                    ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam
                                    eius modi tempora incidunt ut labore et
                                    dolore magnam aliquam quaerat voluptatem.
                                </p>

                                <ul class="fa-ul clearfix">
                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Higher quality service by optimizing
                                        transport routes, means of transportation and reducing costs
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Strong optimized supply chain
                                        infrastructure that will make a
                                        competitive advantage to your
                                        business
                                    </li>

                                    <li>
                                        <i class="fa fa-li fa-long-arrow-right"></i>
                                        Synchronized demand and supply which
                                        will enable easier and more accurate
                                        predictions of your clients needs
                                    </li>
                                </ul><!-- .fa-ul end -->
                            </div><!-- .timeline-item-details end -->
                        </li><!-- history item end -->
                    </ul><!-- .company-timeline end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection

@push('scripts')

    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function ($) {
            'use strict';

            $('#slider-1').nivoSlider({
                controlNav: false
            });
        });
        /* ]]> */
    </script>
@endpush
