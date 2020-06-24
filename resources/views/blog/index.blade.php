@extends('layouts.app')

@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Blog
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="entry-title">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="page-content blog-page blog-sidebar right-sidebar blog-text-align">
                        @foreach($blogs as $blog)
                            <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    @foreach($blog->categories as $category)
                                        <a href="{{ route('blog', ['category' => $category->slug]) }}">{{ \Illuminate\Support\Str::limit($category->name, 10) }}</a>&#160;
                                    @endforeach
                                </div>
                                <h1><a href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">{{ \Illuminate\Support\Str::limit($blog->name, 20) }}</a></h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>{{ $blog->user->first_name . ' ' . $blog->user->last_name }}</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format(DATE_FORMAT) }} </a>
                                </div>
                            </div>
                            <div class="postinfo-wrapper">
                                <div>
                                    <img src="{{ $blog->feature_image }}" alt="{{ $blog->name }}">
                                </div>
                                {!! $blog->content !!}
                            </div>
                                <a class="readmore btn btn-primary mt-3" href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">Read more</a>
                                <div class="social-sharing">
                                    <h3>Share this post</h3>
                                    <div class="social-sharie">
                                        <ul class="social-icons">
                                            <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                        </article>
                        @endforeach
                    </div>
                    @empty(!$blogs)
                        {{ $blogs->links() }}
                    @endempty
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="blog_sidebar">
                        <div class="row_products_side">
                            <div class="product_left_sidbar">
                                <div class="product-filter  mb-30">
                                    <h5>Search </h5>
                                    <div class="search__sidbar">
                                        <div class="input_form">
                                            <form action="{{ route('blog') }}" method="get">
                                                <input type="text" id="search_input" name="keyword" placeholder="Search..." class="input_text">
                                                <button id="blogsearchsubmit" type="submit" class="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-filter  mb-30">
                                    <h5>Recent Posts</h5>
                                    <div class="blog_Archives__sidbar">
                                        <ul>
                                            @foreach($blog_recent as $blog)
                                                <li> <a href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">{{ \Illuminate\Support\Str::limit($blog->name, 15) }}</a>&nbsp;({{ $blog->views }})</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-single-banner">
                                    <a href="#">
                                        <img src="images/banner/shop-sidebar.jpg" alt="Banner">
                                    </a>
                                </div>
                                <div class="product-filter mb-30">
                                    <h5>product tags</h5>
                                    <div class="blog-tags">
                                        <a href="#">brand</a>
                                        <a href="#">black</a>
                                        <a href="#">white</a>
                                        <a href="#">chire</a>
                                        <a href="#">table</a>
                                        <a href="#">Lorem</a>
                                        <a href="#">ipsum</a>
                                        <a href="#">dolor</a>
                                        <a href="#">sit</a>
                                        <a href="#">amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
