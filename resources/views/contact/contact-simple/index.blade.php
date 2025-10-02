@extends('layouts.trucking-services-main')

@section('title', 'Construction')


@section('content')
    <!-- .page-title start -->
    <div class="page-title-map page-title-negative-top">
        <!-- .container start -->
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>your inquiry</h3>
                    </div><!-- .custom-heading.left end -->

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A very bad
                        quack might jinx zippy fowls. Few quips galvanized
                        the mock jury box. Quick brown dogs jump over the
                        lazy fox. The jay, pig, fox, zebra, and my wolves
                        quack! Blowzy red vixens fight for a quick jump.
                        Joaquin Phoenix was gazed by MTV for luck. A
                        wizard’s job is to vex chumps quickly in fog. Watch
                        "Jeopardy!", Alex Trebek's fun TV quiz game.
                        Woven silk pyjamas exchanged for blue quartz.
                        Brawny gods just.
                    </p>

                    <br/>

                    <div class="custom-heading">
                        <h4>company information</h4>
                    </div><!-- .custom-heading end -->

                    <address>
                        123 Second Street Fifth Avenue, <br/>
                        Manhattan, New York
                    </address>

                    <span class="text-big colored">
                            +00 41 258 489 6587
                        </span>
                    <br/>

                    <a href="mailto:">info@trucking.com</a>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6 clearfix">
                    <!-- .contact form start -->
                    <form class="wpcf7" id="contact_form">
                        <fieldset>
                            <label>
                                <span class="required">*</span> Your request:
                            </label>

                            <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                <option value="I need an offer for contract logistics">I need an offer for contract
                                    logistics
                                </option>
                                <option value="I need an offer for air freight">I need an offer for air freight</option>
                                <option value="I want to become your partner">I want to become your partner</option>
                                <option value="I have some other request">I have some other request</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> First Name:
                            </label>

                            <input type="text" class="wpcf7-text" id="contact-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Last Name:
                            </label>

                            <input type="text" class="wpcf7-text" id="contact-last-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Email:
                            </label>

                            <input type="email" class="wpcf7-text" id="contact-email">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> Message:
                            </label>

                            <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                        </fieldset>

                        <input type="submit" class="wpcf7-submit" value="send"/>
                    </form><!-- .wpcf7 end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->


    <div id="footer-wrapper" class="footer-dark">
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                        <!-- .widget.widget_text -->
                        <li class="widget widget_newsletterwidget">
                            <div class="title">
                                <h3>newsletter subscribe</h3>
                            </div>

                            <p>
                                Subscribe to our newsletter and we will
                                inform you about newest projects and promotions.
                            </p>

                            <br/>

                            <form class="newsletter">
                                <input class="email" type="email" placeholder="Your email...">
                                <input type="submit" class="submit" value="">
                            </form>
                        </li><!-- .widget.widget_newsletterwidget end -->
                    </ul><!-- .col-md-3.footer-widget-container end -->

                    <ul class="col-md-3 col-sm-6 footer-widget-container">
                        <!-- .widget-pages start -->
                        <li class="widget widget_pages">
                            <div class="title">
                                <h3>quick links</h3>
                            </div>

                            <ul>
                                <li><a href="about01.html">About us</a></li>
                                <li><a href="company-history.html">Company history</a></li>
                                <li><a href="events.html">Company Events</a></li>
                                <li><a href="supply-chain-management.html">Supply chain management</a></li>
                                <li><a href="warehousing.html">Warehousing</a></li>
                                <li><a href="news-standard.html">Company news</a></li>
                                <li><a href="driver-application.html">Online driver application</a></li>
                            </ul>
                        </li><!-- .widget-pages end -->
                    </ul><!-- .col-md-3.footer-widget-container end -->

                    <ul class="col-md-3 col-sm-6 footer-widget-container">
                        <!-- .widget-pages start -->
                        <li class="widget widget_pages">
                            <div class="title">
                                <h3>Industry solutions</h3>
                            </div>

                            <ul>
                                <li><a href="overland-transportation.html">Overland transportation</a></li>
                                <li><a href="air-freight.html">Air freight</a></li>
                                <li><a href="ocean-freight.html">Ocean freight</a></li>
                                <li><a href="large-projects.html">Large projects</a></li>
                                <li><a href="rail-transportation.html">Rail international shipping</a></li>
                                <li><a href="contract-logistics.html">Contract logistics</a></li>
                                <li><a href="packaging-options.html">Packaging options</a></li>
                            </ul>
                        </li><!-- .widget-pages end -->
                    </ul><!-- .col-md-3.footer-widget-container end -->

                    <ul class="col-md-3 col-sm-6 footer-widget-container">
                        <li class="widget widget-text">
                            <div class="title">
                                <h3>contact us</h3>
                            </div>

                            <address>
                                123 Second Street Fifth Avenue, <br/>
                                Manhattan, New York
                            </address>

                            <span class="text-big">
                                    +00 41 258 489 6587
                                </span>
                            <br/>

                            <a href="mailto:">info@trucking.com</a>
                            <br/>
                            <ul class="footer-social-icons">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul><!-- .footer-social-icons end -->
                        </li><!-- .widget.widget-text end -->
                    </ul><!-- .col-md-3.footer-widget-container end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </footer><!-- #footer end -->

        <div class="copyright-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>TRUCKING 2015. All RIGHTS RESERVED.</p>
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">
                        <p class="align-right">DESIGNED AND DEVELOPED BY <a href="www.pixel-industry.com">PIXEL
                                INDUSTRY.</a> ELITE AUTHOR.</p>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .copyright-container end -->

        <a href="#" class="scroll-up">Scroll</a>
    </div><!-- #footer-wrapper end -->
