@extends('layouts.master')
@section('body')
<body data-rsssl="1" class="page-template-default page page-id-746 blog-post-transparent-header-disable blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-regular blog-home-block-subtitle-style-uppercase has-lrm" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
@endsection
@section('content')
    <div class="inhype-postsgrid3-block-wrapper inhype-postsgrid3-block-wrapper-714998 inhype-block">
        <div class="container container-title">
            <div class="row">
                <div class="inhype-block-title">
                    <h3 class="text-center">Kateqoriyalar</h3>
                    <h4 class="text-center">Burada kateqoriyalar haqqında daha geniş məlumat ala bilərsiniz.</h4>
                </div>
            </div>
        </div>
        <div class="container container-content">
            <div class="row">
                @if($categories != null)
                    @foreach($categories as $category)
                        <div class="col-md-4">
                    <div
                            class="inhype-overlay-post inhype-overlay-short-post inhype-post inhype-post-invert format-standard">
                        <div class="inhype-post-wrapper-inner">
                            <div class="inhype-post-image"
                                 data-style="background-image: url('/images/category/{{ $category->img }}');"
                                 style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2020/01/cmpce1fznue-1140x694.jpg);">
                            </div>
                            <div class="inhype-post-details">
                                <div class="inhype-post-details-inner">
                                    <div class="post-categories"><a
                                                href="https://wp.wp-preview.com/inhype/inhype-2/category/world/"><span
                                                    class="cat-dot" data-style="background-color: #160600;"
                                                    style="background-color: #160600;"></span><span
                                                    class="cat-title">{{ $category->title }}</span></a></div>
                                    <h3 class="post-title entry-title"><a
                                                href="{{ route('category', ['cslug' => $category->slug]) }}">{{ $category->description }}</a></h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

@endsection
