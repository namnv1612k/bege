@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">{{ __('page.home.title') }}</a>
                        <span class="separator">/</span> Dashboard
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">{{ __('page.my_account.title') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="myaccount-page-content">
        <div class="container">
            <div class="account-text-wrapper">
                <div class="row">
                    <div class="col-md-3">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                Dashboard</a>

                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                            <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                Method</a>

                            <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                            <a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                            <form action="{{ route('logout') }}" method="post" style="display: none" id="logout-form">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-md-9 mt-15 mt-lg-0">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>

                                    <div class="welcome">
                                        <p>Hello, <strong>{{ Auth::user()->name }}</strong> (If Not <strong>{{ Auth::user()->first_name }} !</strong><a
                                                href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout"> Logout</a>)</p>
                                    </div>

                                    <p class="mb-0">From your account dashboard. you can easily check & view your
                                        recent orders, manage your shipping and billing addresses and edit your
                                        password and account details.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>

                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @if($orders != null)
                                                <?php $i = 0 ?>
                                                @foreach($orders as $order)
                                                    <?php $i++ ?>
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <td>{{ Carbon\Carbon::parse($order->created_at)->format(TIME_STAMP_FORMAT) }}</td>
                                                        <td>{{ $order->status_delivery }}</td>
                                                        <td>@money($order->total)</td>
                                                        <td><a href="#" class="btn">View</a></td>
                                                    </tr>
                                                @endforeach
                                                {{ $orders->appends(request()->except('page'))->links() }}
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Payment Method</h3>

                                    <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Billing Address</h3>

                                    <address>
                                        <p><strong>{{ Auth::user()->name }}</strong></p>
                                        <p>Address: {{ Auth::user()->address ?? '....' }}</p>
                                        <p>Mobile: {{ Auth::user()->phone ?? '....' }}</p>
                                    </address>

                                    <a href="#" class="btn d-inline-block"><i class="fa fa-edit"></i> Edit
                                        Address</a>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>

                                    <div class="account-details-form checkout-form-list">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="first-name" class="required">First Name</label>
                                                        <input type="text" id="first-name"
                                                               placeholder="First Name" value="{{ Auth::user()->first_name }}"/>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="single-input-item">
                                                        <label for="last-name" class="required">Last Name</label>
                                                        <input type="text" id="last-name" placeholder="Last Name" value="{{ Auth::user()->last_name }}"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="display-name" class="required">Display Name</label>
                                                <input type="text" id="display-name" placeholder="Display Name" value="{{ Auth::user()->name }}"/>
                                            </div>

                                            <div class="single-input-item">
                                                <label for="email" class="required">Email Addres</label>
                                                <input type="email" id="email" placeholder="Email Address" value="{{ Auth::user()->email }}"/>
                                            </div>

                                            <fieldset>
                                                <legend>Password change</legend>
                                                <div class="single-input-item">
                                                    <label for="current-pwd" class="required">Current
                                                        Password</label>
                                                    <input type="password" id="current-pwd"
                                                           placeholder="Current Password"/>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="new-pwd" class="required">New
                                                                Password</label>
                                                            <input type="password" id="new-pwd"
                                                                   placeholder="New Password"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="confirm-pwd" class="required">Confirm
                                                                Password</label>
                                                            <input type="password" id="confirm-pwd"
                                                                   placeholder="Confirm Password"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <div class="single-input-item">
                                                <button class="btn">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>
            </div>
        </div>
    </div>
@endsection
