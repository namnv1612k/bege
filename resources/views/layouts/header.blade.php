<header class="header-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="top-bar-left">
                        <!-- welcome -->
                        <div class="welcome">
                            <p>{{ __('header.welcome') }}</p>
                            <span class="custom-social-icon">
                                <a class="facebook social-icon" href="{{ config('info.social.facebook') }}" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a class="twitter social-icon" href="{{ config('info.social.twitter') }}" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a class="instagram social-icon" href="{{ config('info.social.instagram') }}" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a class="linkedin social-icon" href="{{ config('info.social.linkedin') }}" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a class="rss social-icon" href="{{ config('info.social.rss') }}" title="Rss" target="_blank"><i class="fa fa-rss"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="topbar-nav">
                        <div class="wpb_wrapper">
                            <!-- my account -->
                            <div class="menu-my-account-container">
                                <a>{{ __('user.my_account') }} <i class="ion-ios-arrow-down"></i></a>
                                <ul>
                                    @if(Auth::check())
                                        @if(Auth::user()->role == ADMIN || Auth::user()->role == EMPLOYEE)
                                            <li><a class="text-danger" href="{{ route('admin') }}">{{ __('page.admin.title') }}</a></li>
                                        @endif
                                        <li><a href="{{ route('my-account') }}">{{ __('page.my_account.title') }}</a></li>
                                        <li><a href="{{ route('checkout') }}">{{ __('page.checkout.title') }}</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                                            <form action="{{ route('logout') }}" method="post" style="display: none" id="logout-form">
                                                @csrf
                                            </form>
                                    @else
                                        <li><a href="{{ route('login') }}">{{ __('page.login.title') }}</a></li>
                                        <li><a href="{{ route('register') }}">{{ __('page.register.title') }}</a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="switcher">
                                <!-- language-menu -->
                                <div class="language">
                                    <a href="{{ url('language/en') }}">
                                        <img src="{{ asset('images/icons/en.png') }}" alt="language-selector">{{ __('header.lang.english') }}
                                        <i class="ion-ios-arrow-down"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('language/vi') }}">
                                                <img src="{{ asset('images/icons/vi.png') }}" alt="Viet Nam">
                                                <span>{{ __('header.lang.vietnam') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-12">
                    <div class="site-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo-black.png') }}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="header-search clearfix">
                        <div class="header-search-form">
                            <form action="{{ route('shop') }}">
                                <input type="text" name="keyword" placeholder="{{ __('input.search.placeholder') }}">
                                <button type="submit">{{ __('input.search.submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="shop-cart-menu pull-right">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="cart-icon">
                                        <i class="ion-bag"></i><sup>3</sup>
                                    </span>
                                    <span class="cart-text">
                                        <span class="cart-text-title">{{ __('span.my_cart') }} <br> <strong>@money(123)</strong> </span>
                                    </span>
                                </a>
                                <ul>
                                    <li>
                                        <div class="single-shop-cart-wrapper">
                                            <div class="shop-cart-img">
                                                <a href="#"><img src="images/product/1.jpg" alt="Image of Product"></a>
                                            </div>
                                            <div class="shop-cart-info">
                                                <h5><a href="{{ route('cart') }}">sport t-shirt men</a></h5>
                                                <span class="price">£515.00</span>
                                                <span class="quantaty">{{ __('cart.qty') }} 1</span>
                                                <span class="cart-remove"><a href="#"><i class="fa fa-times"></i></a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop-cart-total">
                                            <p>{{ __('cart.subtotal') }}: <span class="pull-right">£880.00</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shop-cart-btn">
                                            <a href="{{ route('checkout') }}">{{ __('page.checkout.title') }}</a>
                                            <a href="{{ route('cart') }}" class="pull-right">{{ __('page.cart.view_cart') }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 hidden-md hidden-sm pull-left category-wrapper">
                    <div class="categori-menu">
                        <span class="categorie-title">{{ __('span.categorie_title') }}</span>
                        <mega-category></mega-category>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="{{  request()->is('/') ? 'current' : '' }}"><a href="{{ route('home') }}">{{ __('page.home.title') }}</a></li>
                                <li class="{{  request()->is('shop*') ? 'current' : '' }}"><a href="{{ route('shop') }}">{{ __('page.shop.title') }}</a></li>
                                <li class="{{  request()->is('blog*') ? 'current' : '' }}"><a href="{{ route('blog') }}">{{ __('page.blog.title') }}</a></li>
                                <li class="{{  request()->is('about-us*') ? 'current' : '' }}"><a href="{{ route('about-us') }}">{{ __('page.about_us.title') }}</a></li>
                                <li class="{{  request()->is('contact*') ? 'current' : '' }}"><a href="{{ route('contact') }}">{{ __('page.contact.title') }}</a></li>
                                <li class="{{  request()->is('features*') ? 'current' : '' }}"><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                    <ul class="megamenu-3-column">
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                <li><a href="service.html">Services</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="{{ route('faq') }}">Frequently Questins</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                <li><a href="{{ route('blog') }}">Sidebar right</a></li>
                                                <li><a href="single-blog.html">Image Format</a></li>
                                                <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                <li><a href="single-blog-video.html">Video Format</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                                <li><a href="shop-list.html">Shop List View</a></li>
                                                <li><a href="shop-right.html">Shop Right</a></li>
                                                <li><a href="single-product.html">Shop Single</a></li>
                                                <li><a href="{{ route('cart') }}">Shoping Cart</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="{{ route('home') }}">{{ __('page.home.title') }}</a></li>
                                    <li><a href="{{ route('shop') }}">{{ __('page.shop.title') }}</a></li>
                                    <li><a href="{{ route('blog') }}">{{ __('page.blog.title') }}</a></li>
                                    <li><a href="{{ route('about-us') }}">{{ __('page.about_us.title') }}</a></li>
                                    <li><a href="{{ route('contact') }}">{{ __('page.contact.title') }}</a></li>
                                    <li><a href="#">Features</a>
                                        <ul>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                                    <li><a href="service.html">Services</a></li>
                                                    <li><a href="service-2.html">Services Two</a></li>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="{{ route('faq') }}">Frequently Questins</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                    <li><a href="{{ route('blog') }}">Sidebar right</a></li>
                                                    <li><a href="single-blog.html">Image Format</a></li>
                                                    <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                    <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                    <li><a href="single-blog-video.html">Video Format</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                                    <li><a href="shop-list.html">Shop List View</a></li>
                                                    <li><a href="shop-right.html">Shop Right</a></li>
                                                    <li><a href="single-product.html">Shop Single</a></li>
                                                    <li><a href="{{ route('cart') }}">Shoping Cart</a></li>
                                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

