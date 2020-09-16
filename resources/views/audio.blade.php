@extends('layouts.master')
@section('body')
<body data-rsssl="1" class="home blog blog-post-transparent-header-disable blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-regular blog-home-block-subtitle-style-uppercase has-lrm" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
@endsection
@section('content')
    <div class="inhype-postsgrid1-block-wrapper inhype-postsgrid1-block-wrapper-34694 inhype-block">
        <div class="container container-title">
            <div class="row">
                <div class="inhype-block-title text-center">
                    <h3 class="text-center">Səsli Qeydlər</h3>
                    <h4 class="text-center">Yeni Postlar</h4>
                </div>
            </div>
        </div>
        <div class="container container-content">
            <div class="row">
                @if($audios != null)

                    @foreach( $audios as $post)
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <div class="inhype-grid-post inhype-post format-standard aos-init aos-animate" data-aos="fade-up">
                                <div class="inhype-post-image-wrapper">
                                        <a href="{{ route('audio.single', ['aslug' => $post->slug]) }}">
                                            <div class="inhype-post-image" data-style="background-image: url('/images/{{ $post->img }}');"
                                                 style="background-image: url('/images/{{ $post->img }}');">
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
                                            <a href="category/lifestyle/index.html">
                                                <span class="cat-dot" data-style="background-color: #c74970;" style="background-color: #c74970;"></span>
                                                <span class="cat-title">Lifestyle</span>
                                            </a>
                                        @endif
                                            <a href="{{ route('audio') }}">
                                                <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                                <span class="cat-title">Audio</span>
                                            </a>




                                    </div>


                                        <h3 class="post-title entry-title"><a
                                                    href="{{ route('audio.single', ['aslug' => $post->slug]) }}">{{ $post->title }}</a></h3>


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
                <div class="col-md-12 inhype-block-button aos-init aos-animate" data-aos="fade-up">
                    {{ $audios->render() }}
                </div>
            </div>
        </div>
    </div>
@endsection
