@extends('layouts.app')

@section('titlePage', __('page.service.title') . ' || ' . env('APP_NAME'))
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Services
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
                    <h1 class="entry-title">Services</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- cart page content -->
    <div class="services-page-area">
        <!--Service Item Area Start-->
        <section class="service-item-area mt-20">
            <div class="container">
                <div class="row">
                    <!--Single Service Item Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-service-item">
                            <div class="service-img img-full mb-35">
                                <img src="images/service/service1-banner1.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-title">
                                    <h4>DISCUSS IDEAS</h4>
                                </div>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service Item End-->
                    <!--Single Service Item Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-service-item">
                            <div class="service-img img-full mb-35">
                                <img src="images/service/service1-banner2.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-title">
                                    <h4>DESIGN THE COVER</h4>
                                </div>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service Item End-->
                    <!--Single Service Item Start-->
                    <div class="col-md-4 col-sm-4">
                        <div class="single-service-item">
                            <div class="service-img img-full mb-35">
                                <img src="images/service/service1-banner3.jpg" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-title">
                                    <h4>CORE DEVELOPMENT</h4>
                                </div>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service Item End-->
                </div>
            </div>
        </section>
        <!--Service Item Area End-->
        <!--Our Service Area Start-->
        <section class="our-service-area pt-30 bg-2">
            <div class="container">
                <div class="row">
                    <!--Section Title3 Start-->
                    <div class="col-md-12">
                        <div class="section-title3 mb-70">
                            <h3>OUR SERVICES</h3>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore <br>
                                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit..</p>
                        </div>
                    </div>
                    <!--Section Title3 End-->
                </div>
                <div class="row">
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-android-options"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>BRANDING</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-umbrella"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>WEB DESIGN</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-camera"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>PHOTOGRAPHY</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-gear-a"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>WEB DEVELOPMENT</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-android-sunny"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>CODING</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-connection-bars"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>MARKETING</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-headphone"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>SUPPORT</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                    <!--Single Service Start-->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-service mb-50">
                            <div class="service-icon f-left">
                                <i class="ion-leaf"></i>
                            </div>
                            <div class="service-info f-right">
                                <h3>GRAPHIC DESIGN</h3>
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service End-->
                </div>
            </div>
        </section>
        <!--Our Service Area End-->
        <!--Unlimited Ideas Area Start-->
        <section class="unlimited-ideas-area">
            <div class="container-fluid">
                <div class="row">
                    <!--Unlimited Ideas Image Start-->
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <div class="unlimited-ideas-img img-full">
                            <img src="images/service/4.jpg" alt="">
                        </div>
                    </div>
                    <!--Unlimited Ideas Image End-->
                    <!--Unlimited Ideas Content Start-->
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <div class="unlimited-ideas-content">
                            <div class="unlimited-ideas-title">
                                <h2>UNLIMITED IDEAS</h2>
                            </div>
                            <div class="unlimited-ideas-description mtb-60">
                                <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.  Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>
                            <div class="unlimited-ideas-btn mb-20">
                                <a class="service-btn" href="#">MORE INFO <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Unlimited Ideas Content End-->
                </div>
            </div>
        </section>
        <!--Unlimited Ideas Area End-->
        <!--Pricing Table Area Start-->
        <section class="pricing-table-area bg-1 pt-60 pb-25">
            <div class="container">
                <div class="row">
                    <!--Single Pricing Table Start-->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="single-pricing mb-35">
                            <div class="pricing-head">
                                <h4>Standard</h4>
                            </div>
                            <div class="pricing-body">
                                <h5 class="price">£19<span class="desc-price">/Month</span></h5>
                                <ul>
                                    <li>2 GB Webspace</li>
                                    <li>1 Domain</li>
                                    <li>PHP 5 Enbled</li>
                                    <li>24H – Support</li>
                                </ul>
                                <a class="pricing-button" href="#">purchase now </a>
                            </div>
                        </div>
                    </div>
                    <!--Single Pricing Table End-->
                    <!--Single Pricing Table Start-->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="single-pricing active-table mb-35">
                            <div class="pricing-head">
                                <h4>business</h4>
                            </div>
                            <div class="pricing-body">
                                <h5 class="price">£30<span class="desc-price">/Month</span></h5>
                                <ul>
                                    <li>30 GB Webspace</li>
                                    <li>5 Domain</li>
                                    <li>PHP 5 Enbled</li>
                                    <li>24H – Support</li>
                                </ul>
                                <a class="pricing-button" href="#">purchase now </a>
                            </div>
                        </div>
                    </div>
                    <!--Single Pricing Table End-->
                    <!--Single Pricing Table Start-->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="single-pricing mb-35">
                            <div class="pricing-head">
                                <h4>premium</h4>
                            </div>
                            <div class="pricing-body">
                                <h5 class="price">£35<span class="desc-price">/Month</span></h5>
                                <ul>
                                    <li>10 GB Webspace</li>
                                    <li>10 Domain</li>
                                    <li>PHP 10 Enbled</li>
                                    <li>24H – Support</li>
                                </ul>
                                <a class="pricing-button" href="#">purchase now </a>
                            </div>
                        </div>
                    </div>
                    <!--Single Pricing Table End-->
                    <!--Single Pricing Table Start-->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="single-pricing  active-table mb-35">
                            <div class="pricing-head">
                                <h4>Ultimate</h4>
                            </div>
                            <div class="pricing-body">
                                <h5 class="price">£50<span class="desc-price">/Month</span></h5>
                                <ul>
                                    <li>50 GB Webspace</li>
                                    <li>10 Domain</li>
                                    <li>PHP 10 Enbled</li>
                                    <li>24H – Support</li>
                                </ul>
                                <a class="pricing-button" href="#">purchase now </a>
                            </div>
                        </div>
                    </div>
                    <!--Single Pricing Table End-->
                </div>
            </div>
        </section>
        <!--Pricing Table Area End-->
    </div>
@endsection
