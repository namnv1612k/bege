@extends('layouts.app')

@section('content')
<div class="breadcrumbs-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{ route('home') }}">{{__('page.home.title')}}</a>
                    <span class="separator">/</span> {{ __('page.login.title_2') }}
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="entry-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="entry-title">{{ __('page.login.title_2') }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="login-page-area">
    <div class="container">
        <div class="login-area">
            <div class="row">
                <div class="col-md-6">
                    <div class="well mb-sm-30">
                        <div class="new-customer">
                            <h3 class="custom-title">{{ __('page.login.content.new_customer') }}</h3>
                            <p class="mtb-10"><strong>{{ __('page.register.title') }}</strong></p>
                            <p>{{ __('page.login.content.desc') }}</p>
                            <a class="customer-btn" href="{{ route('register') }}">{{ __('page.login.content.continue') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="well">
                        <div class="return-customer">
                            <h3 class="mb-10 custom-title">{{ __('page.login.return.title') }}</h3>
                            <p class="mb-10"><strong>{{ __('page.login.return.desc') }}</strong></p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('input.login.typeLogin.label') }}</label>
                                    <input type="text" name="login" placeholder="{{ __('input.login.typeLogin.placeholder') }}" id="input-email" class="form-control @error('email' ?: 'username') is-invalid @enderror" value="{{ old('email') ?: old('username') }}">
                                    @error('email' ?: 'username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('input.login.password.label') }}</label>
                                    <input type="password" name="password" placeholder="Password" id="input-password" class="form-control @error('password') is-invalid @enderror">
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
                                            {{ __('input.login.remember.label') }}
                                        </label>
                                    </div>
                                </div>
                                <p class="lost-password"><a href="{{ route('password.request') }}">{{ __('input.login.forgot_password.label') }}</a></p>
                                <input type="submit" value="{{ __('page.login.submit') }}" class="return-customer-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
