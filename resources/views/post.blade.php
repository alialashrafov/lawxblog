@extends('layouts.master')
@section('body')

<body data-rsssl="1" class="post-template-default single single-post postid-153 single-format-standard blog-post-transparent-header-disable blog-small-page-width blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-regular blog-home-block-subtitle-style-uppercase has-lrm"
    data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
@endsection
    @section('content')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f144edf59ce2c5c"></script>

    <div class="content-block post-header-inheader3 post-sidebar-right">
        <div class="container-fluid container-page-item-title-2column container-page-item-title">
            <div class="page-item-single-title-column">
                <div class="page-item-title-single">
                    <div class="inhype-post-single inhype-post">
                        <div class="post-categories">
                            @if($post->categories != null)
                            @foreach($post->categories as $cat)
                            <a href="{{ route('category', ['cslug' => $cat->slug]) }}">
                                <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                <span class="cat-title">{{ $cat->title }}</span>
                            </a>
                            @endforeach
                            @else
                                <a href="/">
                                    <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                    <span class="cat-title">Seçilmiş Kateqoriya yoxdur.</span>
                                </a>
                            @endif

                                @switch($post->type)
                                    @case('audio')
                                    <a href="{{ route('audio') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Audio</span>
                                    </a>
                                    @break

                                    @case('video')
                                    <a href="{{ route('video') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Video</span>
                                    </a>
                                    @break

                                    @default
                                    <a href="{{ route('categories') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Kateqoriyalar</span>
                                    </a>
                                @endswitch
                        </div>
                        <div class="inhype-post-details">
                            <h1 class="post-title entry-title">{{ $post->title }}</h1>
                            <div class="post-author">
                                <span class="vcard">
                                    By <span class="fn"><a href="#"
                                          rel="author">{{ $post->author }}</a></span>
                                </span></div>
                            <div class="post-info-dot"></div>
                            <div class="post-date"><time class="entry-date published updated"
                                    datetime="2019-12-02T09:39:38+00:00">{{ $post->created_at->toDateString() }}</time></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-item-single-image-column" data-style="background-image: url('/images/{{ $post->img }}');"
                style="background-image: url('/images/{{ $post->img }}');">
            </div>
        </div>
        <div class="post-container container span-col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post blog-post-single hentry clearfix">
                        <article id="post-153"
                            class="post-153 post type-post status-publish format-standard has-post-thumbnail category-lifestyle category-markets tag-adventure tag-blog tag-business tag-people tag-travel"
                            role="main">
                            <div class="post-content-wrapper">
                                <div class="post-content clearfix">
                                    <div class="entry-content">
                                    {!! $post->description !!}
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="col-md-4 post-sidebar sidebar sidebar-right" role="complementary">
                    <ul id="post-sidebar">
                        @include('layouts.partials.aboutme')
                        <li id="inhype-categories-2" class="widget widget_inhype_categories">
                            <h2 class="widgettitle">Kateqoriyalar</h2>
                            <div class="post-categories-list">
                                @foreach($categories as $cat)
                                <div class="inhype-post inhype-image-wrapper with-bg">
                                    <a href="{{ route('category', ['cslug' => $cat->slug]) }}" class="inhype-featured-category-link">
                                        <div class="post-categories-image inhype-image" data-style="background-image: url('/images/category/{{ $cat->img }}');"
                                            style="background-image: url('/images/category/{{ $cat->img }}');">
                                        </div>
                                        <div class="post-categories-overlay">
                                            <div class="post-categories-bg" data-style="background-color: #994db1;"
                                                style="background-color: #994db1;"></div>
                                            <div class="post-categories">
                                                <div class="post-category"><span class="cat-dot"
                                                        data-style="background-color: #994db1;"
                                                        style="background-color: #994db1;"></span><span
                                                        class="cat-title">{{ $cat->title }}</span></div>
                                            </div>
                                            <span class="post-categories-counter">{{ $cat->posts()->count() }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="post-container-bottom container span-col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <nav id="nav-below" class="navigation-post">
                        <div class="nav-post-wrapper">
                            @if($previous)
                            <div class="nav-post nav-post-prev inhype-post">
                                <a href="{{ route('post', ['nslug' => $previous->slug]) }}">
                                    <div class="nav-post-button-title"><i class="fa fa-arrow-left"
                                            aria-hidden="true"></i>Öncəki</div>
                                    <div class="nav-post-button">
                                        <div class="nav-post-details">
                                            <div class="nav-post-name">{{ $previous->title }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif

                            @if($next)
                            <div class="nav-post nav-post-next inhype-post">
                                <a href="{{ route('post', ['nslug' => $next->slug]) }}">
                                    <div class="nav-post-button-title">Növbəti<i class="fa fa-arrow-right"
                                            aria-hidden="true"></i></div>
                                    <div class="nav-post-button">
                                        <div class="nav-post-details">
                                            <div class="nav-post-name">{{ $next->title }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                @endif
                        </div>
                    </nav>

                    <div class="blog-post-related-wrapper clearfix">
                        <h5>Related posts</h5>
                        @if($relateds != null)
                        @foreach($relateds as $related)
                        <div class="inhype-list-post inhype-list-medium-post inhype-post format-standard aos-init aos-animate"
                            data-aos="fade-up">
                            <div class="inhype-post-image-wrapper">
                                @switch($post->type)
                                    @case('audio')
                                    <a href="{{ route('audio.single', ['aslug' => $related->slug]) }}">
                                    @break

                                    @case('video')
                                    <a href="{{ route('video.single', ['vslug' => $related->slug]) }}">
                                    @break

                                    @default
                                    <a href="{{ route('post', ['nslug' => $related->slug]) }}">
                                @endswitch

                                    <div class="inhype-post-image"
                                        data-style="background-image: url('/images/{{ $related->img }}');"
                                        style="background-image: url('/images/{{ $related->img }}');">
                                    </div>
                                </a>
                            </div>
                            <div class="inhype-post-details">
                                <div class="post-categories">
                                    @if($post->categories != null)
                                        @foreach($post->categories as $cat)
                                            <a href="{{ route('category', ['cslug' => $cat->slug]) }}">
                                                <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                                <span class="cat-title">{{ $cat->title }}</span>
                                            </a>
                                        @endforeach
                                    @else
                                        <a href="/">
                                            <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                            <span class="cat-title">Seçilmiş Kateqoriya yoxdur.</span>
                                        </a>
                                    @endif
                                    @switch($post->type)
                                    @case('audio')
                                    <a href="{{ route('audio') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Audio</span>
                                    </a>
                                    @break

                                    @case('video')
                                    <a href="{{ route('video') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Video</span>
                                    </a>
                                    @break

                                    @default
                                    <a href="{{ route('categories') }}">
                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                        <span class="cat-title">Kateqoriyalar</span>
                                    </a>
                                @endswitch
                                </div>
                                <h3 class="post-title entry-title">
                                    @switch($related->type)
                                    @case('audio')
                                    <a href="{{ route('audio.single', ['aslug' => $related->slug]) }}">{{ $related->title }}</a>
                                    @break

                                    @case('video')
                                    <a href="{{ route('video.single', ['vslug' => $related->slug]) }}">{{ $related->title }}</a>
                                    @break

                                    @default
                                    <a href="{{ route('post', ['nslug' => $related->slug]) }}">{{ $related->title }}</a>
                                @endswitch

                                </h3>
                                <div class="post-author">
                                    <span class="vcard">
                                        By <span class="fn"><a href="#" rel="author">{{ $related->author }}</a></span>
                                    </span></div>
                                <div class="post-info-dot"></div>
                                <div class="post-date"><time class="entry-date published updated"
                                        datetime="{{ $related->created_at->toDateString() }}">{{ $related->created_at->toDateString() }}</time></div>
                                <div class="post-info-dot"></div>
                                <div class="post-excerpt">{!!\Illuminate\Support\Str::words($related->short_description, 15,'...' )!!}</div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                        </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