@endsection

@push('scripts')
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function ($) {
            'use strict';
            // GOOGLE MAPS START
            var locations = [
                ['London Trucking Headquarters', 51.50013, -0, 126305, 4],
                ['Trucking Headquarters Paris', 48.8566667, 2.3509871, 5],
                ['Trucking Warehouse, Oslo', 59.9138204, 10.7387413, 3],
                ['Trucking Vehicle Fleet, Rome', 41.8954656, 12.4823243, 2],
                ['Trucking Support Center, Madrid', 40.4166909, -3.7003454, 1],
                ['Trucking airport, Moscow', 55.755786, 37.617633, 6],
                ['Trucking Warehouse, Prague', 50.0878114, 14.4204598, 7],
                ['Trucking Warehouse, Quebec', 52.9399159, -73.5491361, 8],
                ['Trucking Headquarters, Ontario', 51.590723, -86.396484, 9],
                ['Trucking Vehicle Fleet, Montana', 46.860191, -109.599609, 10],
                ['Trucking Support Center, Alberta', 56.46249, -114.960937, 11],
                ['Trucking Vehicle Fleet, Yukon', 63.332413, -136.098633, 12],
                ['Trucking Headquarters Minesota', 46.729553, -94.6858998, 13],
                ['Trucking Headquarters Virginia Beach', 36.8529263, -75.977985, 14],
                ['Trucking Headquarters Chicago', 41.850033, -87.6500523, 15],
                ['Trucking Headquarters Athens', 37.926868, 23.730469, 16],
                ['Trucking Headquarters New Delhi', 28.574874, 77.299805, 17]
            ];


            var style = [
                {
                    "featureType": "road",
                    "elementType":
                        "labels.icon",
                    "stylers": [
                        {"saturation": 1},
                        {"gamma": 1},
                        {"visibility": "on"},
                        {"hue": "#e6ff00"}
                    ]
                },
                {
                    "elementType": "geometry", "stylers": [
                        {"saturation": -85}
                    ]
                }
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                // SET THE CENTER
                center: new google.maps.LatLng(50.0878114, 14.4204598),
                // SET THE MAP STYLE & ZOOM LEVEL
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 3,
                // SET THE BACKGROUND COLOUR
                backgroundColor: "#eeeeee",
                // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true,
                scrollwheel: false,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL
                }
            });

            var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
            map.mapTypes.set('grey', mapType);
            map.setMapTypeId('grey');

            var infowindow = new google.maps.InfoWindow();

            //CREATE A CUSTOM PIN ICON
            var marker_image = 'img/pin.png';
            var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: pinIcon
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    };
                })(marker, i));
            }
            ;

            // CONTACT FORM AJAX SUBMIT START
            $('#contact_form').on('submit', function (e) {
                console.log('arda')
                e.preventDefault();
                var inquiry = $('#contact-inquiry option:selected').text();
                var name = $('#contact-name').val();
                var lastname = $('#contact-last-name').val();
                var email = $('#contact-email').val();
                var contact_message = $('#contact-message').val();
                var form_data = {
                    'inquiry': inquiry,
                    'name': name,
                    'last_name': lastname,
                    'email': email,
                    'message': contact_message
                };
                $.ajax({
                    type: 'POST',
                    url: "{{route('contact-simple.post')}}",
                    data: ({
                        'action': 'contact',
                        ...form_data,
                        '_token': '{{csrf_token()}}'
                    })
                }).done(function (data) {
                    alert(data.message);
                }).fail(function (xhr) {
                    // Hata durumunda
                    alert('Something went wrong, please try again later.');
                });
            });
        });
        /* ]]> */
    </script>
@endpush
