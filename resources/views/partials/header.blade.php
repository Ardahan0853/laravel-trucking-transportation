<!-- NAVBAR start -->
<div class="header-wrapper header-transparent">
    <!-- .header.header-style01 start -->
    <header id="header" class="header-style01">
        <div id="top-bar-wrapper" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-9">
                        <ul id="quick-links" class="clearfix">
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel:+00412584896587">+00 41 258 489 6587</a>
                            </li>

                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="contact.html">{{ __('contact_navbar') }}</a>
                            </li>
                        </ul><!-- .quick links end -->
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .top-bar-wrapper end -->
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
                                    <a href={{route('home.index')}}>
                                        <img src="{{asset('img/logo.webp')}}"
                                             alt="Trucking Transportation and Logistics"/>
                                    </a>
                                </div><!-- .logo end -->
                            </div><!-- .navbar-header start -->

                            <!-- MAIN NAVIGATION -->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a class="nav-link {{request()->is('/') ? 'active' : ''}}" href="{{route('home.index')}}">{{ __('nav_home') }}</a></li>
                                    <li><a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="{{route('about.index')}}">{{ __('nav_about') }}</a></li>
                                    <li class="dropdown menu-item">
                                        <a href="services.html" data-toggle="dropdown"
                                           class="dropdown-toggle nav-link {{request()->is('industries/*') ? 'active' : ''}}">{{ __('nav_services') }}</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('industries.logistic.index')}}">{{ __('nav_services_1') }}</a></li>
                                            <li><a href="{{route('industries.construction.index')}}">{{ __('nav_services_2') }}</a></li>
                                            <li><a href="{{route('industries.delivery-management.index')}}">{{ __('nav_services_3') }}</a></li>
                                            <li><a href="{{route('industries.agriculture.index')}}">{{ __('nav_services_4') }}</a></li>
                                            <li><a href="{{route('industries.waste-management.index')}}">{{ __('nav_services_5') }}</a></li>
                                            <li><a href="{{route('industries.passenger-transport.index')}}">{{ __('nav_services_6') }}</a></li>
                                        </ul><!-- .dropdown-menu end -->
                                    </li><!-- .dropdown end -->
                                    <li><a href="{{route('contact.index')}}">{{ __('nav_contact') }}</a></li>

                                    <!-- LANGUAGE OPTIONS -->
                                    <div class="language-options">
                                        <a href="{{ route('setLocale', 'tr') }}" class="lang lang-tr"
                                           title="Türkçe"></a>
                                        <a href="{{ route('setLocale', 'en') }}" class="lang lang-en"
                                           title="English"></a>
                                        <a href="{{ route('setLocale', 'de') }}" class="lang lang-de"
                                           title="Deutsch"></a>
                                    </div>
                                </ul><!-- .nav.navbar-nav end -->

                                <!-- RESPONSIVE MENU -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>

                                    <ul class="dl-menu">
                                        <li><a href="index.html">{{ __('nav_home') }}</a></li>
                                        <li><a href="about.html">{{ __('nav_about') }}</a></li>
                                        <li><a href="services.html">{{ __('nav_services') }}</a></li>
                                        <li><a href="contact.html">{{ __('nav_contact') }}</a></li>

                                        <!-- LANGUAGE OPTIONS -->
                                        <li class="dl-language">
                                            <a href="{{ route('setLocale', 'tr') }}" class="lang lang-tr" title="Türkçe"></a>
                                            <a href="{{ route('setLocale', 'en') }}" class="lang lang-en" title="English"></a>
                                            <a href="{{ route('setLocale', 'de') }}" class="lang lang-de" title="Deutsch"></a>
                                        </li>
                                    </ul><!-- .dl-menu end -->
                                </div><!-- #dl-menu end -->
                            </div><!-- MAIN NAVIGATION END -->
                        </nav><!-- .navbar.navbar-default end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .main-nav end -->
        </div><!-- .container end -->
    </header><!-- .header.header-style01 -->
</div><!-- .header-wrapper end -->
<!-- NAVBAR end -->
