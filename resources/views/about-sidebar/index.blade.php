@extends('layouts.trucking-services-main')

@section('title', 'TRUCKPOST')

@section('content')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg02">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Trucking - Global Logistics Solutions</h1>

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
                                    <a href="about01.html">About simple</a>
                                </li>

                                <li class="menu-item">
                                    <a href="about02.html">About compact</a>
                                </li>

                                <li class="menu-item current-menu-item">
                                    <a href="about03.html">About with sidebar</a>
                                </li>

                                <li class="menu-item">
                                    <a href="simple-page-title.html">Simple page title</a>
                                </li>

                                <li class="menu-item">
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
@endpush
