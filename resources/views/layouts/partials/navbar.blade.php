<div class=blog-post-reading-progress></div>
<div class=container>
    <div class=row>
        <div class=col-md-12>
            <div class=header-left>
                <div class=mainmenu-mobile-toggle><i class="fa fa-bars" aria-hidden=true></i></div>
                <div class=logo>
                    @if($settings)
                    <a class=logo-link href="/"><img src={{ asset('logo/'.$settings->logo) }} alt=Lawxblog class=regular-logo><img src={{ asset('logo/'.$settings->logo) }} alt=Lawxblog class=light-logo></a>
                    @endif
                </div>
            </div>
            <div class=header-center>
                <div class="mainmenu mainmenu-light mainmenu-left mainmenu-none mainmenu-regularfont mainmenu-downarrow clearfix"
                     role=navigation>
                    <div id=navbar class="navbar navbar-default clearfix mgt-mega-menu">
                        <div class=navbar-inner>
                            <div class=container>
                                <div class="navbar-toggle btn" data-toggle=collapse data-target=.collapse>

                                </div>
                                <div class=navbar-center-wrapper>
                                    <div class="navbar-collapse collapse">
                                        <ul id=menu-main-menu-2 class=nav>
                                            <li id=mgt-menu-item-765
                                                class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="/">Əsas Səhifə</a></li>
                                            <li id="mgt-menu-item-102"
                                                 class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children">
                                                <a href="{{ route('categories') }}">Kateqoriyalar</a>
                                                <ul class="sub-menu  megamenu-column-1 level-0">
                                                    @if(!$categorys->isEmpty())
                                                    @foreach($categorys as $category)
                                                    <li id="mgt-menu-item-486"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom">
                                                        <a href="{{ route('category', ['cslug' => $category->slug]) }}">{{ $category->title }}</a>
                                                    </li>
                                                    @endforeach
                                                    @else
                                                        <li id="mgt-menu-item-486"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom">
                                                            <a href="#">Kateqoriya yoxdur!</a>
                                                        </li>
                                                    @endif

                                                </ul>
                                            </li>
                                            <li id=mgt-menu-item-453 class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href={{ route('about') }}>Haqqımızda</a></li>
                                            <li id=mgt-menu-item-453 class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href={{ route('audio') }}>Audiolar</a></li>
                                            <li id=mgt-menu-item-453 class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href={{ route('video') }}>Videolar</a></li>
                                            <li id=mgt-menu-item-452 class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href={{ route('contact') }}>Əlaqə</a></li>
                                            <li id=mgt-menu-item-105 class="mgt-highlight alt pull-right menu-item menu-item-type-custom menu-item-object-custom">
                                                <a href="#inhype-text-5">Subscribe</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=header-right>
                <div class="search-toggle-wrapper search-header">
                    <a class=search-toggle-btn aria-label="Search toggle"><i class="fa fa-search"
                                                                             aria-hidden=true></i></a>
                    <div class=header-center-search-form>
                        <form method=get role=search id=searchform_p class=searchform>
                            <input type=search aria-label=Search class=field name=s value id=s_p
                                   placeholder="Type keyword(s) here&hellip;"><input type=submit class="submit btn"
                                                                                     id=searchsubmit_p value=Search>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
