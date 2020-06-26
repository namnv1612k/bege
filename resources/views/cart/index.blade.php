@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Cart
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Form Start -->
                    <form action="{{ route('cart-update') }}" method="post">
                        @csrf
                        <!-- Table Content Start -->
                        <div class="table-content table-responsive mb-50">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(App\Helpers\Cart::check())
                                        @foreach(App\Helpers\Cart::all() as $key => $item)
                                            <input type="hidden" name="id[]" value="{{ $key }}">
                                            <tr class="cart-item-{{ $key }}">
                                                <td class="product-thumbnail">
                                                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                                </td>
                                                <td class="product-name"><a href="{{ route('product', ['slug' => $item['slug']]) }}">{{ $item['name'] }}</a></td>
                                                <td class="product-price"><span class="amount">@money($item['price'])</span></td>
                                                <td class="product-quantity"><input name="quantity[]" type="number" min="0" value="{{ $item['quantity'] }}"></td>
                                                <td class="product-subtotal">@money($item['price'] * $item['quantity'])</td>
                                                <td class="product-remove"> <button type="button" onclick="Frontend.removeItemCart({{ $key }})" class="btn"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <h2 class="text-center text-muted">Giỏ hàng trống</h2>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Content Start -->
                        <div class="row">
                            <!-- Cart Button Start -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <button type="submit">Update Cart</button>
                                    <a href="{{ route('shop') }}">Continue Shopping</a>
                                </div>
                            </div>
                            <!-- Cart Button Start -->
                            <!-- Cart Totals Start -->
                            <div class="col-md-4 col-sm-5 col-xs-12">
                                <div class="cart_totals">
                                    <h2>Cart Totals</h2>
                                    <br>
                                    <table>
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount cart-total-price">@money(App\Helpers\Cart::totalPrice())</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount cart-total-price">@money(App\Helpers\Cart::totalPrice())</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Cart Totals End -->
                        </div>
                        <!-- Row End -->
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
@endsection
