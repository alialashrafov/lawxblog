<div class="footer-sidebar-2-wrapper footer-black">
    <div class="footer-sidebar-2 sidebar container footer-sidebar-2-container">
        <ul id=footer-sidebar-2>
            <li id=inhype-text-4 class="widget widget_inhype_text">
                <div class="inhype-textwidget-wrapper ">
                    <h2 class="widgettitle">About</h2>
                    <div class=inhype-textwidget data-style="padding: 0px 30px 0px 0px;">
                        @if($settings)
                        <p>{{ $settings->description }}</p>
                        @else
                        <p>Haqqımızda description</p>
                        @endif
                        <a class=btn href="{{ route('about') }}" target=_self>About</a>
                    </div>
                </div>
            </li>
            <li id=nav_menu-3 class="widget widget_nav_menu">
                <h2 class="widgettitle">Menu</h2>
                <div class=menu-footer-menu-1-container>
                    <ul id=menu-footer-menu-1 class=menu>
                        <li id=menu-item-796
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-796">
                            <a href='/' aria-current=page>Əsas Səhifə</a></li>
                        <li id=menu-item-792
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-792"><a
                                    href="{{ route('contact') }}">Əlaqə</a></li>
                        <li id=menu-item-793
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793"><a
                                    href={{ route('about') }}>Haqqımızda</a></li>
                        <li id=menu-item-794
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-794"><a
                                    href="{{ route('categories') }}">Kateqoriyalar</a></li>
                        <li id=menu-item-795
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-795"><a
                                    href="{{ route('audio') }}">Audio</a></li>
                        <li id=menu-item-795
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-795"><a
                                    href="{{ route('video') }}">Video</a></li>
                    </ul>
                </div>
            </li>
            <li id=nav_menu-2 class="widget widget_nav_menu">
                <h2 class="widgettitle">Kateqoriyalar</h2>
                <div class=menu-footer-menu-2-container>
                    <ul id=menu-footer-menu-2 class=menu>
                        @foreach($categorys as $category)
                        <li id=menu-item-797
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-797"><a
                                    href={{ route('category', ['cslug' => $category->slug]) }}>{{ $category->title }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </li>
            <li id="inhype-text-5" class="widget widget_inhype_text">
                <div class="inhype-textwidget-wrapper ">
                    <h2 class="widgettitle">Abunə</h2>
                    <div class=inhype-textwidget
                         data-style="background-color: rgba(255,255,255,0.1);padding: 30px;">
                        <p>Məqalələrdən Daha Tez Xəbərdar Olun</p>
                        <form class="mc4wp-form mc4wp-form-17" method="POST" action="{{ route('subscriber') }}">
                            @csrf
                            <div class=mc4wp-form-fields>
                                <div class=mailchimp-widget-signup-form>
                                    <input type=email name="email" placeholder="Please enter your e-mail" required>
                                    <button type=submit id="btn-submit" class=btn>Abunə Ol!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class=footer-wrapper>
    <footer class=footer-black>
        <div class=container>
            <div class=footer-bottom>
                <div class=footer-copyright>
                    <p>Powered by <a href="/"
                                     rel=noopener>Alex</a> - Ali Alashrafov for LawxBlog.com</p>
                </div>
                <div class=footer-social>
                    <div class="social-icons-wrapper social-icons-with-bg">
                        @if($settings != null)
                        <a href="{{ $settings->facebook }}" target=_blank class="a-facebook no-description"><i class="fa fa-facebook"></i></a>
                        <a href={{ $settings->twitter }} target=_blank class="a-twitter no-description"><i class="fa fa-twitter"></i></a>
                        <a href={{ $settings->google }} target=_blank class="a-google no-description"><i class="fa fa-google"></i></a>
                        <a href={{ $settings->youtube }} target=_blank class="a-youtube no-description"><i class="fa fa-youtube"></i></a>
                        @else
                            <a href=# target=_blank class="a-facebook no-description"><i class="fa fa-facebook"></i></a>
                            <a href=# target=_blank class="a-twitter no-description"><i class="fa fa-twitter"></i></a>
                            <a href=# target=_blank class="a-google no-description"><i class="fa fa-google"></i></a>
                            <a href=# target=_blank class="a-youtube no-description"><i class="fa fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>