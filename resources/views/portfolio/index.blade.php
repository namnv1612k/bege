@extends('layouts.app')

@section('titlePage', __('page.portfolio.title') . ' || ' . env('APP_NAME'))
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">{{ __('page.home.title') }}</a>
                        <span class="separator">/</span> Portfolio
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Page title -->
    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">Portfolio</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- Portfolio Area -->
    <!--Corporate Portfolio Section 1-->
    <div class="co-portfolio-section-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 col-md-12  text-center mb-75">
                    <div class="co-isotop-filter-1 isotop-filter">
                        <button class="active" data-filter="*">All Work</button>
                        <button data-filter=".branding">Branding</button>
                        <button data-filter=".mobile-app">Mobile App</button>
                        <button data-filter=".web">Web</button>
                        <button data-filter=".photography">Photography</button>
                        <button data-filter=".illustration">Illustration</button>
                    </div>
                </div>
            </div>

            <div class="co-isotop-grid-1 isotop-grid row">

                <div class="co-isotop-item-1 isotop-item branding web col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p1.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="image-popup" href="images/portfolio/p1.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item mobile-app photography col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p3.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p3.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">There are many variations</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item illustration web col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p6.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p6.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item photography branding col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p8.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p8.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">passage of Lorem Ipsum</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item illustration mobile-app col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p8.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p8.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">looked up one of the more</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item branding web col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p2.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p2.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">If you are going to use</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item branding web col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p3.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p3.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">accompanied by English</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item mobile-app photography col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p4.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p4.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item illustration web col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p5.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p5.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item photography branding col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p6.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p6.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item illustration mobile-app col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p7.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p7.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>

                <div class="co-isotop-item-1 isotop-item branding web col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
                    <div class="portfolio___single">
                        <img src="images/portfolio/p8.jpg" alt="">
                        <div class="content">
                            <div class="portfolio__icon">
                                <a href="portfolio-details.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class=" image-popup" href="images/portfolio/p8.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="title">Coffee &amp; Cookie Time</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
