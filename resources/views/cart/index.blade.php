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
                    <form action="#">
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
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="images/product/1.jpg" alt="cart-image"></a>
                                    </td>
                                    <td class="product-name"><a href="#">dictum idrisus</a></td>
                                    <td class="product-price"><span class="amount">£165.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">£165.00</td>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="images/product/2.jpg" alt="cart-image"></a>
                                    </td>
                                    <td class="product-name"><a href="#">Carte Postal Clock</a></td>
                                    <td class="product-price"><span class="amount">£50.00</span></td>
                                    <td class="product-quantity"><input type="number" value="1"></td>
                                    <td class="product-subtotal">£50.00</td>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Content Start -->
                        <div class="row">
                            <!-- Cart Button Start -->
                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="buttons-cart">
                                    <input type="submit" value="Update Cart">
                                    <a href="#">Continue Shopping</a>
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
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td>
                                                <strong><span class="amount">$215.00</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="wc-proceed-to-checkout">
                                        <a href="checkout.html">Proceed to Checkout</a>
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
