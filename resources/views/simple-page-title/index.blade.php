@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@section('content')
    <div class="header-wrapper">
        <!-- .header.header-style01 start -->
        <header id="header" class="header-style02">
            <div id="top-bar-wrapper" class="clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul id="quick-links">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>+00 41 895 785 6985</span>
                                </li>

                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="contact-simple.html">Contact us today</a>
                                </li>
                            </ul><!-- .quick links end -->
                        </div><!-- .col-md-6 end -->

                        <div class="col-md-6">
                            <div class="wpml-languages enabled">
                                <a class="active" href="index08.html">
                                    <img src="img/en.png" alt="English"/>

                                    <i class="fa fa-chevron-down"></i>
                                </a>

                                <ul class="wpml-lang-dropdown">
                                    <li>
                                        <a href="index08.html">
                                            <img src="img/de.png" alt="German"/>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="index08.html">
                                            <img src="img/it.png" alt="Italian"/>
                                        </a>
                                    </li>
                                </ul><!-- .wpml-lang-dropdown end -->
                            </div><!-- .wpml-languages.enabled end -->
                        </div><!-- .col-md-6 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .top-bar-wrapper end -->

            <div class="header-inner">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="img/logo.png"
                                                     alt="Trucking Transportation and Logistics HTML Template"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    <!-- MAIN NAVIGATION -->
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Home</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="index.html">Home default</a></li>
                                                    <li><a href="index02.html">Trucking services overview</a></li>
                                                    <li><a href="index03.html">Trucking video slider</a></li>
                                                    <li><a href="index04.html">Trucking home simple</a></li>
                                                    <li><a href="index05.html">Trucking services slider</a></li>
                                                    <li><a href="index06.html">Trucking parallax slider</a></li>
                                                    <li><a href="index07.html">Trucking Vehicle Fleet</a></li>
                                                    <li><a href="index08.html">Trucking corporate</a></li>
                                                    <li><a href="index09.html">Trucking simple slider</a></li>
                                                    <li><a href="index10.html">Fullscreen minimal</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown current-menu-item">
                                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">About</a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Header
                                                            types</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="index.html">Header default</a></li>
                                                            <li><a href="header-default-top-bar.html">Header default top
                                                                    bar</a></li>
                                                            <li><a href="index08.html">Header simple light bar</a></li>
                                                            <li><a href="header-simple-dark-bar.html">Header simple dark
                                                                    bar</a></li>
                                                            <li><a href="header-simple-dark.html">Header simple dark</a>
                                                            </li>
                                                            <li><a href="header-menu-bottom.html">Header menu bottom
                                                                    light</a></li>
                                                            <li><a href="header-menu-bottom-dark.html">Header menu
                                                                    bottom dark</a></li>
                                                        </ul><!-- .dropdown-menu end -->
                                                    </li>
                                                    <li><a href="{{route('about-simple.index')}}">About simple</a></li>
                                                    <li><a href="{{route('about-compact.index')}}">About compact</a>
                                                    </li>
                                                    <li><a href="{{route('about-sidebar.index')}}">About with
                                                            sidebar</a></li>
                                                    <li><a href="{{route('simple-page-title.index')}}">Simple page
                                                            title</a>
                                                    </li>
                                                    <li><a href="{{route('company-history.index')}}">Company history</a>
                                                    </li>
                                                    <li><a href="{{route('company-events.index')}}">Company Events</a>
                                                    </li>
                                                    <li><a href="{{route('company-clients.index')}}">Company Clients</a>
                                                    </li>
                                                    <li><a href="{{route('careers.index')}}">Careers</a></li>
                                                    <li><a href="{{route('driver-application.index')}}">Online driver
                                                            application</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown" class="dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="services01.html">Services overview</a></li>
                                                    <li class="dropdown dropdown-submenu">
                                                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Logistics</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="services02.html">Logistics</a></li>
                                                            <li><a href="overland-transportation.html">Overland
                                                                    transportation</a></li>
                                                            <li><a href="air-freight.html">Air freight</a></li>
                                                            <li><a href="ocean-freight.html">Ocean freight</a></li>
                                                            <li><a href="large-projects.html">Large projects</a></li>
                                                            <li><a href="rail-transportation.html">Rail international
                                                                    shipping</a></li>
                                                            <li><a href="contract-logistics.html">Contract logistics</a>
                                                            </li>
                                                        </ul><!-- .dropdown-menu end -->
                                                    </li><!-- .dropdown-submenu end -->
                                                    <li><a href="warehousing.html">Warehousing</a></li>
                                                    <li><a href="supply-chain-management.html">Supply chain
                                                            management</a></li>
                                                    <li><a href="packaging-options.html">Packaging options</a></li>
                                                    <li><a href="consulting-services.html">Consulting services</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown" class="dropdown-toggle">News</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="news-list.html">News list</a></li>
                                                    <li><a href="news-masonry.html">News masonry</a></li>
                                                    <li><a href="news-standard.html">News standard</a></li>
                                                    <li><a href="news-single.html">News single</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown" class="dropdown-toggle">Media</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="gallery01.html">Vehicle gallery full</a></li>
                                                    <li><a href="gallery02.html">Vehicle gallery grid</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->

                                            <li><a href="locations.html">Locations</a></li>

                                            <li class="dropdown">
                                                <a href="" data-toggle="dropdown" class="dropdown-toggle">Contact</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="contact-simple.html">Contact simple</a></li>
                                                    <li><a href="contact-locations.html">Contact locations</a></li>
                                                </ul><!-- .dropdown-menu end -->
                                            </li><!-- .dropdown end -->
                                        </ul><!-- .nav.navbar-nav end -->

                                        <!-- RESPONSIVE MENU -->
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <button class="dl-trigger">Open Menu</button>

                                            <ul class="dl-menu">
                                                <li>
                                                    <a href="index.html">Home</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="index.html">Home default</a></li>
                                                        <li><a href="index02.html">Trucking services overview</a></li>
                                                        <li><a href="index03.html">Trucking video slider</a></li>
                                                        <li><a href="index04.html">Trucking home simple</a></li>
                                                        <li><a href="index05.html">Trucking services slider</a></li>
                                                        <li><a href="index06.html">Trucking parallax slider</a></li>
                                                        <li><a href="index07.html">Trucking Vehicle Fleet</a></li>
                                                        <li><a href="index08.html">Trucking corporate</a></li>
                                                        <li><a href="index09.html">Trucking simple slider</a></li>
                                                        <li><a href="index10.html">Fullscreen minimal</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">About</a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="">Header types</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="index.html">Header default</a></li>
                                                                <li><a href="header-default-top-bar.html">Header default
                                                                        top bar</a></li>
                                                                <li><a href="index08.html">Header simple light bar</a>
                                                                </li>
                                                                <li><a href="header-simple-dark-bar.html">Header simple
                                                                        dark bar</a></li>
                                                                <li><a href="header-simple-dark.html">Header simple
                                                                        dark</a></li>
                                                                <li><a href="header-menu-bottom.html">Header menu bottom
                                                                        light</a></li>
                                                                <li><a href="header-menu-bottom-dark.html">Header menu
                                                                        bottom dark</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                        <li><a href="{{route('about-simple.index')}}">About simple</a>
                                                        </li>
                                                        <li><a href="{{route('about-compact.index')}}">About compact</a>
                                                        </li>
                                                        <li><a href="{{route('about-sidebar.index')}}">About with
                                                                sidebar</a></li>
                                                        <li><a href="{{route('simple-page-title.index')}}">Simple page
                                                                title</a>
                                                        </li>
                                                        <li><a href="{{route('company-history.index')}}">Company
                                                                history</a></li>
                                                        <li><a href="{{route('company-events.index')}}">Company
                                                                Events</a></li>
                                                        <li><a href="{{route('company-clients.index')}}">Company
                                                                Clients</a></li>
                                                        <li><a href="{{route('careers.index')}}">Careers</a></li>
                                                        <li><a href="{{route('driver-application.index')}}">Online
                                                                driver
                                                                application</a></li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">Services</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="services01.html">Services overview</a></li>
                                                        <li>
                                                            <a href="#">Logistics</a>
                                                            <ul class="dl-submenu">
                                                                <li><a href="services02.html">Logistics</a></li>
                                                                <li><a href="overland-transportation.html">Overland
                                                                        transportation</a></li>
                                                                <li><a href="air-freight.html">Air freight</a></li>
                                                                <li><a href="ocean-freight.html">Ocean freight</a></li>
                                                                <li><a href="large-projects.html">Large projects</a>
                                                                </li>
                                                                <li><a href="rail-transportation.html">Rail
                                                                        international shipping</a></li>
                                                                <li><a href="contract-logistics.html">Contract
                                                                        logistics</a></li>
                                                            </ul><!-- .dl-submenu end -->
                                                        </li>
                                                        <li><a href="warehousing.html">Warehousing</a></li>
                                                        <li><a href="supply-chain-management.html">Supply chain
                                                                management</a></li>
                                                        <li><a href="packaging-options.html">Packaging options</a></li>
                                                        <li><a href="consulting-services.html">Consulting services</a>
                                                        </li>
                                                    </ul><!-- dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">News</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="news-list.html">News list</a></li>
                                                        <li><a href="news-masonry.html">News masonry</a></li>
                                                        <li><a href="news-standard.html">News standard</a></li>
                                                        <li><a href="news-single.html">News single</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>

                                                <li>
                                                    <a href="#">Gallery</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="gallery01.html">Vehicle gallery full</a></li>
                                                        <li><a href="gallery02.html">Vehicle gallery grid</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>

                                                <li><a href="locations.html">Locations</a></li>

                                                <li>
                                                    <a href="#">Contact</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="contact-simple.html">Contact simple</a></li>
                                                        <li><a href="contact-locations.html">Contact locations</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>
                                            </ul><!-- .dl-menu end -->
                                        </div><!-- #dl-menu end -->

                                        <!-- #search start -->
                                        <div id="search">
                                            <form action="#" method="get">
                                                <input class="search-submit" type="submit"/>
                                                <input id="m_search" name="s" type="text"
                                                       placeholder="Type and hit enter..."/>
                                            </form>
                                        </div><!-- #search end -->
                                    </div><!-- MAIN NAVIGATION END -->
                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </div><!-- .header-inner end -->
        </header><!-- .header.header-style01 -->
    </div><!-- .header-wrapper end -->

    <!-- .page-title start -->
    <div class="page-title-style02 pt-bkg02">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Trucking - Global Logistics Solutions</h1>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
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
                                <a href="#">About us with sidebar</a>
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
                                    <a href="{{route('about-simple.index')}}">About simple</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('about-compact.index')}}">About compact</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('about-sidebar.index')}}">About with sidebar</a>
                                </li>

                                <li class="menu-item current-menu-item">
                                    <a href="{{route('simple-page-title.index')}}">Simple page title</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('company-history.index')}}">Company history</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('company-events.index')}}">Company Events</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('company-clients.index')}}">Company Clients</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('careers.index')}}">Careers</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('driver-application.index')}}">Online driver application</a>
                                </li>
                            </ul><!-- .menu end -->
                        </li><!-- .widget.widget_nav_menu end -->

                        <li class="widget widget-text">
                            <div class="title">
                                <h3>brochure download</h3>
                            </div>

                            <img src="img/pics/brochure02.jpg" alt="Trucking brochure"/>
                            <br/>

                            <a href="{{asset('trucking_brochure.pdf')}}" target="_blank" class="download-link">
                                    <span>
                                        <i class="fa fa-file-pdf-o"></i>
                                        Annual brochure_EN.pdf
                                    </span>
                            </a>

                            <a href="{{asset('trucking_brochure.pdf')}}" target="_blank" class="download-link">
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
                    <div class="custom-heading">
                        <h2>company profile</h2>
                    </div>

                    <img class="float-right" src="img/pics/img25.jpg" alt="" width="360"/>

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
                        I throw myself down among the tall grass by the
                        trickling stream; and, as I lie close to the earth,
                        a thousand unknown plants are noticed by me: when I
                        hear the buzz of the little world among the stalks,
                        and grow familiar with the countless indescribable
                        forms of the insects and flies, then I feel the
                        presence of the Almighty, who formed us in his own
                        image, and the breath.
                    </p>

                    <br/>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="custom-heading">
                                <h3>our mission</h3>
                            </div><!-- .custom-heading end -->

                            <p>
                                A wonderful serenity has taken possession
                                of my entire soul, like these sweet mornings
                                of spring which I enjoy with my whole heart.
                                I am alone, and feel the charm of existence
                                in this spot, which was created for the
                                bliss of souls like mine. I am so happy,
                                my dear friend, so absorbed in the exquisite
                                sense of mere tranquil existence, that I
                                neglect my talents.
                            </p>
                        </div><!-- .col-md-5 end -->

                        <div class="col-md-7">
                            <div class="custom-heading">
                                <h3>our promise</h3>
                            </div><!-- .custom-heading end -->

                            <ul class="fa-ul">
                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Providing high quality transportation services to all of our clients
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Invest in our employees to provide better service and company growth
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Worry about enviroment according to latest industry standards
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Safety as top priority in assuring safe work procedures
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Investing in technology to provide fast, acurate and cost-effective service
                                </li>

                                <li>
                                    <i class="fa fa-li fa-long-arrow-right"></i>
                                    Living up to highest industry standards
                                </li>
                            </ul><!-- .fa-ul end -->
                        </div><!-- .col-md-7 end -->
                    </div><!-- .row end -->


                    <div class="custom-heading">
                        <h3>the board of directors</h3>
                    </div><!-- .custom-heading end -->

                    <ul class="team-list clearfix">
                        <li>
                            <img src="img/pics/team01.jpg" alt=""/>

                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>martha parker</h5>
                                    <p class="position">
                                        Company founder
                                    </p>
                                </div><!-- .team-details end -->

                                <p>
                                    A wonderful serenity has taken
                                    possession of my entire soul, like these
                                    sweet mornings of spring which I enjoy
                                    with my whole heart. I am alone, and
                                    feel the charm of existence in this spot,
                                    which was created for the bliss of souls
                                    like mine. I am so happy, my dear
                                    friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that
                                    I neglect my talents. I should be
                                    incapable of drawing a single stroke at
                                    the present moment; and yet I feel that
                                    I never was a greater artist than now.
                                </p>
                            </div><!-- .team-details-container end -->
                        </li><!-- team-member end -->

                        <li>
                            <img src="img/pics/team02.jpg" alt=""/>

                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>jonathan blum</h5>
                                    <p class="position">
                                        Chief Technical Officer
                                    </p>
                                </div><!-- .team-details end -->

                                <p>
                                    A wonderful serenity has taken
                                    possession of my entire soul, like these
                                    sweet mornings of spring which I enjoy
                                    with my whole heart. I am alone, and
                                    feel the charm of existence in this spot,
                                    which was created for the bliss of souls
                                    like mine. I am so happy, my dear
                                    friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that
                                    I neglect my talents. I should be
                                    incapable of drawing a single stroke at
                                    the present moment; and yet I feel that
                                    I never was a greater artist than now.
                                </p>
                            </div><!-- .team-details-container end -->
                        </li><!-- team-member end -->

                        <li>
                            <img src="img/pics/team03.jpg" alt=""/>

                            <div class="team-details-container">
                                <div class="team-details">
                                    <h5>tom beck</h5>
                                    <p class="position">
                                        Chief Operations Officer
                                    </p>
                                </div><!-- .team-details end -->

                                <p>
                                    A wonderful serenity has taken
                                    possession of my entire soul, like these
                                    sweet mornings of spring which I enjoy
                                    with my whole heart. I am alone, and
                                    feel the charm of existence in this spot,
                                    which was created for the bliss of souls
                                    like mine. I am so happy, my dear
                                    friend, so absorbed in the exquisite
                                    sense of mere tranquil existence, that
                                    I neglect my talents. I should be
                                    incapable of drawing a single stroke at
                                    the present moment; and yet I feel that
                                    I never was a greater artist than now.
                                </p>
                            </div><!-- .team-details-container end -->
                        </li><!-- team-member end -->
                    </ul><!-- .team list end -->
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
            $('.page-content.column-img-bkg *[class^="col-"]').matchHeight({
                byRow: true,
                property: 'height'
            });

            // MASTER SLIDER START
            var slider = new MasterSlider();
            slider.setup('masterslider', {
                width: 1140, // slider standard width
                height: 854, // slider standard height
                space: 0,
                speed: 50,
                layout: "fullscreen",
                centerControls: false,
                loop: true,
                autoplay: true
                // more slider options goes here...
                // check slider options section in documentation for more options.
            });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');

            $('.matchHeight *[class^="col-"]').matchHeight({
                byRow: true
            });

            function positioning() {
                var container_height = $('.page-content.fixed.centered .container').height();
                $('.page-content.fixed.centered .container').css('margin-top', -container_height / 2);

                var container_width = $('.page-content.fixed.centered .container').width();
                $('.page-content.fixed.centered .container').css('margin-left', -container_width / 2);

                var container_bottom_width = $('.page-content.fixed.bottom .container').width();
                $('.page-content.fixed.bottom .container').css('margin-left', -container_bottom_width / 2);
            };

            $(document).ready(positioning);
            $(window).resize(positioning);


            $('#news-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 30,
                responsiveClass: true,
                mouseDrag: true,
                dots: false,
                autoheight: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    600: {
                        items: 1,
                        nav: true,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        autoHeight: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
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
        });
        /* ]]> */
    </script>
@endpush
