@extends('layouts.trucking-services-main')

@section('title', 'Passenger Transport')

@section('content')
    <!-- .page-title start -->
    <div class="page-title-style01 page-title-negative-top pt-bkg10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Services - Packaging options</h1>

                    <div class="breadcrumb-container">
                        <ul class="breadcrumb clearfix">
                            <li>You are here:</li>

                            <li>
                                <a href="index.html">Home</a>
                            </li>

                            <li>
                                <a href="services02.html">Services</a>
                            </li>

                            <li>
                                <a href="#">Packaging options</a>
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
                                <h3>services</h3>
                            </div>

                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="services02.html">Logistics</a>
                                </li>

                                <li class="menu-item">
                                    <a href="overland-transportation.html">Overland transportation</a>
                                </li>

                                <li class="menu-item">
                                    <a href="air-freight.html">Air freight</a>
                                </li>

                                <li class="menu-item">
                                    <a href="ocean-freight.html">Ocean freight</a>
                                </li>

                                <li class="menu-item">
                                    <a href="large-projects.html">Project logistics</a>
                                </li>

                                <li class="menu-item">
                                    <a href="contract-logistics.html">Contract logistics</a>
                                </li>

                                <li class="menu-item">
                                    <a href="rail-transportation.html">Rail transportation</a>
                                </li>

                                <li class="menu-item">
                                    <a href="warehousing.html">Warehousing</a>
                                </li>

                                <li class="menu-item">
                                    <a href="supply-chain-management.html">Supply chain management</a>
                                </li>

                                <li class="menu-item current-menu-item">
                                    <a href="packaging-options.html">Packaging options</a>
                                </li>

                                <li class="menu-item">
                                    <a href="consulting-services.html">Consulting services</a>
                                </li>
                            </ul><!-- .menu end -->
                        </li><!-- .widget.widget_nav_menu end -->

                        <li class="widget widget-text">
                            <div class="title">
                                <h3>brochure download</h3>
                            </div>

                            <img src="{{asset('img/pics/brochure02.jpg')}}" alt="Trucking brochure"/>
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

                            <img src="{{asset('img/pics/locations.jpg')}}" alt="contact us"/>

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
                    <img src="{{asset('img/pics/img35.jpg')}}" alt=""/>

                    <br/>

                    <div class="custom-heading">
                        <h2>secure packaging</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        On the other hand, we denounce with righteous
                        indignation and dislike men who are so beguiled
                        and demoralized by the charms of pleasure of the
                        moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to
                        ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will, which is
                        the same as saying through shrinking from toil
                        and pain.
                    </p>

                    <p>
                        These cases are perfectly simple and easy to
                        distinguish. In a free hour, when our power of
                        choice is untrammelled and when nothing prevents
                        our being able to do what we like best, every
                        pleasure is to be welcomed and every pain avoided.
                        But in certain circumstances and owing to the claims
                        of duty or the obligations of business it will
                        frequently occur that pleasures have to be
                        repudiated and annoyances accepted. The wise man
                        therefore always holds in these matters to this
                        principle of selection: he rejects pleasures to
                        secure other greater pleasures, or else he endures
                        pains to avoid worse pains.
                    </p>

                    <br/>

                    <div class="custom-heading">
                        <h3>packaging options</h3>
                    </div><!-- .custom-heading end -->

                    <p>
                        On the other hand, we denounce with righteous
                        indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment,
                        so blinded by desire, that they cannot foresee the
                        pain and trouble that are bound to ensue; and equal
                        blame belongs to those who fail in their duty
                        through weakness of will, which is the same as
                        saying through shrinking from toil and pain.
                    </p>

                    <br/>

                    <img src="{{asset('img/pics/packaging.jpg')}}" alt=""/>

                    <br/><br/>

                    <div class="table-responsive">
                        <table class="table">
                            <caption>packaging options table</caption>

                            <thead>
                            <tr>
                                <th>package size</th>
                                <th>small</th>
                                <th>medium</th>
                                <th>large</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Package dimensions</td>
                                <td>120 x 150 x 178</td>
                                <td>120 x 150 x 178</td>
                                <td>120 x 150 x 178</td>
                            </tr>

                            <tr>
                                <td>Weight</td>
                                <td>35 kg</td>
                                <td>45kg</td>
                                <td>65kg</td>
                            </tr>

                            <tr>
                                <td>Capacity</td>
                                <td>approx 158 units of textile</td>
                                <td>approx 258 units of textile</td>
                                <td>approx 258 units of textile</td>
                            </tr>
                            </tbody>
                        </table><!-- .table end -->
                    </div><!-- .table-responsive end -->
                </div><!-- .col-md-9 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->
@endsection

@push('scripts')
@endpush
