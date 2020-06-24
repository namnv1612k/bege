@extends('layouts.app')

@section('content')

    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="index.html">Home</a>
                        <span class="separator">/</span> About
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @empty(!session('status_send_mail'))
        @if(session('status_send_mail') == true)
            <div class="alert alert-success col-md-2 m-auto">
                <strong>Thành công!</strong> Email đã được gửi.
            </div><br>
        @else
            <div class="alert alert-warning col-md-2 m-auto">
                <strong>Lỗi!</strong> Có một lỗi xảy ra trong khi gửi mail.
            </div><br>
        @endif
    @endempty

    <div class="contact-page-area">
        <!-- contact page map -->
        <div class="contact-page-map">
            <!-- Google Map Start -->
            <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1861.774734636405!2d105.74080839834133!3d21.0507054853499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454f0ccd64467%3A0x33ebb5bf6cf3ba99!2zxJDDrG5oIE5ndXnDqm4gWMOh!5e0!3m2!1svi!2s!4v1590575176944!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- Google Map End -->
        </div>
        <!-- contact page map -->
        <!-- contact form area -->
        <div class="contact-form-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <div class="contact-form-inner">
                            <h2>TELL US YOUR PROJECT</h2>
                            <form action="{{ route('contact-mail') }}" method="post" id="form-contact" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First name*" value="{{ old('first_name') }}" required>
                                        <div class="invalid-feedback">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last name*" value="{{ old('last_name') }}" required>
                                        <div class="invalid-feedback">
                                            @error('last_name')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email*" value="{{ old('email') }}" required>
                                        <div class="invalid-feedback">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject*" value="{{ old('subject') }}" required>
                                        <div class="invalid-feedback">
                                            @error('subject')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea name="message" cols="40" rows="10" class="@error('message') is-invalid @enderror wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                  aria-required="true" aria-invalid="false" placeholder="Message *" required>{{ old('message') }}</textarea>
                                        <div class="invalid-feedback">
                                            @error('message')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <input type="submit" value="Send Email" class="wpcf7-form-control wpcf7-submit button">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <div class="contact-address-area">
                            <h2>CONTACT US</h2>
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                                notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                            <ul>
                                <li>
                                    <i class="fa fa-fax">&nbsp;</i> Address : No 40 Baria Sreet 133/2 NewYork City</li>
                                <li>
                                    <i class="fa fa-phone">&nbsp;</i> Info@roadthemes.com</li>
                                <li>
                                    <i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                            </ul>
                            <h3>
                                <strong>Working hours</strong>
                            </h3>
                            <p>
                                <strong>Monday – Saturday</strong>: &nbsp;08AM – 22PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
