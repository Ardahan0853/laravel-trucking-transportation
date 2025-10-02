@extends('layouts.main')

@section('title', 'Construction')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush

@section('content')
    <!-- Section 01 start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg08">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('contact_title') }}</h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>{{ __('contact_form_title') }}</h3>
                    </div><!-- .custom-heading.left end -->

                    <p>{{ __('contact_form_text') }}</p>

                    <br/>

                    <!-- .contact form start -->
                    <form class="wpcf7 clearfix" id="contact_form">
                        <fieldset>
                            <label>
                                <span class="required">*</span> {{ __('Your request:') }}
                            </label>

                            <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                                <option
                                    value="{{ __('I need an offer for contract logistics') }}">{{ __('I need an offer for contract logistics') }}</option>
                                <option
                                    value="{{ __('I need an offer for air freight') }}">{{ __('I need an offer for air freight') }}</option>
                                <option
                                    value="{{ __('I want to become your partner') }}">{{ __('I want to become your partner') }}</option>
                                <option
                                    value="{{ __('I have some other request') }}">{{ __('I have some other request') }}</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> {{ __('First Name:') }}
                            </label>

                            <input type="text" class="wpcf7-text" id="contact-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> {{ __('Last Name:') }}
                            </label>

                            <input type="text" class="wpcf7-text" id="contact-last-name">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> {{ __('Email:') }}
                            </label>

                            <input type="mail" class="wpcf7-text" id="contact-email">
                        </fieldset>

                        <fieldset>
                            <label>
                                <span class="required">*</span> {{ __('Message:') }}
                            </label>

                            <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                        </fieldset>

                        <input type="submit" class="wpcf7-submit" value="{{ __('SEND') }}"/>
                    </form><!-- .wpcf7 end -->
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <div class="custom-heading">
                        <h3>{{ __('contact_map_title') }}</h3>
                    </div><!-- .custom-heading end -->

                    <div id="map"></div>

                    <div class="custom-heading">
                        <h4>{{ __('contact_companyinfo_title') }}</h4>
                    </div><!-- .custom-heading end -->

                    <address>
                        {{ __('Vācieša Street 6B, Riga, Latvia, LV-1004') }}
                    </address>

                    <span class="text-big colored">
                    {{ __('+00 41 258 489 6587') }}
                </span>
                    <br/>

                    <a href="mailto:">{{ __('info@trucking.com') }}</a>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

    <!-- LOCATION START -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-heading">
                        <h2>{{ __('about_location_title') }}</h2>
                    </div><!-- .custom-heading end -->

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-latvia.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_1_title') }}</h5>
                                    <p class="position">{{ __('location_1_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-sweden.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_2_title') }}</h5>
                                    <p class="position">{{ __('location_2_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-estonia.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_3_title') }}</h5>
                                    <p class="position">{{ __('location_3_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-finland.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_4_title') }}</h5>
                                    <p class="position">{{ __('location_4_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-denmark.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_5_title') }}</h5>
                                    <p class="position">{{ __('location_5_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-lithuania.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_6_title') }}</h5>
                                    <p class="position">{{ __('location_6_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-sweden.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_7_title') }}</h5>
                                    <p class="position">{{ __('location_7_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="img/pics/mapon-cesis.jpg" alt=""/>
                                <div class="team-details">
                                    <h5>{{ __('location_8_title') }}</h5>
                                    <p class="position">{{ __('location_8_subtitle') }}</p>
                                </div><!-- .team-details end -->
                            </div><!-- .member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        /* <![CDATA[ */
        jQuery(document).ready(function ($) {
            'use strict';
            // GOOGLE MAPS START
            window.marker = null;

            function initialize() {
                var map;

                var nottingham = new google.maps.LatLng(52.934658, -1.131450);

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

                var mapOptions = {
                    // SET THE CENTER
                    center: nottingham,
                    // SET THE MAP STYLE & ZOOM LEVEL
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 9,
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

                };
                map = new google.maps.Map(document.getElementById('map'), mapOptions);

                // SET THE MAP TYPE
                var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                map.mapTypes.set('grey', mapType);
                map.setMapTypeId('grey');

                //CREATE A CUSTOM PIN ICON
                var marker_image = 'img/pin.png';
                var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                marker = new google.maps.Marker({
                    position: nottingham,
                    map: map,
                    icon: pinIcon,
                    title: 'Trucking Headquarters, Nothingham'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

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
