<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<header class="site-navbar site-navbar-target fixed-top" role="banner" style="background-color: #fbf4e1">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-4">
                <nav class="site-navigation text-left ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="{{ route('testalconstruct') }}" class="nav-link">Home</a></li>
                        <li class="{{ request()->segment(1) == 'service' ? 'active' : '' }}"><a href="{{ url('service') }}" class="nav-link">Leistungen</a></li>
                        <li class="{{ request()->segment(1) == 'intelliplan' ? 'active' : '' }}"><a href="{{ url('intelliplan') }}" class="nav-link">Intelligentes Planen</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-center">
                <div class="site-logo">
                    <a href="{{ route('testalconstruct') }}"><img src="https://testal.info/wp-content/themes/wp-bootstrap-starter/img/logolang.png" alt="" width="200" height="60"></a>
                    <h6 style="color: #4f3c35">Bauleistungen mit Leidenschaft</h6>
                </div>
                <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-primary"></span></a></div>
            </div>
            <div class="col-lg-4">
                <nav class="site-navigation text-left mr-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}" class="nav-link">Über uns</a></li>
                        <li class="{{ request()->segment(1) == 'reference' ? 'active' : '' }}"><a href="{{ url('reference') }}" class="nav-link">Referenzen</a></li>
                        <li class="{{ request()->segment(1) == 'contact' ? 'active' : '' }}"><a href="{{ url('contact') }}" class="nav-link">Kontakt</a></li>
                        <li class="{{ request()->segment(1) == 'galerie' ? 'active' : '' }}"><a href="{{ url('galerie') }}" class="nav-link">Galerie</a></li>
                        {{--<li><a href="contact.html" class="nav-link">PL</a></li>--}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
