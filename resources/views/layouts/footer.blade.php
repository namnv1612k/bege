<footer class="footer-area">
    <!-- newsletter area -->
    <div class="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="newsletter-text">
                        <div class="icon"><i class="icon ion-email"></i></div>
                        <h3>{{__('footer.new_letter.title')}}</h3>
                        <h4>{{__('footer.new_letter.content')}}</h4>
                    </div>
                    <div class="newsletter">
                        <div class="newsletter-box">
                            <form onsubmit="Frontend.subscribe()" id="form-subscribe" action="javascript:void(0)">
                                <input class="subscribe" placeholder="{{__('input.subscribe.placeholder')}}" name="email" id="subscribe" type="email">
                                <button type="button" onclick="Frontend.subscribe()" class=" btn">{{__('input.subscribe.submit')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter area end -->
    <!-- footer main -->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                    <div class="footer-logo-area">
                        <ul>
                            <li>
                                <h4>{{__('footer.contact_info')}}</h4>
                                <p>{{ config('info.address') }}</p>
                            </li>
                            <li>
                                <h4>{{__('footer.tel')}}</h4>
                                <p>{{ config('info.tel') }}</p>
                            </li>
                            <li>
                                <h4>{{__('footer.mail')}}</h4>
                                <p>{{ config('info.mail') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                    <div class="footer-menu">
                        <h3>{{__('footer.custom_service')}}</h3>
                        <ul>
                            <li><a href="{{ route('contact') }}">{{__('page.contact.title')}}</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="{{ route('my-account') }}">{{__('page.my_account.title')}}</a></li>
                            <li><a href="#">Unsubscribe Notification</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                    <div class="footer-menu">
                        <h3>{{__('footer.information')}}</h3>
                        <ul>
                            <li><a href="#">{{__('page.about_us.title')}}</a></li>
                            <li><a href="#">{{__('page.delivery_information.title')}}</a></li>
                            <li><a href="#">{{__('page.privacy_policy.title')}}</a></li>
                            <li><a href="#">{{__('page.terms_conditions.title')}}</a></li>
                            <li><a href="#">{{__('page.warranty.title')}}</a></li>
                            <li><a href="{{ route('faq') }}">{{__('page.faq.title')}}</a></li>
                            <li><a href="#">{{__('page.seller_login.title')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 col-md-3 col-xs-12">
                    <div class="footer-menu">
                        <h3>Extras</h3>
                        <ul>
                            <li><a href="#">{{__('page.brands.title')}}</a></li>
                            <li><a href="#">{{__('page.voucher.gift')}}</a></li>
                            <li><a href="#">{{__('page.affiliates.title')}}</a></li>
                            <li><a href="#">{{__('page.wish_list.title')}}</a></li>
                            <li><a href="#">{{__('page.order.history')}}</a></li>
                            <li><a href="#">{{__('page.order.track')}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer main end -->
    <!-- footer copyright area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <p>{{ config('info.copyright') }}</p>
                </div>
                <div class="col-sm-12 col-lg-6 col-md-6 pull-right">
                    <img src="{{ ('images/icons/payment-icon.png') }}" alt="payment icon">
                </div>
            </div>
        </div>
    </div>
    <!-- footer copyright area end -->
</footer>
