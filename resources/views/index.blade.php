@extends('layouts.master')

@section('content')
<body data-rsssl="1" class="home blog blog-post-transparent-header-disable blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-regular blog-home-block-subtitle-style-uppercase has-lrm" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/az_AZ/sdk.js#xfbml=1&version=v7.0&appId=2493895410863360&autoLogAppEvents=1" nonce="ToXWyMil"></script>
    <div class="content-block clearfix">
        <div
                class="inhype-fullwidthpostsslider-block-wrapper inhype-fullwidthpostsslider-block-wrapper-857937 inhype-block">
            <div class=container-fluid>
                <div class=row>
                    <div
                            class="inhype-fullwidthpostsslider-block inhype-fullwidthpostsslider-block-857937 inhype-block">
                        <div class=owl-carousel>
                            @if($slider != null)
                            @foreach($slider as $item)
                            <div class=col-md-12>
                                <div class="inhype-overlay-post inhype-overlay-short-post inhype-post inhype-post-invert"
                                     data-aos=fade-up>
                                    <div class=inhype-post-wrapper-inner>
                                        <div class=inhype-post-image
                                    data-style="background-image: url('/images/{{ $item->img }}');">
                                        </div>
                                        <div class=inhype-post-details>
                                            <div class=inhype-post-details-inner>
                                                <div class=container>
                                                    <div class=post-categories>
                                                        @switch($item->type)
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
                                                            <span class="cat-title">Text-Article</span>
                                                        </a>
                                                    @endswitch
                                                    @if($item->categories != null)
                                                    @foreach($item->categories as $cat)
                                                <a href="{{ route('category', ['cslug' => $cat->slug]) }}">
                                                    <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                                    <span class="cat-title">{{ $cat->title }}</span>
                                                </a>
                                                    @endforeach
                                                @else
                                                    <a href="#">
                                                        <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                                        <span class="cat-title">Kateqoriya Yoxdur</span>
                                                    </a>
                                                @endif

                                                                </div>
                                                                @switch($item->type)
                                                                @case('audio')
                                                                <h3 class="post-title entry-title"><a
                                                                            href="{{ route('audio.single', ['aslug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                                                @break

                                                                @case('video')
                                                                <h3 class="post-title entry-title"><a
                                                                            href="{{ route('video.single', ['vslug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                                                @break

                                                                @default
                                                                <h3 class="post-title entry-title"><a
                                                                            href="{{ route('post', ['nslug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                                            @endswitch
                                                            <div class="post-author">
                                                                <span class="vcard">Müəllif: <span class="fn"><a href="#" rel="author">{{ $item->author }}</a></span>
                                                                </span>
                                                            </div>
                                                    <div class=post-info-dot></div>
                                                    <div class="post-date"><time class="entry-date published updated"
                                                        datetime="{{ $item->created_at->toDateString() }}">{{ $item->created_at->toDateString() }}</time>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class=col-md-12>
                                <div class="inhype-overlay-post inhype-overlay-short-post inhype-post inhype-post-invert"
                                     data-aos=fade-up>
                                    <div class=inhype-post-wrapper-inner>
                                        <div class=inhype-post-image
                                             data-style="background-image: url();">
                                        </div>
                                        <div class=inhype-post-details>
                                            <div class=inhype-post-details-inner>
                                                <div class=container>
                                                    <div class=post-categories><a
                                                                href=category/business/index.html><span class=cat-dot
                                                                                                        data-style="background-color: #994db1;"></span><span
                                                                    class=cat-title>Business</span></a><a
                                                                href=category/video/index.html><span class=cat-dot
                                                                                                     data-style="background-color: #0d30c3;"></span><span
                                                                    class=cat-title>Video</span></a></div>
                                                    <h3 class="post-title entry-title"><a
                                                                href=2019/12/01/if-you-were-to-start-a-business-from-scratch-tomorrow/index.html>If
                                                            You Were to Start a Business From Scratch Tomorrow</a></h3>
                                                    <div class=post-author>
                                                        <span class=vcard>
                                                            By <span class=fn><a href=author/inhype/index.html
                                                                                 title="Posts by Inhype" rel=author>Inhype</a></span>
                                                        </span>
                                                    </div>
                                                    <div class=post-info-dot></div>
                                                    <div class=post-date><time class="entry-date published updated"
                                                                               datetime=2019-12-01T10:06:02+00:00>December 1, 2019</time>
                                                    </div>
                                                    <div class=post-info-dot></div>
                                                    <div class=post-read-time>5 Mins read</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class=inhype-fullwidthpostsslider-block-pagination>
                @if($slider != null)
                @foreach($slider as $k => $item)
            <input type="hidden" value="{{ $k++ }}">
                <div class="inhype-fullwidthpostsslider-page inhype-fullwidthpostsslider-page-{{$k}} {{$k == 1 ? 'active' : ''}}" data-id={{ $k }}>
                <div class=inhype-fullwidthpostsslider-page-id>0{{$k}}</div>
                <h4 class="post-title">{!!\Illuminate\Support\Str::words($item->short_description, 15,'...' )!!}</h4>
                </div>
                @endforeach
                @else
                <div class="inhype-fullwidthpostsslider-page inhype-fullwidthpostsslider-page-2" data-id=2>
                    <div class=inhype-fullwidthpostsslider-page-id>02</div>
                    <h4 class="post-title">Supporting the People Behind the Product</h4>
                </div>
                @endif

            </div>
        </div>

        <div class="inhype-postsgrid1-block-wrapper inhype-postsgrid1-block-wrapper-34694 inhype-block">
            <div class="container container-title">
                <div class=row>
                    <div class=inhype-block-title>
                        <h3>Bütün Postlar</h3>
                        <h4>Yeni məqalələr üçün sıralamanı izləyin.</h4>
                    </div>
                </div>
            </div>
            <div class="container container-content">
                <div class="row for-ajax">
                @if($collection != null)
                    @foreach ($collection as $post)
                    <div class="col-md-4">
                        <div class="inhype-grid-post inhype-post format-standard aos-init aos-animate" data-aos="fade-up">
                            <div class="inhype-post-image-wrapper">
                                @switch($post->type)
                                    @case('audio')
                                    <a href="{{ route('audio.single', ['aslug' => $post->slug]) }}">
                                        <div class="inhype-post-image" data-style="background-image: url('/images/{{ $post->img }}');"
                                             style="background-image: url('/images/{{ $post->img }}');">
                                        </div>
                                    </a>
                                    @break

                                    @case('video')
                                    <a href="{{ route('video.single', ['vslug' => $post->slug]) }}">
                                        <div class="inhype-post-image" data-style="background-image: url('/images/{{ $post->img }}');"
                                             style="background-image: url('/images/{{ $post->img }}');">
                                        </div>
                                    </a>
                                    @break

                                    @default
                                    <a href="{{ route('post', ['nslug' => $post->slug]) }}">
                                        <div class="inhype-post-image" data-style="background-image: url('/images/{{ $post->img }}');"
                                             style="background-image: url('/images/{{ $post->img }}');">
                                        </div>
                                    </a>
                                @endswitch

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
                                        <a href="category/lifestyle/index.html">
                                            <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                            <span class="cat-title">Lifestyle</span>
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
                                                <span class="cat-title">Text-Article</span>
                                            </a>
                                        @endswitch

                                </div>
                                @switch($post->type)
                                    @case('audio')
                                    <h3 class="post-title entry-title"><a
                                                href="{{ route('audio.single', ['aslug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                    @break

                                    @case('video')
                                    <h3 class="post-title entry-title"><a
                                                href="{{ route('video.single', ['vslug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                    @break

                                    @default
                                    <h3 class="post-title entry-title"><a
                                                href="{{ route('post', ['nslug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                @endswitch

                                <div class="post-author">
                        <span class="vcard">Müəllif: <span class="fn"><a href="#" rel="author">{{ $post->author }}</a></span>
                        </span>
                                </div>
                                <div class="post-info-dot"></div>
                                <div class="post-date"><time class="entry-date published updated"
                                                             datetime="2019-12-02T09:39:38+00:00">{{ $post->created_at->toDateString() }}</time></div>

                            </div>
                            <div class="post-excerpt"> {!!\Illuminate\Support\Str::words($post->short_description, 15,'...' )!!}</div>
                        </div>
                    </div>
                    @endforeach
                @endif
                <div class="col-md-12 inhype-block-button">
                {{ $collection->links() }}
                </div>
                </div>
            </div>
        </div>




        <div class="container html-block-container inhype-block" data-aos=fade-up>
            <div class=row>
                <div class="col-md-12 html-block">
                    <div class=hr></div>
                </div>
            </div>
        </div>

        <div class="inhype-blog-block-wrapper page-container container">
            <div class=row>
                <div class="col-md-6">
                    <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6685598994527252480" height="450" width="580" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="fb-page" data-href="https://www.facebook.com/lawxblog" data-tabs="timeline" data-width="580" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/lawxblog" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lawxblog">LawX Blog</a></blockquote></div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer')
<script>
    $(document).on('click', '.pagination a', function(e){
        e.preventDefault();
        var url = $(this).attr('href').split('page=')[1];
        console.log(url);
        $.ajax({
            url: 'ajax?page='+ url
        }).done(function(data){
            console.log(data);
            $('.for-ajax').html(data);
            location.hash = url;
        });
    });
</script>
@endsection
