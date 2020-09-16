<!DOCTYPE html>
<html lang=en-US>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Rafiqa Malikova</title>
    @include('layouts.partials.head')
    @yield('head')
</head>
@yield('body')
<header class="main-header clearfix header-layout-menu-in-header sticky-header mainmenu-light">
    @include('layouts.partials.navbar')
</header>
@yield('content')
@include('layouts.partials.footer')
<a class="scroll-to-top btn" aria-label="Scroll to top" href=#top></a>
@include('layouts.partials.footer-file')
@yield('footer')
</body>

</html>


