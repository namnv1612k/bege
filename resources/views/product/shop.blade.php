@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Shop
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-page-wraper">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-9 shop-content">
                    <div class="product-toolbar">
                        <div class="topbar-title">
                            <h1>Shop</h1>
                        </div>
                        <div class="product-toolbar-inner">
                            <div class="product-view-mode">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#grid"><i class="ion-grid"></i></a></li>
                                    <li><a data-toggle="tab" href="#list"><i class="ion-navicon"></i></a></li>
                                </ul>
                            </div>
                            @if(!empty($products) && $products->count() != 0)
                                <p class="woocommerce-result-count">Showing 1–{{ $products->count() }} of {{ $products->total() }} results</p>
                            @else
                                <p class="woocommerce-result-count">No results</p>
                            @endif
                            <div class="woocommerce-ordering">
                                <form method="get" class="woocommerce-ordering hidden-xs">
                                    <div class="orderby-wrapper">
                                        <label>Sort By :</label>
                                        <select class="nice-select-menu orderby">
                                            <option dara-display="Select">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-page-product-area tab-content">
                            <div id="grid" class="tab-pane fade in show active">
                                <div class="row">
                                    @if(!empty($products))
                                    @foreach($products as $product)
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="single-product-area">
                                            <div class="product-wrapper gridview">
                                                <div class="list-col4">
                                                    <div class="product-image">
                                                        <a href="#">
                                                            @if($product->sale_price < $product->price)<span class="onsale"> Sale! </span> @endif
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
                                                    </div>
                                                    <div class="product-hidden">
                                                        <div class="add-to-cart">
                                                            <button type="button" class="btn btn-primary" style="border-radius: 10px" onclick="Frontend.addCart({{ $product->id }})">Add to cart</button>
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
                                                                <li><button type="button" class="btn float-left" onclick="Frontend.addWish({{ $product->id }}, {{ Auth::id() ?? null }})"><i class="ion-android-favorite-outline"></i></button></li>
{{--                                                                <li><button type="button" class="btn"><i class="ion-ios-shuffle-strong"></i></button></li>--}}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    @if(!empty($products))
                                    @foreach($products as $product)
                                    <div class="col-sm-12">
                                        <div class="single-product-area">
                                            <div class="product-wrapper listview">
                                                <div class="list-col4">
                                                    <div class="product-image">
                                                        <a href="#">
                                                            @if($product->sale_price < $product->price) <span class="onsale"> Sale! </span> @endif
                                                            <img src="{{ $product->feature_image }}" alt="">
                                                        </a>
                                                        <div class="quickviewbtn">
                                                            <a href="#" data-toggle="modal" data-target="#product_modal"  data-original-title="Quick View"><i class="ion-eye"></i></a>
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
                                                            <p>{!! $product->intro !!}</p>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrapper">
                                                        <div class="add-to-cart">
                                                            <button type="button" class="btn btn-primary" onclick="Frontend.addCart({{ $product->id }})">Add to cart</button>
                                                        </div>
                                                        <div class="star-actions">
                                                            <ul class="actions">
                                                                <li><button type="button" class="btn" onclick="Frontend.addWish({{ $product->id }}, {{ Auth::id() ?? null }})"><i class="ion-android-favorite-outline"></i>Add to Wishlist</button></li>
                                                                <li><button type="button" class="btn"><i class="ion-ios-shuffle-strong"></i>Compare</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="woocommerce-pagination">
                        {{ $products->appends(request()->except('page'))->links() }}
                    </nav>
                </div>
                <div class="col-xs-12 col-md-3 sidebar-shop pull-right">
                    <div class="sidebar-product-categori">
                        <div class="widget-title">
                            <h3>PRODUCT CATEGORIES</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="product-categories">
                                @if(!empty($categories))
                                    @foreach($categories as $cate)
                                        <li class="cat-item">
                                            <a href="{{ route('shop', ['category' => $cate->slug, \App\Helpers\ProductHelper::searchParams(request(), ['tag', 'keyword'])] ) }}">{{ $cate->name }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="product-filter mb-30">
                            <div class="widget-title">
                                <h3>Filter by price</h3>
                            </div>
                            <div class="widget-content">
                                <div id="price-range"></div>
                                <div class="price-values">
                                    <div class="price_text_btn">
                                        <span>Price:</span>
                                        <input type="text" class="price-amount">
                                    </div>
                                    <button class="button" type="submit">Filter</button>
                                </div>
                            </div>
                        </div>
                        {{--<div class="widget-title">
                            <h3>SELECT BY COLOR</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="product-categories">
                                <li class="cat-item">
                                    <a href="#">Gold</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">Green</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="#">White</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>--}}
                        <div class="product-filter mb-30">
                            <div class="widget-title">
                                <h3>TOP RATED PRODUCTS</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="product_list_widget">
                                    @if(!empty($products_topRate))
                                    @foreach($products_topRate as $product)
                                    <li class="widget-mini-product">
                                        <div class="product-image">
                                            <a title="Phasellus vel hendrerit" href="#">
                                                <img width="50px" alt="" src="{{ $product->feature_image }}">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a title="{{ $product->name }}" href="#">
                                                <span class="product-title">{{ $product->name }}</span>
                                            </a>
                                            <div class="star-rating">
                                                <div class="rating-box">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                            <span class="woocommerce-Price-amount amount">
                                                {{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}
                                            </span>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-single-banner">
                            <a href="#">
                                <img src="images/banner/shop-sidebar.jpg" alt="Banner">
                            </a>
                        </div>
                        <div class="sidebar-tag">
                            <div class="widget-title">
                                <h3>PRODUCT TAGS</h3>
                            </div>
                            <div class="widget-content">
                                <div class="product-tags">
                                    @if(!empty($tags))
                                        @foreach($tags as $tag)
                                            <a href="{{ route('shop', [\App\Helpers\ProductHelper::searchParams(request(), ['category', 'keyword']), 'tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Quickview start --}}
    @foreach($products as $product)
    <div id="quickview-wrapper{{ $product->id }}">
        <!-- Modal -->
        <div class="modal fade" id="product_modal{{ $product->id }}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-btn">
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Single product area -->
                        <div class="single-product-area">
                            <div class="container-fullwidth">
                                <div class="single-product-wrapper">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-7 col-lg-7">
                                            <div class="product-details-img-content">
                                                <div class="product-details-tab mr-40">
                                                    <div class="product-details-large tab-content">

                                                        <div class="tab-pane active" id="pro-details1">
                                                            <div class="product-popup">
                                                                <a href="#">
                                                                    <img src="{{ $product->feature_image }}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        @foreach($product->albums as $key => $album)
                                                        <div class="tab-pane" id="pro-details{{ $key + 2 }}">
                                                            <div class="product-popup">
                                                                <a href="#">
                                                                    <img src="{{ $album->image }}" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="product-details-small nav product-dec-slider-qui owl-carousel">
                                                        <a class="active" href="#pro-details1">
                                                            <img src="{{ $album->feature_image }}" alt="">
                                                        </a>
                                                        @foreach($product->albums as $key => $ablum)
                                                        <a href="#pro-details{{ $key + 2 }}">
                                                            <img src="{{ $album->image }}" alt="">
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-5 col-lg-5">
                                            <div class="single-product-info">
                                                <h1 id="quickview-name">{{ $product->name }}</h1>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <span class="price">
                                                <del id="quickview-sale-price">{{ \App\Helpers\ProductHelper::vndFormat($product->price) }}</del>{{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}
                                            </span>
                                                <p id="quickview-intro">{{ \Illuminate\Support\Str::limit($product->intro, 200) }}</p>
                                                <div class="box-quantity d-flex">
                                                    <form action="#">
                                                        <input class="quantity mr-40" min="1" @if($product->stocks == 0) readonly @else value="1" @endif type="number">
                                                    </form>
                                                    <button type="button" class="add-cart btn btn-light border-primary" onclick="Frontend.addCart({{ $product->id }})">add to cart</button>
                                                </div>
                                                @if($product->stocks <= 0)
                                                    <small class="text-danger">
                                                        Đơn hàng đã hết
                                                    </small>
                                                @endif
                                                <div class="wishlist-compear-area">
                                                    <button type="button" onclick="Frontend.addWish({{ $product->id }})" class="btn btn-light"><i class="ion-ios-heart-outline primary"></i> Add to Wishlist</button>
                                                    <button type="button" class="btn btn-light"><i class="ion-ios-loop-strong"></i> Compare</button>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="posted_in">Categories: @if($product->categories != []) @foreach($product->categories as $catetegory)<a href="{{ route('shop', ['category' => $catetegory->slug]) }}" rel="tag">{{ $catetegory->name }}, </a>@endforeach @endif</span>
                                                </div>
                                                <div class="single-product-sharing">
                                                    <div class="widget widget_socialsharing_widget">
                                                        <h3 class="widget-title">Share this product</h3>
                                                        <ul class="social-icons">
                                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single product area end -->
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- END Modal -->
    </div>
    @endforeach
    {{-- Quickview end --}}
@endsection
