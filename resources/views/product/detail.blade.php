@extends('layouts.app')

@section('titlePage', $product->name . ' - Product')
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span>
                        <a href="{{ route('shop') }}">Shop</a>
                        @foreach($product->categories as $category)
                            <span class="separator">/</span>
                            <a href="{{ route('shop', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                        @endforeach
                        <span class="separator">/</span> {{ $product->name }}
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
                    <h1 class="entry-title">{{ $product->name }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- Single product area -->
    <div class="single-product-area">
        <div class="container">
            <div class="single-product-wrapper">
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-7">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-40">
                                <div class="product-details-large tab-content">

                                    <div class="tab-pane active" id="pro-details1">
                                        <div class="product-popup">
                                            <a href="{{ $product->feature_image }}">
                                                <img style="width: 400px;" src="{{ $product->feature_image }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($product->albums as $key => $album)
                                        <div class="tab-pane" id="pro-details{{ $key + 2 }}">
                                            <div class="product-popup">
                                                <a href="{{ $album->image }}">
                                                    <img style="width: 400px" src="{{ $album->image }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="product-details-small nav product-dec-slider owl-carousel">
                                    <a class="active" href="#pro-details1">
                                        <img style="width: 100px" src="{{ $product->feature_image }}" alt="">
                                    </a>
                                    @foreach($product->albums as $key => $album)
                                        <a href="#pro-details{{ $key + 2 }}">
                                            <img style="width: 100px" src="{{ $album->image }}" alt="">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5">
                        <div class="single-product-info">
                            <h1>{{ $product->name }}</h1>
                            <div class="product-rattings">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-half-o"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <span class="price">
                                <del>{{ \App\Helpers\ProductHelper::vndFormat($product->price) }}</del> {{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}
                            </span>
                            <p>{{ $product->intro }}</p>
                            <div class="box-quantity d-flex">
                                <form action="#">
                                    <input class="quantity mr-40" min="1" @if($product->stocks == 0) readonly @else value="1" @endif type="number">
                                </form>
                                <button type="button" class="add-cart btn btn-light border-primary" onclick="Frontend.addCart({{ $product->id }})">add to cart</button>
                            </div>
                            <div class="wishlist-compear-area">
                                <button type="button" onclick="Frontend.addWish({{ $product->id }}, {{ Auth::id() ?? null }})" class="btn btn-light"><i class="ion-ios-heart-outline"></i> Add to Wishlist</button>
                                <button type="button" class="btn btn-light"><i class="ion-ios-loop-strong"></i> Compare</button>
                            </div>
                            <div class="product_meta">
                                <span class="posted_in">Categories: @if($product->categories->count() > 0) @foreach($product->categories as $cate) <a href="#" rel="tag">{{ \Illuminate\Support\Str::limit($cate->name, 15) }}</a> @endforeach @else No category @endif </span>
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
    <!-- product description -->
    <div class="product-description-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#description">Description</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#reviews">Reviews {{ $product->comments->count() }}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade in show active">
                            <h2>Description</h2>
                            {!! $product->desc !!}
                        </div>
                        <div id="reviews" class="tab-pane fade product-review-area">
                            <h3>{{ $product->comments->count() }} REVIEW FOR {{ $product->name }}</h3>
                            <ol class="commentlist">
                                @foreach($product->comments as $comment)
                                    @if($comment->reply_for == null && $comment->is_active == ACTIVE)
                                        <li class=" col-xl-12">
                                            <div class="single-comment">
                                                <div class="comment-avatar">
                                                    <img style="width: 100px;" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->first_name }}">
                                                </div>
                                                <div class="comment-info">
                                                    <div class="product-rattings">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-half-o"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div>
                                                    <span class="date"><strong>{{ $comment->user->first_name }}</strong> {{ date(DATE_FORMAT, $comment->created_at) . ' at ' . date(TIME_FORMAT, $comment->created_at) }}</span>
                                                    <p>{{ $comment->content }}</p>
                                                </div>
                                            </div>
                                        </li><br>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="comment-respond">
                                <p>Add a review</p>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <p>Your rating</p>
                                <div class="product-rattings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star-half-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <form action="#" class="comment-form">
                                    <div class="text-filds">
                                        <label for="comment">Your review <span class="required">*</span></label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" maxlength="2000" required="required"></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <button name="submit" onclick="Frontend.comment('product', {{ $product->id }}, {{ Auth::id() ?? null }})" type="button" id="submit" class="submit btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product description end -->
    <!-- Single related product -->
    <div class="single-related-product-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h3>Related products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($product_related as $product)
                    <div class="related-product">
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
                                        <h2><a href="{{ route('product-detail', ['slug' => $product->slug]) }}">{{ \Illuminate\Support\Str::limit($product->name, 20) }}</a></h2>
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
{{--                                                <li><a href="#"><i class="ion-ios-shuffle-strong"></i></a></li>--}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
