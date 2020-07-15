@extends('layouts.app')

@section('titlePage', __('page.forgot_password.title') . ' || ' .env('APP_NAME'))
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> {{ __('page.forgot_password.title') }}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">Forgot Password</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="forget-page-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form  method="POST" action="{{ route('password.email') }}" class="password-forgot clearfix">
                        @csrf
                        <fieldset>
                            <legend>Your Personal Details</legend>
                            <div class="form-group d-md-flex">
                                <label class="control-label col-md-2" for="email"><span class="require">*</span>Your email</label>
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter you email address here...">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons newsletter-input">
                            <div class="float-left float-sm-left">
                                <a class="customer-btn mr-20" href="{{ route('login') }}">Back</a>
                            </div>
                            <div class="float-right float-sm-right">
                                <input type="submit" value="Continue" class="return-customer-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
