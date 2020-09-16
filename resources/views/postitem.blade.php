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
<div class="col-md-12 inhype-block-button" data-aos=fade-up>
{{ $collection->links() }}
</div>
