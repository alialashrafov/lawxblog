@extends('layouts.master')
@section('content')
<div class="content-block ">
   <div class="container-fluid container-page-item-title with-bg inhype-parallax" data-style="background-image: url(https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2019/12/inhype2-photos-1.jpg);" data-speed="0.1" style="background-image: url(&quot;https://wp.wp-preview.com/inhype/inhype-2/wp-content/uploads/2019/12/inhype2-photos-1.jpg&quot;); background-position: 50% -28.6px;"></div>
   <div class="page-container container span-col-md-12">
      <div class="row">
         <div class="col-md-12">
            <div class="entry-content clearfix" role="main">
               <article>
                  <h2 class="text-center">Hədəflərimiz və haqqımızda daha geniş məlumat</h2>
                  <hr class="wp-block-separator is-style-wide">
                  <p>LawX Blog- ən son hüquqi yeniliklərə fərqli prizmadan yanaşıldığı, hüquqi araşdırmalarla zəngin olan hüquq bloqudur. Bu bloqda hüquqi dünyagörüşünüzü artıracaq məlumatlar və hüquqşünas vakansiyaları da mövcuddur. Bloqdakı məqalələr oxucu auditoriyasını nəzərə alaraq, əsasən azərbaycan dilində, bəzən isə inglis dilində olacaq.
                    LawX Blog- lawxblog.com domen adı altında fəaliyyət göstərir.
                    </p>
                  <div class="shortcode-block">
                     <div class="inhype-postsgrid3-block-wrapper inhype-postsgrid3-block-wrapper-870458 inhype-block">
                        <div class="container container-title">
                           <div class="row">
                              <div class="inhype-block-title">
                                 <h3>Maraqlı Məqalələr</h3>
                              </div>
                           </div>
                        </div>
                        <div class="container container-content">
                           <div class="row">
                            @if($collection != null)
                               @foreach ($collection as $item)
                               <div class="col-md-4">
                                <div class="inhype-overlay-post inhype-overlay-short-post inhype-post inhype-post-invert format-gallery">
                                   <div class="inhype-post-wrapper-inner">
                                   <div class="inhype-post-image" data-style="background-image: url('/images/{{ $item->img }}');" style="background-image: url('/images/{{ $item->img }}');">
                                         <div class="inhype-post-format-icon"></div>
                                      </div>
                                      <div class="inhype-post-details">
                                         <div class="inhype-post-details-inner">
                                            @if($item->categories != null)
                                            @foreach($item->categories as $cat)
                                            <div class="post-categories">
                                                <a href="{{ route('category', ['cslug' => $cat->slug]) }}">
                                                    <span class="cat-dot" data-style="background-color: #994db1;" style="background-color: #994db1;"></span>
                                                    <span class="cat-title">{{ $cat->title }}</span>
                                                </a>
                                            </div>
                                            @endforeach
                                            @else
                                            <div class="post-categories">
                                                <a href="#">
                                                    <span class="cat-dot" data-style="background-color: #994db1;" style="background-color: #994db1;"></span>
                                                    <span class="cat-title">Kateqoriya yoxdur.</span>
                                                </a>
                                            </div>
                                            @endif

                                            @switch($item->type)
                                                @case('audio')
                                                <div class="post-categories">
                                                    <a href="{{ route('audio') }}">
                                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                                        <span class="cat-title">Audio</span>
                                                    </a>
                                                </div>
                                                @break

                                                @case('video')
                                                <div class="post-categories">
                                                    <a href="{{ route('video') }}">
                                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                                        <span class="cat-title">Video</span>
                                                    </a>
                                                </div>
                                                @break

                                                @default
                                                <div class="post-categories">
                                                    <a href="{{ route('categories') }}">
                                                        <span class="cat-dot" data-style="background-color: #ed7e4f;" style="background-color: #ed7e4f;"></span>
                                                        <span class="cat-title">Kateqoriyalar</span>
                                                    </a>
                                                </div>
                                            @endswitch
                                            @switch($item->type)
                                                @case('audio')
                                            <h3 class="post-title entry-title"><a href="{{ route('audio.single', ['aslug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                                @break

                                                @case('video')
                                                <h3 class="post-title entry-title"><a href="{{ route('video.single', ['vslug' => $item->slug]) }}">{{ $item->title }}</a></h3>

                                                @break

                                                @default
                                                <h3 class="post-title entry-title"><a href="{{ route('post', ['nslug' => $item->slug]) }}">{{ $item->title }}</a></h3>
                                            @endswitch
                                            <div class="post-author">
                                               <span class="vcard">
                                               By <span class="fn"><a href="#" rel="author">{{ $item->author }}</a></span>
                                               </span>
                                            </div>
                                            <div class="post-info-dot"></div>
                                            <div class="post-date"><time class="entry-date published updated" datetime="{{ $item->created_at->toDateString() }}">{{ $item->created_at->toDateString() }}</time></div>
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
                  </div>
                  <p></p>
               </article>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
