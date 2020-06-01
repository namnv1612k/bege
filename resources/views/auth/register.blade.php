@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">{{__('page.home.title')}}</a>
                        <span class="separator">/</span> {{__('page.register.title')}}
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">{{__('entry.register')}}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="register-page-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-register" method="post" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <legend>{{__('page.register.content.legend_create')}}</legend>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="f-name" placeholder="First Name" name="first_name" autofocus autocomplete="first-name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="l-name" placeholder="Last Name" name="last_name" autocomplete="last-name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter you email address here..." name="email" autocomplete="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                <div class="col-md-10">
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="number" placeholder="Telephone" name="phone" autocomplete="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Your Account</legend>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="username"><span class="require">*</span>Username:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="pwd" placeholder="Password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirm password" name="password_confirmation">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="newsletter-input">
                            <legend>Newsletter</legend>
                            <div class="form-group d-md-flex align-items-md-center">
                                <label class="col-md-2 control-label">Subscribe</label>
                                <div class="col-md-10 radio-button">
                                    <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                    <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="terms">
                            <div class="float-md-right">
                                <span>I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a></span>
                                <input type="checkbox" name="agree_policy" value="1"> &nbsp;
                                @error('agree_policy')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <input type="submit" value="Continue" class="return-customer-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
