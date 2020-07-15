@extends('layouts.app')

@section('titlePage', __('page.wishlist.title') . ' || ' . env('APP_NAME'))
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Wishlist
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">Wishlist</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Form Start -->
                    <form action="#">
                        <!-- Table Content Start -->
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Stock Status</th>
                                    <th class="product-subtotal">add to cart</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($wishlist != null)
                                    @foreach($wishlist as $wish)
                                        <tr class="wish-item-{{ $wish->id }}">
                                            <td class="product-remove"> <button class="btn" onclick="Frontend.removeWish({{ $wish->id }})" type="button"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                            <td class="product-thumbnail">
                                                <img src="{{ $wish->product->feature_image }}" alt="{{ $wish->product->name }}">
                                            </td>
                                            <td class="product-name"><a href="#">{{ $wish->product->name }}</a></td>
                                            <td class="product-price"><span class="amount">@money($wish->product->sale_price)</span></td>
                                            <td class="product-stock-status"><span>@if($wish->product->stocks > 0) In stock @else Out stock @endif</span></td>
                                            <td class="product-add-to-cart"><button class="btn btn-primary" onclick="Frontend.addCart({{ $wish->product->id }})" type="button">Add to cart</button></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Content Start -->
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
@endsection
