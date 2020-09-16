@extends('layouts.master')
@section('body')
    <body data-rsssl=1
          class="home blog blog-post-transparent-header-disable blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-regular blog-home-block-subtitle-style-uppercase">

@endsection
@section('content')
<div class="content-block ">
    <div class="container container-page-item-title" data-style="" data-speed="0.1" style="">
        <div class="row">
            <div class="col-md-12 col-overlay">
                <div class="container">
                    <div class="page-item-title-single page-item-title-page">
                        <h1 class="page-title text-center">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container container span-col-md-8">
        <div class="row">
            <div class="col-md-8">
                <div class="entry-content clearfix" role="main">
                    <article>
                        <p>Please select a topic below to contact us. We will be in touch as soon as possible.</p>
                        <p>They can then go on to fix the problem. Diego finds that this is a great example of
                            balancing qualitative and quantitative data. Too many data points, and not being clear
                            about what you are measuring, can create confusion. And too few, like just measuring
                            NPS, is hard to make actionable.</p>
                        <p>They can then go on to fix the problem. Diego finds that this is a great example of
                            balancing qualitative and quantitative data. Too many data points, and not being clear
                            about what you are measuring, can create confusion. And too few, like just measuring
                            NPS, is hard to make actionable.</p>
                        <hr class="wp-block-separator is-style-wide">
                        <p><strong>Address:</strong>&nbsp;Lorem 142 Str., 2352, Ipsum, State,
                            USA<br><strong>Phone:</strong>&nbsp;+33-257634 534</p>
                        <hr class="wp-block-separator is-style-wide">
                        <p>Julie believes that the individual contributor (IC) track should be full of possibilities
                            for leadership, even though the roles aren’t always structured to enable that. In her
                            mind, that’s the difference between a manager and a leader.</p>
                        <h2>Send us a message</h2>
                        <div role="form">
                            <form action="{{ route('contact-send') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="ExampleName">Adınız və Soyadınız</label>
                                    <input type="text" class="form-control" id="ExampleName" name="name" value="{{ old('name') }}" placeholder="Adınızı və Soyadınızı daxil edin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email Ünvanı</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}" placeholder="Email ünvanınızı daxil edin.">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSubject">Mövzu</label>
                                    <input type="text" class="form-control" id="exampleSubject" name="subject" value="Mövzu başlığını burada yaza bilərsiniz." placeholder="Mövzu daxil edin">
                                </div>
                                <div class="form-group">
                                    <label for="exampleWebsite">Web Sayt</label>
                                    <input type="text" class="form-control" id="exampleWebsite" name="website" value="{{ old('website') }}" placeholder="Web saytınız varsa daxil edə bilərsiniz">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mesajınız</label>
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3">{{ old('message') }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Göndər</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-4 page-sidebar sidebar sidebar-right" role="complementary">
                <ul id="page-sidebar">
                    <li id="inhype-list-posts-6" class="widget widget_inhype_list_entries">
                        <h2 class="widgettitle">Latest Posts</h2>
                        <ul class="template-shortline-inside">
                            <li class="template-shortline">
                                <div class="inhype-shortline-post inhype-post">
                                    <div class="inhype-post-image-wrapper">
                                        <a
                                                href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/10/the-city-of-london-wants-to-have-its-brexit-cake-and-eat-it-too/">
                                            <div class="inhype-post-image"
                                                 data-style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2020/01/g0ocjglcehu-220x180.jpg);"
                                                 style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2020/01/g0ocjglcehu-220x180.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="inhype-post-details">
                                        <h3 class="post-title entry-title"><a
                                                    href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/10/the-city-of-london-wants-to-have-its-brexit-cake-and-eat-it-too/">The
                                                City of London Wants To Have Its Brexit Cake and Eat It Too</a></h3>
                                        <div class="post-date"><time class="entry-date published updated"
                                                                     datetime="2019-12-10T09:46:03+00:00">December 10, 2019</time></div>
                                    </div>
                                </div>
                            </li>
                            <li class="template-shortline">
                                <div class="inhype-shortline-post inhype-post">
                                    <div class="inhype-post-image-wrapper">
                                        <a
                                                href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/10/what-you-need-to-know-about-5g-in-2020/">
                                            <div class="inhype-post-image"
                                                 data-style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2020/01/cmpce1fznue-220x180.jpg);"
                                                 style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2020/01/cmpce1fznue-220x180.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="inhype-post-details">
                                        <h3 class="post-title entry-title"><a
                                                    href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/10/what-you-need-to-know-about-5g-in-2020/">What
                                                You Need to Know About 5G in 2020</a></h3>
                                        <div class="post-date"><time class="entry-date published updated"
                                                                     datetime="2019-12-10T09:23:00+00:00">December 10, 2019</time></div>
                                    </div>
                                </div>
                            </li>
                            <li class="template-shortline">
                                <div class="inhype-shortline-post inhype-post">
                                    <div class="inhype-post-image-wrapper">
                                        <a
                                                href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/03/middle-age-misery-peaks-at-age-of-47-2-economist-says/">
                                            <div class="inhype-post-image"
                                                 data-style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2019/12/inhype2-photos-1-220x180.jpg);"
                                                 style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2019/12/inhype2-photos-1-220x180.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="inhype-post-details">
                                        <h3 class="post-title entry-title"><a
                                                    href="https://wp.wp-preview.com/inhype/inhype-2/2019/12/03/middle-age-misery-peaks-at-age-of-47-2-economist-says/">Middle
                                                Age Misery Peaks at Age of 47.2, Economist Says</a></h3>
                                        <div class="post-date"><time class="entry-date published updated"
                                                                     datetime="2019-12-03T12:06:45+00:00">December 3, 2019</time></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection