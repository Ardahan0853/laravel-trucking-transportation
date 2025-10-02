@extends('layouts.main')

@section('title', __('TRUCKPOST'))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/color-default.css')}}"/>
@endpush
@section('content')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg03">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('services4_title') }}</h1>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style01.page-title-negative-top end -->

    <!-- Section 01 start -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="custom-heading">
                        <h2>{{ __('services4_section_title') }}</h2>
                    </div><!-- .custom-heading end -->
                    <p>{{ __('services4_section_text') }}</p>
                    <p>{{ __('services4_section_text2') }}</p>

                    <ul class="fa-ul">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p>{{ __('service4_list_item') }}</p>
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p>{{ __('service4_list_item_2') }}</p>
                        </li>
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            <p>{{ __('service4_list_item_3') }}</p>
                        </li>
                    </ul><!-- .fa-ul end -->
                </div><!-- .col-md-8 end -->

                <div class="col-md-4">
                    <img src="{{asset('img/pics/agriculture-fleet-tracking-1.webp')}}" alt="{{ __('trucking') }}"/>
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 01 end -->

    <!-- Section 02 start -->
    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-full-img">
                    <img src="{{asset('img/pics/ARTIS-JP.webp')}}" alt="{{ __('trucking') }}"/>
                </div><!-- .col-md-6 end -->
                <div class="col-md-6">
                    <div class="custom-heading">
                        <h2>{{ __('services4_section2_title') }}</h2>
                    </div><!-- .custom-heading end -->
                    <p class="text-big">{{ __('services4_section2_subtitle') }}</p>
                    <p>{{ __('services4_section2_text') }}</p>
                </div><!-- .col-md-6.custom-col-padding end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 02 end -->

    <!-- Section 03 start -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="custom-heading">
                        <h2>{{ __('services4_section3_title') }}</h2>
                    </div><!-- .custom-heading end -->

                    <ul class="fa-ul large-icons">
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('services4_section3_subtitle') }}</h3>
                                <p>{{ __('services4_section3_text') }}</p>
                            </div><!-- .li-content end -->
                        </li>
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('services4_section3_subtitle2') }}</h3>
                                <p>{{ __('services4_section3_text2') }}</p>
                            </div><!-- .li-content end -->
                        </li>
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('services4_section3_subtitle3') }}</h3>
                                <p>{{ __('services4_section3_text3') }}</p>
                            </div><!-- .li-content end -->
                        </li>
                        <li>
                            <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                                <i class="fa fa-check-circle"></i>
                            </div>
                            <div class="li-content">
                                <h3>{{ __('services4_section3_subtitle4') }}</h3>
                                <p>{{ __('services4_section3_text4') }}</p>
                            </div><!-- .li-content end -->
                        </li>
                    </ul><!-- .fa-ul .fa-ul-large end -->
                </div><!-- .col-md-5 end -->

                <div class="col-md-7 triggerAnimation animated" data-animate="fadeInRight">
                    <img src="{{asset('img/pics/agriculture-fleet-tracking-2.webp')}}" alt="{{ __('trucking') }}"/>
                </div><!-- .col-md-7 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 03 end -->

    <!-- Section 04 start -->
    <div class="page-content custom-bkg bkg-light-blue mb-70">
        <div class="container">
            <div class="row">
                <div class="video-wrapper">
                    <iframe src="{{asset('https://www.youtube.com/embed/PDdgqyrTFT8')}}" title="{{ __('YouTube video') }}"
                            allowfullscreen></iframe>
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
    <!-- Section 04 end -->

@endsection


