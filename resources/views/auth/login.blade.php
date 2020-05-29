@extends('layouts.app')

@section('content')
<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('home') }}">{{__('KEY_NAME')}}</a>
                    <span class="separator">/</span> sign in
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="entry-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="entry-title">Sign In</h1>
            </div>
        </div>
    </div>
</div>

<div class="login-page-area">
    <div class="container">
        <div class="login-area">
            <!-- New Customer Start -->
            <div class="row">
                <div class="col-md-6">
                    <div class="well mb-sm-30">
                        <div class="new-customer">
                            <h3 class="custom-title">new customer</h3>
                            <p class="mtb-10"><strong>Register</strong></p>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made</p>
                            <a class="customer-btn" href="register.html">continue</a>
                        </div>
                    </div>
                </div>
                <!-- New Customer End -->
                <!-- Returning Customer Start -->
                <div class="col-md-6">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10 custom-title">returning customer</h3>
                            <p class="mb-10"><strong>I am a returning customer</strong></p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Enter your email address..." id="input-email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" placeholder="Password" id="input-password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <p class="lost-password"><a href="{{ route('password.request') }}">Forgot password?</a></p>
                                <input type="submit" value="Login" class="return-customer-btn">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Returning Customer End -->
            </div>
        </div>
    </div>
</div>
@endsection
