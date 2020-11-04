<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Lysservices @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="{{ asset('content/garden2/images/favicon.ico') }}">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lora:100,300,400,400italic,500,700,700italic'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:100,300,400,400italic,500,700,700italic'>
        <link rel='stylesheet' href='{{ asset('css/global.css') }}'>
        <link rel='stylesheet' href='{{ asset('content/garden2/css/structure.css') }}'>
        <link rel='stylesheet' href='{{ asset('content/garden2/css/garden2.css') }}'>
        <link rel='stylesheet' href='{{ asset('content/garden2/css/custom.css') }}'>
        @yield('style')
    </head>
    <body class="home color-custom style-default button-default layout-full-width if-zoom no-content-padding no-shadows header-classic header-fw minimalist-header sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right logo-no-margin logo-overflow logo-no-sticky-padding mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-1785">
        <div id="Wrapper">
            <div id="Header_wrapper">
                <header id="Header">
                    <div class="header_placeholder"></div>
                    <div id="Top_bar">
                        <div class="container">
                            <div class="column one">
                                <div class="top_bar_left clearfix">
                                    <div class="logo">
                                        <a id="logo" href="{{ route('welcome.index') }}" title="Lysserves - ACCUEIL" data-height="70" data-padding="0">
                                            <img class="logo-main scale-with-grid" src="{{ asset('content/garden2/images/garden2.png') }}" data-retina="{{ asset('content/garden2/images/retina-garden2.png') }}" data-height="80" alt="lysservices">
                                            <img class="logo-sticky scale-with-grid" src="{{ asset('content/garden2/images/garden2.png') }}" data-retina="{{ asset('content/garden2/images/retina-garden2.png') }}" data-height="80" alt="lysservices">
                                            <img class="logo-mobile scale-with-grid" src="{{ asset('content/garden2/images/garden2.png') }}" data-retina="{{ asset('content/garden2/images/retina-garden2.png') }}" data-height="80" alt="lysservices">
                                            <img class="logo-mobile-sticky scale-with-grid" src="{{ asset('content/garden2/images/garden2.png') }}" data-retina="{{ asset('content/garden2/images/retina-garden2.png') }}" data-height="80" alt="lysservices">
                                        </a>
                                    </div>
                                    <div class="menu_wrapper">
                                        <nav id="menu" class="menu-main-menu-container">
                                            <ul id="menu-main-menu" class="menu">
                                                <li class="@if(request()->routeIs('welcome.index')) current-menu-item @endif">
                                                    <a href="{{ route('welcome.index') }}"><span>ACCUEIL</span></a>
                                                </li>
                                                <li class="@if(request()->routeIs('welcome.about')) current-menu-item @endif">
                                                    <a href="{{ route('welcome.about') }}"><span>A PROPOS</span></a>
                                                </li>
                                                <li class="@if(request()->routeIs('welcome.services')) current-menu-item @endif">
                                                    <a href="{{ route('welcome.services') }}"><span>SERVICES</span></a>
                                                </li>
                                                <li class="@if(request()->routeIs('welcome.processus')) current-menu-item @endif">
                                                    <a href="{{ route('welcome.processus') }}"><span>PROCESSUS</span></a>
                                                </li>
                                                <li class="@if(request()->routeIs('welcome.contact')) current-menu-item @endif">
                                                    <a href="{{ route('welcome.contact') }}"><span>NOUS CONTACTER</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('header-content')
                </header>
                @yield('after-header')
            </div>

            @yield('content')

            <footer id="Footer" class="clearfix">
                <div class="widgets_wrapper" style="padding:70px 0">
                    <div class="container">
                        <div class="column one-third">
                            <aside class="widget widget_text">
                                <div class="textwidget">
                                    <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{ asset('content/garden2/images/home_garden2_footer_logo.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="column one-third">
                            <aside class="widget widget_text">
                                <h4>NOUS CONTACTER</h4>
                                <div class="textwidget">
                                    <p class="big">
                                        Avant tout, nous sommes Lysserves. Et c'est pourquoi nous sommes si passionnés de vous aider
                                    </p>
                                    <p class="big themecolor">
                                        Téléphone: +221 78 470 61 33
                                    </p>
                                    <p class="big themecolor">
                                        E-mail: contact@lysservices.tech
                                    </p>
                                </div>
                            </aside>
                        </div>
                        <div class="column one-third">
                            <aside class="widget widget_text">
                                <h4>ADRESSE</h4>
                                <div class="textwidget">
                                    <p>
                                        Dakar, Liberte 6 extension, Sénégal
                                    </p><a href="#">FAQ</a> &nbsp;&nbsp;&nbsp; <a href="{{ route('welcome.about') }}">Envoie-nous un message</a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="column one">
                            <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                            <div class="copyright">
                                &copy; {{ date('Y') }} Lysserves - Build by <a target="_blank" rel="nofollow" href="#">Bsikunu - agency</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    <div id="Side_slide" class="right dark">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

    @yield('scripts')
    </body>
</html>
