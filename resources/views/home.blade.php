@extends('layouts.app')

@section('content')
    <!-- Slider area -->
    <div class="slider-area">
        <!-- slider-area start -->
        <div class="slider-area-inner">
            <!-- slider start -->
            <div class="slider-inner">
                <div id="mainSlider" class="nivoSlider nevo-slider">
                    <img src="images/slider/home4-slider1.jpg" alt="main slider" title="#htmlcaption1"/>
                    <img src="images/slider/home4-slider2.jpg" alt="main slider" title="#htmlcaption2"/>
                </div>

                <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content slider-content-1 slider-animated-1">
                                    <h1 class="hone">INNOVATIVE</h1>
                                    <h1 class="htwo">SMARTER</h1>
                                    <h1 class="hthree">BRIGHTER</h1>
                                    <h3>40” SkyHi Smart Package</h3>
                                    <div class="button-1 hover-btn-2">
                                        <a href="shop.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content slider-content-2 slider-animated-2">
                                    <h1 class="hone">DRONE DIY</h1>
                                    <h1 class="htwo">WORKSHOP</h1>
                                    <h3 class="h3one">Build & Fly</h3>
                                    <h3 class="h3two">Your Own drone!</h3>
                                    <div class="button-1 hover-btn-1">
                                        <a href="shop.html">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- slider end -->
        </div>
        <!-- slider-area end -->
    </div>
    <!-- Slider area end -->
    <!-- Home four banner area -->
    <div class="home-four-banner-area">
        <div class="container">
            <div class="row">
                <div class="four-fast col-sm-6 col-lg-3 col-md-6 col-xs-12">
                    <div class="four-single-banner-text">
                        <div class="four-banner-img">
                            <a href="#">
                                <img src="images/banner/home4-banner1-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="four-banner-text">
                            <h3>Best Camera Under $500</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-6 col-xs-12">
                    <div class="four-single-banner-text">
                        <div class="four-banner-img">
                            <a href="#">
                                <img src="images/banner/home4-banner1-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="four-banner-text">
                            <h3>Best Smatwatch Under $100</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-6 col-xs-12">
                    <div class="four-single-banner-text">
                        <div class="four-banner-img">
                            <a href="#">
                                <img src="images/banner/home4-banner1-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="four-banner-text">
                            <h3>Best Laptop Under $2000</h3>
                        </div>
                    </div>
                </div>
                <div class="four-last col-sm-6 col-lg-3 col-md-6 col-xs-12">
                    <div class="four-single-banner-text">
                        <div class="four-banner-img">
                            <a href="#">
                                <img src="images/banner/home4-banner1-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="four-banner-text">
                            <h3>Best TV Under $800</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home four banner area end -->
    <!-- Deals Of The Day -->
    <div class="deals-of-the-day-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3>Deals Of The Day</h3>
                    </div>
                </div>
            </div>
            <div class="big-product-area">
                <div class="row">
                    <div class="carosel-next-prive product-carousel-active-home-four owl-carousel">
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper listview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/big/product4.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                            <div class="deal-counter">
                                                <div data-countdown="2019/08/02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper listview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/big/product5.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Consequuntur magni</a></h2>
                                            <span class="price">
                                                        <del>$ 89.00</del> $ 80.00
                                                    </span>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                            <div class="deal-counter">
                                                <div data-countdown="2019/08/02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper listview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/big/product6.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Epicuri per</a></h2>
                                            <span class="price">
                                                        <del>$ 68.00</del> $ 62.00
                                                    </span>
                                            <div class="product-rattings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star-half-o"></i></span>
                                                <span><i class="fa fa-star-o"></i></span>
                                            </div>
                                            <div class="product-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                            <div class="deal-counter">
                                                <div data-countdown="2019/08/02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deals Of The Day -->
    <!-- Home fullwidth banner -->
    <div class="home-fullwidth-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#">
                        <img src="images/banner/home4-banner2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Home fullwidth banner end -->
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3>BEST SELLERS</h3>
                    </div>
                </div>
            </div>
            <div class="product-area-inner">
                <div class="row">
                    <div class="home-two-product-carousel-active owl-carousel">
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/1.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/2.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Nulla sed libero</a></h2>
                                            <span class="price">
                                                        $ 45.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/3.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                            <span class="price">
                                                        $ 100.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/4.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Tincidunt malesuada</a></h2>
                                            <span class="price">
                                                        <del>$ 80.00</del> $ 50.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/5.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                            <span class="price">
                                                        $ 45.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/6.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Kaoreet lobortis</a></h2>
                                            <span class="price">
                                                        $ 95.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/7.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Aliquam lobortis est</a></h2>
                                            <span class="price">
                                                        $ 80.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/8.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/9.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Phasellus vel hendrerit</a></h2>
                                            <span class="price">
                                                        $ 55.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <span class="onsale">Sale!</span>
                                                <img src="images/product/10.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                            <span class="price">
                                                        <del>$ 85.00</del> $ 75.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/11.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/12.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/13.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/1.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-sm-12">
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/2.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <!-- single product -->
                            <div class="single-product-area">
                                <div class="product-wrapper gridview">
                                    <div class="list-col4">
                                        <div class="product-image">
                                            <a href="#">
                                                <img src="images/product/3.jpg" alt="">
                                            </a>
                                            <div class="quickviewbtn">
                                                <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-col8">
                                        <div class="product-info">
                                            <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                            <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                        </div>
                                        <div class="product-hidden">
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                            <div class="star-actions">
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <ul class="actions">
                                                    <li><a href="#"><i class="ion-android-favorite-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand logo area -->
    <div class="brand-logo-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="four-brand-carousel-active owl-carousel">
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand1.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand2.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand3.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand4.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand5.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand6.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand7.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand8.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand9.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                        <!-- single brand logo -->
                        <div class="brand-logo">
                            <a href="#"><img src="images/brand/brand1.jpg" alt="Brand logo"></a>
                        </div>
                        <!-- single brand logo end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand logo area end -->
    <!-- product carosel area -->
    <div class="product-carosel-area">
        <div class="container">
            <div class="row">
                <!-- Product column -->
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="home-three-mini-product">
                        <div class="section-title">
                            <h3>LATEST PRODUCTS</h3>
                        </div>
                        <div class="mini-product carosel-next-prive owl-carousel">
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/18.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Itaque earum</a></h2>
                                                <span class="price">
                                                        $ 866.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/19.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Nostrum exercita</a></h2>
                                                <span class="price">
                                                        $ 550.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/20.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Consequuntur magni</a></h2>
                                                <span class="price">
                                                        $ 366.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/21.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                <span class="price">
                                                        $ 88.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/22.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/1.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/2.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/3.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/4.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/5.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/6.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/7.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product column end -->
                <!-- Product column -->
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="home-three-mini-product">
                        <div class="section-title">
                            <h3>TOP RATED PRODUCTS</h3>
                        </div>
                        <div class="mini-product carosel-next-prive owl-carousel">
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/6.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Duis pulvinar</a></h2>
                                                <span class="price">
                                                        $ 84.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/7.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 68.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/8.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Laudantium</a></h2>
                                                <span class="price">
                                                        $ 75.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/9.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Nullam maximus</a></h2>
                                                <span class="price">
                                                        $ 95.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/10.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Nemo enim</a></h2>
                                                <span class="price">
                                                        $ 55.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/11.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Natus erro</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/12.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Epicuri per</a></h2>
                                                <span class="price">
                                                        $ 88.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/13.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/14.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Auctor gravida enim</a></h2>
                                                <span class="price">
                                                         $ 63.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/15.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Nulla sed libero</a></h2>
                                                <span class="price">
                                                        $ 86.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/16.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Pellentesque posuere</a></h2>
                                                <span class="price">
                                                        $ 78.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/17.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product column end -->
                <!-- Product column -->
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="home-three-mini-product">
                        <div class="section-title">
                            <h3>FEATURED PRODUCTS</h3>
                        </div>
                        <div class="mini-product carosel-next-prive owl-carousel">
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/1.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Donec tempus</a></h2>
                                                <span class="price">
                                                        $ 82.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/2.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sed tempor</a></h2>
                                                <span class="price">
                                                        <del>$ 87.00</del> $ 80.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/3.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Cras neque</a></h2>
                                                <span class="price">
                                                        $ 70.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/4.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Pellentesque ultricies</a></h2>
                                                <span class="price">
                                                        $ 85.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/5.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Vestibulum suscipit</a></h2>
                                                <span class="price">
                                                        $ 84.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/6.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Nemo enim</a></h2>
                                                <span class="price">
                                                        $ 220.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/7.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Epicuri per</a></h2>
                                                <span class="price">
                                                        $ 152.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/8.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                            <div class="mini-product-listview">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/9.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Laudantium</a></h2>
                                                <span class="price">
                                                        $ 86.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/10.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Porro quisquam</a></h2>
                                                <span class="price">
                                                        $ 68.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/11.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="images/product/mini/12.jpg" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="single-product.html">Sit voluptatem</a></h2>
                                                <span class="price">
                                                        <del>$ 77.00</del> $ 66.00
                                                    </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="cart.html">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product column end -->
            </div>
        </div>
    </div>
    <!-- product carosel area end -->
@endsection
