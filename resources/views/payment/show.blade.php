@extends('layouts.app')

@section('titlePage', 'Checkout - ' . env('APP_NAME'))
@section('extra-css')
@endsection
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Checkout
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
                    <h1 class="entry-title">Checkout</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- checkout page content -->
    <div class="checkout-page-area">
        <!-- coupon area -->
        <div class="coupon-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            @if(!Auth::check())
                                <h3>Returning customer? <span id="showlogin" role="button" data-toggle="collapse" data-target="#checkout-login">Click here to login</span></h3>
                                <div id="checkout-login" class="coupon-content collapse" aria-hidden="false">
                                    <div class="coupon-info">
                                        <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                        <form method="POST" id="payment" action="{{ route('login') }}">
                                            @csrf
                                            <p class="form-row-first">
                                                <label>Username or email <span class="required">*</span></label>
                                                <input type="text" name="login" class="@error('email' ?: 'username') is-invalid @enderror" value="{{ old('email') ?: old('username') }}">
                                                @error('email' ?: 'username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </p>
                                            <p class="form-row-last">
                                                <label>Password  <span class="required">*</span></label>
                                                <input type="password" name="password" class="@error('password') is-invalid @enderror">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </p>
                                            <p class="form-row">
                                                <input type="submit" value="Login">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    Remember me
                                                </label>
                                            </p>
                                            <p class="lost-password">
                                                <a href="{{ route('password.request') }}">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            @endif
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon" role="button" data-toggle="collapse" data-target="#checkout_coupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-content collapse">
                                <div class="coupon-info">
                                    <form action="javascript:void(0)" onsubmit="Frontend.applyCoupon()">
                                        <p class="checkout-coupon">
                                            <input type="text" class="code" name="code" placeholder="Coupon code">
                                            <button type="button" onclick="Frontend.applyCoupon()">Apply Coupon</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coupon area end -->
        <!-- checkout area -->
        <div class="checkout-area">
            <div class="container">
                <form id="payment-form" action="{{ route('payment') }}" method="post">
                    @csrf
                    <input type="hidden" name="voucher_code">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    {{--<div class="col-md-12">
                                        <div class="country-select mb-30">
                                            <label>Country <span class="required">*</span></label>
                                            <select>
                                                <option value="volvo">Bangladesh</option>
                                                <option value="saab">Algeria</option>
                                                <option value="mercedes">Afghanistan</option>
                                                <option value="audi">Ghana</option>
                                                <option value="audi2">Albania</option>
                                                <option value="audi3">Bahrain</option>
                                                <option value="audi4">Colombia</option>
                                                <option value="audi5">Dominican Republic</option>
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" name="first_name" placeholder="First name" value="{{ Auth::user()->first_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" name="last_name" placeholder="Last name" value="{{ Auth::user()->last_name ?? '' }}">
                                        </div>
                                    </div>
                                    {{--<div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>--}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="Street address" value="{{ Auth::user()->address ?? '' }}">
                                        </div>
                                    </div>
                                    {{--<div class="col-md-12">
                                        <div class="checkout-form-list mb-30">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" placeholder="Town / City">
                                        </div>
                                    </div>--}}
                                    {{--<div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>State / County <span class="required">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="text" placeholder="Postcode / Zip">
                                        </div>
                                    </div>--}}
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Email" value="{{ Auth::user()->email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list mb-30">
                                            <label>Phone  <span class="required">*</span></label>
                                            <input type="text" name="phone" placeholder="Postcode / Zip" value="{{ Auth::user()->phone ?? '' }}">
                                        </div>
                                    </div>
                                    @if(!Auth::check())
                                        <div class="col-md-12">
                                            <div class="checkout-form-list create-acc mb-30">
                                                <input id="cbox" type="checkbox" data-toggle="collapse" data-target="#cbox_info">
                                                <label for="cbox">Create an account?</label>
                                            </div>
                                            <div id="cbox_info" class="checkout-form-list collapse create-accounts mb-25">
                                                <p class="mb-10">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <label>Account password  <span class="required">*</span></label>
                                                <input type="password" placeholder="password">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                {{--<div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input id="ship-box" type="checkbox">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="country-select mb-30">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">Bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list mb-30">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Order Notes</label>
                                            <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(session(CART) as $key => $cart)
                                            <tr class="cart_item cart-item-{{ $key }}">
                                                <td class="product-name">
                                                    {{ \Illuminate\Support\Str::limit($cart['name'], 20) }} <strong class="product-quantity"> × {{ $cart['quantity'] }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">@money($cart['price'])</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount cart-total-price cart-subtotal">@money( App\Helpers\Cart::totalPrice() )</span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount order-price cart-total-price">@money( App\Helpers\Cart::totalPrice() )</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <label for="default" class="collapsed font-weight-bold" role="radio" data-toggle="collapse" data-parent="#accordion" href="#default-payment" aria-expanded="false" aria-controls="collapseTwo">
                                                            Payment on delivery
                                                        </label>
                                                        <input type="radio" name="payment_method" id="default" required value="{{ DEFAULT_PAYMENT }}" role="radio" data-toggle="collapse" data-parent="#accordion" href="#default-payment" aria-expanded="false" aria-controls="collapseTwo">
                                                    </h4>
                                                </div>
                                                <div id="default-payment" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <label for="{{ STRIPE_PAYMENT }}" class="collapsed font-weight-bold" role="radio" data-toggle="collapse" data-parent="#accordion" href="#stripe-payment" aria-expanded="false" aria-controls="collapseThree">
                                                            Stripe
                                                        </label>
                                                        <input type="radio" name="payment_method" required id="{{ STRIPE_PAYMENT }}" value="{{ STRIPE_PAYMENT }}" role="radio" data-toggle="collapse" data-parent="#accordion" href="#stripe-payment" aria-expanded="false" aria-controls="collapseThree">
                                                    </h4>
                                                </div>
                                                <div id="stripe-payment" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <label for="card-element">
                                                            Credit or debit card
                                                        </label>
                                                        <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                        </div>

                                                        <!-- Used to display form errors. -->
                                                        <div id="card-errors" role="alert"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout area end -->
    </div>
@endsection
@section('extra-js')
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51fPtf262Z9p11AQqmZGZK4J003SfLH077');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            if ($('input[name="payment_method"]:checked').val() === 'stripe') {
                event.preventDefault();

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
                $('#stripe-payment').show('slow');
                $('#default-payment').hide('slow');
            }
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
