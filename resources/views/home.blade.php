@extends('layouts.app')

@section('titlePage', env('APP_NAME'))
@section('content')
    <!-- Slider area -->
    <div class="slider-area">
        <!-- slider-area start -->
        <div class="slider-area-inner">
            <!-- slider start -->
            <div class="slider-inner">
                <div id="mainSlider" class="nivoSlider nevo-slider">
                    @foreach($slides as $key => $slide)
                        <img src="{{ $slide->image }}" alt="main slider" title="#htmlcaption{{ $key }}"/>
                    @endforeach
                </div>

                @foreach($slides as $key => $slide)
                    <div id="htmlcaption{{ $key }}" class="nivo-html-caption slider-caption">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-content slider-content-1 slider-animated-1">
                                        <h1 class="hone">{{ $slide->title_1 }}</h1>
                                        <h1 class="htwo">{{ $slide->title_2 }}</h1>
                                        <h1 class="hthree">{{ $slide->title_3 }}</h1>
                                        <h3>{{ $slide->content }}</h3>
                                        <div class="button-1 hover-btn-2">
                                            <a href="{{ $slide->url }}">{{ __('slide.button') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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

{{--                @php($key = 0)--}}
                @foreach($news as $key => $value)
{{--                    @php($key++)--}}
                    <div class="col-sm-6 col-lg-3 col-md-6 col-xs-12 @if($key+1 == 1) four-fast @elseif ($key+1 == 4) four-last @else @endif">
                        <div class="four-single-banner-text">
                            <div class="four-banner-img">
                                <a href="#">
                                    <img src="{{ $value->image }}" alt="">
                                </a>
                            </div>
                            <div class="four-banner-text">
                                <h3>{{ $value->title }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{--<div class="col-sm-6 col-lg-3 col-md-6 col-xs-12">
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
                </div>--}}
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
                        @foreach($deal_of_day as $product)
                            <div class="col-sm-12">
                                <!-- single product -->
                                <div class="single-product-area">
                                    <div class="product-wrapper listview">
                                        <div class="list-col4">
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="{{ $product->feature_image }}" alt="">
                                                </a>
                                                <div class="quickviewbtn">
                                                    <a href="#" data-toggle="modal" data-target="#product_modal{{ $product->id }}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-col8">
                                            <div class="product-info">
                                                <h2><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h2>
                                                <span class="price">
                                                    <del>{{ \App\Helpers\ProductHelper::vndFormat($product->price) }}</del> {{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}
                                                </span>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-desc">
                                                    {!! $product->intro !!}
                                                </div>
                                                <div class="deal-counter">
                                                    <div data-countdown="2020/08/02"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end -->
                            </div>
                        @endforeach
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
                        <img src="{{ asset('images/banner/home4-banner2.jpg') }}" alt="">
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
                        @foreach($best_sellers as $key => $product)
                            @if($key % 2 == 0)
                                <div class="col-sm-12">
                                    <!-- single product -->
                                    <div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">

                                                        <img src="{{ $product->feature_image }}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal{{ $product->id }}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ \Illuminate\Support\Str::limit($product->name, 20) }}</a></h2>
                                                    <span class="price">
                                                        <del>{{ \App\Helpers\ProductHelper::vndFormat($product->price) }}</del> {{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}
                                                    </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <button type="button" onclick="Frontend.addCart({{ $product->id }})" class="btn btn-primary">Add to cart</button>
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
                                                            <li><button type="button" onclick="Frontend.addWish({{ $product->id }}, {{ Auth::id() ?? null }})" class="btn"><i class="ion-android-favorite-outline"></i></button></li>
{{--                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>--}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    {{--<div class="single-product-area">
                                        <div class="product-wrapper gridview">
                                            <div class="list-col4">
                                                <div class="product-image">
                                                    <a href="#">
                                                        <img src="{{ $product->feature_image }}" alt="">
                                                    </a>
                                                    <div class="quickviewbtn">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal{{ $product->id }}"  data-original-title="Quick View"><i class="ion-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-col8">
                                                <div class="product-info">
                                                    <h2><a href="{{ route('product', ['slug' => $product->slug]) }}">{{ \Illuminate\Support\Str::limit($product, 20) }}</a></h2>
                                                    <span class="price">
                                                            $ 45.00
                                                        </span>
                                                </div>
                                                <div class="product-hidden">
                                                    <div class="add-to-cart">
                                                        <button class="btn btn-primary" onclick="Frontend.addCart({{ $product->id }})" type="button">Add to cart</button>
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
                                                            <li><button type="button" class="btn"><i class="ion-android-favorite-outline"></i></button></li>
--}}{{--                                                            <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>--}}{{--
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            @endif
                        @endforeach
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
                            @foreach($top_last as $key => $product)
                                @if($key % 3 == 0)
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
                                @endif
                            @endforeach
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
