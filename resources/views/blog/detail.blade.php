@extends('layouts.app')

@section('titlePage', $blog->name . ' - Blog')
@section('content')
    <div class="breadcrumbs-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="separator">/</span> Single Blog
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
                    <h1 class="entry-title">Single Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title end -->
    <!-- cart page content -->
    <div class="blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="single-blog page-content blog-page blog-sidebar right-sidebar">
                        <!-- blog post -->
                        <article class="text-center">
                            <div class="blog-entry-header">
                                <div class="post-category">
                                    @foreach($blog->categories as $category)
                                        <a href="#">{{ \Illuminate\Support\Str::limit($category->name, 15) }}</a>
                                    @endforeach
                                </div>
                                <h1>{{ $blog->name }}</h1>
                                <div class="post-meta">
                                    <a href="#"  class="post-author"><i class="fa fa-user"></i>Posted by {{ $blog->user->first_name . ' ' . $blog->user->last_name }}</a>
                                    <a href="#" class="post-date"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format(DATE_FORMAT) }} </a>
                                </div>
                            </div>
                            <div class="postinfo-wrapper">
                                <div class="post-thumbnail">
                                    <img src="{{ $blog->feature_image }}" alt="">
                                </div>
                                {!! $blog->content !!}
                            </div>
                            <div class="single-post-tag">
                                <a class="comment-link" href="#">{{{ $blog->comments->count() }}} comments</a> / Tags: @foreach($blog->tags as $tag)<a href="{{ route('blog', ['tag' => $tag->slug]) }}" rel="tag">{{ $tag->name }}</a>, @endforeach
                            </div>
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
                        <!-- blog post end -->
                        <div class="relatedposts">
                            <h3>Related posts</h3>
                            <div class="row">
                                <!-- related post -->
                                @foreach($blog_related as $blog)
                                    <div class="relatedthumb col-md-4 col-sm-6">
                                    <div class="image">
                                        <img src="{{ $blog->feature_image }}" alt="">
                                    </div>
                                    <h4><a rel="external" href="{{ route('blog-detail', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a></h4>
                                    <span class="post-date"> {{ \Carbon\Carbon::parse($blog->created_at)->format(DATE_FORMAT) }} </span>
                                </div>
                                @endforeach
                                <!-- related post end -->
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h3>{{ $blog->comments->count() }} comments</h3>
                        @foreach($blog->comments as $comment)
                            @if($comment->reply_for == null && $comment->is_active == ACTIVE)
                                <ol class="commentlist">
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-avatar">
                                                <img style="width: 100px" src="{{ $comment->user->avatar }}" alt="{{ $comment->user->first_name }}">
                                            </div>
                                            <div class="comment-info">
                                                <a href="#">{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</a>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                                <span class="date">{{ date(DATE_FORMAT, $comment->created_at) . ' at ' . date(TIME_FORMAT, $comment->created_at) }}</span>
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                        </div>
                                        @foreach($blog->comments as $child)
                                            @if($child->reply_for == $comment->id && $comment->is_active == ACTIVE)
                                                <ol>
                                                    <li>
                                                        <div class="single-comment">
                                                            <div class="comment-avatar">
                                                                <img width="100px" src="{{ $child->user->avatar }}" alt="comment image bege">
                                                            </div>
                                                            <div class="comment-info">
                                                                <a href="#">{{ $child->user->first_name . ' ' . $child->user->last_name }}</a>
                                                                <div class="reply">
                                                                    <a href="#">Reply</a>
                                                                </div>
                                                                <span class="date">{{ date(DATE_FORMAT, $child->created_at) . date(TIME_FORMAT, $child->created_at) }}</span>
                                                                <p>just a nice post</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            @endif
                                        @endforeach
                                    </li>
                                </ol>
                            @endif
                        @endforeach
                    </div>
                    <div class="comment-respond">
                        <h3>Leave a Reply </h3>
                        <small>Your email address will not be published. Required fields are marked *</small>
                        <form method="post" class="comment-form">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <div class="text-filds">
                                <label for="comment">Comment</label>
                                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                            </div>
                            <div class="form-submit">
                                <input name="submit" onclick="Frontend.comment('blog', {{ $blog->id }}, {{ Auth::id() ?? null }})" type="button" id="submit" class="submit" value="Post Comment">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="blog_sidebar">
                        <div class="row_products_side">
                            <div class="product_left_sidbar">
                                <div class="product-filter  mb-30">
                                    <h5>Search </h5>
                                    <div class="search__sidbar">
                                        <div class="input_form">
                                            <input type="text" id="search_input" name="s" value="Search..." class="input_text">
                                            <button id="blogsearchsubmit" type="submit" class="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-filter  mb-30">
                                    <h5>Blog Archives </h5>
                                    <div class="blog_Archives__sidbar">
                                        <ul>
                                            <li>
                                                <a href="#">March 2015</a>&nbsp;(1)</li>
                                            <li>
                                                <a href="#">December 2014</a>&nbsp;(3)</li>
                                            <li>
                                                <a href="#">November 2014</a>&nbsp;(4)</li>
                                            <li>
                                                <a href="#">September 2014</a>&nbsp;(1)</li>
                                            <li>
                                                <a href="#">August 2014</a>&nbsp;(1)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-filter  mb-30">
                                    <h5>Recent Posts</h5>
                                    <div class="blog_Archives__sidbar">
                                        <ul>
                                            <li> <a href="#">Blog image post</a>&nbsp;(1)</li>
                                            <li> <a href="#">Post with Gallery</a>&nbsp;(3)</li>
                                            <li><a href="#">Post with Audio</a>&nbsp;(4)</li>
                                            <li><a href="#">Post with Video</a>&nbsp;(1)</li>
                                            <li><a href="#">Post with Text</a>&nbsp;(1)</li>

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
