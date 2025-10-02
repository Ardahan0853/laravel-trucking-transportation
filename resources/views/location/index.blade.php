@extends('layouts.trucking-services-main')

@section('title', 'Logistic Services')

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
                <div class="col-md-12">
                    <div class="custom-heading02">
                        <h2>Our Locations</h2>
                        <p>
                            We have locations on every part of the globe
                        </p>
                    </div><!-- .custom-heading end -->
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="custom-heading">
                        <h3>ASIA pacific</h3>
                    </div><!-- .custom-heading02 end -->

                    <ul class="locations-li">
                        <li>
                            <h3>A</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Afganistan
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Australia
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>C</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Cambodia
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    China
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>N</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Nepal
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    New Zeland
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>P</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Papa New Guinea
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Philippines
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>S</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Singapore
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Sri Lanka
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>
                    </ul><!-- .locations-li end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-3">
                    <div class="custom-heading">
                        <h3>EUROPE</h3>
                    </div><!-- .custom-heading02 end -->

                    <ul class="locations-li">
                        <li>
                            <h3>A</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Austria
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>B</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Belgium
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Bulgaria
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>C</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Cyprus
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Czech Republic
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>F</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Finland
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    France
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>I</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Ireland
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Italy
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>N</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Netherlands
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Norway
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>
                    </ul><!-- .locations-li end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-3">
                    <div class="custom-heading">
                        <h3>america</h3>
                    </div><!-- .custom-heading02 end -->

                    <ul class="locations-li">
                        <li>
                            <h3>A</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Argentina
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Aruba
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>B</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Bolivia
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Brazil
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>C</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Canada
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Chile
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Costa Rica
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>E</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Ecuador
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    El Salvador
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>P</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Panama
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Peru
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>U</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    United States
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Uruguay
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>V</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Venezuela
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>
                    </ul><!-- .locations-li end -->
                </div><!-- .col-md-3 end -->

                <div class="col-md-3 col-sm-3">
                    <div class="custom-heading">
                        <h3>middle east & africa</h3>
                    </div><!-- .custom-heading02 end -->

                    <ul class="locations-li">
                        <li>
                            <h3>A</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Abu Dhabi
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Algeria
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>B</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Bahrain
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>K</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Kenia
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Kuwait
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>

                        <li>
                            <h3>M</h3>

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Madagascar
                                </li>

                                <li>
                                    <i class="fa fa-li fa-map-marker"></i>
                                    Maroco
                                </li>
                            </ul><!-- .fa-ul end -->
                        </li>
                    </ul><!-- .locations-li end -->
                </div><!-- .col-md-3 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
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
                    }
                })(marker, i));
            }
        });
        /* ]]> */
    </script>
@endpush
