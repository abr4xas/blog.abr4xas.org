<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@stack('title')</title>
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="dns-prefetch" href="{{ route('main') }}" />
    <link rel="dns-prefetch" href="//www.gstatic.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="publisher" href="https://plus.google.com/+elblogdeabr4xas">
    <link rel="apple-touch-startup-image" href="{{ asset('/img/logo/logo.png') }}">
    <link rel="socialmedia" type="text/plain" href="{{ asset('/socialmedia.txt') }}">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="pragma" content="cache">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="vary" content="content-language">
    <meta http-equiv="Cache-control" content="max-age=2592000, public">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Blog sobre noticias, tecnología, música, gnu/linux, anime, actualidad, intercambio y directorio de información de servicios profesionales en tecnología.">
    <meta name="google-site-verification" content="858AWu06X8qc7TbbcoxGVUySmw5YVEvau_yPyr3_QKI" />
    <meta name="keywords" content="linux, programación, tecnología,gnu/linux, android">
    <meta name="author" content="Angel Cruz <me@abr4xas.org>">
    <meta name="no-email-collection" content="http://www.unspam.com/noemailcollection/">
    <meta name="medium" content="mult">
    <meta name="adblock" content="disable">
    <meta name="rating" content="General">
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="1 days">
    <meta name="revisit" content="1">
    <meta name="robots" content="index,follow">
    <meta name="google" content="notranslate">
    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta name="twitter:creator" content="@abr4xas">
    <link rel="alternate" hreflang="{{ app()->getLocale() }}" href="{{ route('main') }}" /> @stack('meta')
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="El Blog de Abr4xas" />
    <meta name="msapplication-starturl" content="{{ route('main') }}" />
    <meta name="msapplication-tooltip" content="# nano /var/log/life.log" />
    <meta name="msapplication-window" content="width=1024;height=768" />
    <meta name="msapplication-task" content="name=El Blog de Abr4xas;action-uri={{ route('main') }};icon-uri={{ asset('/icons/favicon.ico') }}"
    />
    <meta name="msapplication-TileColor" content="#1F1F21" />
    <meta name="application-name" content="El Blog de Abr4xas">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320" />
    <meta name="theme-color" content="#16a085">
    <meta name="msapplication-TileImage" content="{{ asset('/icons/ms-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <link rel="alternate" type="application/rss+xml" title="RSS Feed" href="https://feeds.feedburner.com/ElBlogDeAbr4xas" />
    {{-- <link rel="alternate" title="El Blog de Abr4xas News Feed" type="application/json" href="{{ route('json.feed') }}" /> --}}
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/social-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
</head>

@stack('body')
<header class="navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-top">
                    <div class="header-top-logo">
                        <a href="/">
                            <img src="{{ asset('/icons/android-icon-36x36.png') }}" alt="abr4xas.org Logo" data-rjs="2">
                        </a>
                    </div>
                    {{--
                    <div class="header-top-text">
                        <p>
                            <span class="font-italic">"Modern Javascript"</span>
                            book is available!
                            <a href="shop.html" title="Modern Javascript Book">Check out
                                <i class="pe-7s-angle-right"></i>
                            </a>
                        </p>
                    </div> --}}
                    <nav class="header-top-nav">
                        <ul>
                            <li>
                                <a href="#0" class="light-link" title="Menu">
                                    <div id="menu-animate-icon" class="header-top-nav-menu-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-12">
                <nav class="header-nav">
                    <ul>
                        <li class="active">
                            <a href="/" title="Start page">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#0" class="dropdown-toggle" title="Blog articles">Blog articles</a>
                            <ul class="dropdown-menu">

                                @foreach ($categories as $item) @if ($loop->iteration == 1)
                                <li class="nav-elipse-blue">
                                    @endif @if ($loop->iteration == 2)
                                    <li class="nav-elipse-red">
                                        @endif @if ($loop->iteration == 3)
                                        <li class="nav-elipse-yellow">
                                            @endif @if ($loop->iteration == 4)
                                            <li class="nav-elipse-green">
                                                @endif @if ($loop->iteration == 5)
                                                <li>
                                                    @endif
                                                    <a href="{{ route('category.show', $item->slug) }}" title="Cosas que se sobre {{ $item->name }}">
                                                        {{ $item->name }}
                                                    </a>
                                                </li>
                                                @endforeach
                            </ul>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" title="Sobre el Blog">Sobre el Blog</a>
                            </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<nav class="mobile-nav header-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Auto Copy Header Navigation -->
            </div>
        </div>
    </div>
</nav>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <ul class="pull-righ">
                        <li>
                            <a href="#0" title="Twitter">
                                <i class="icon-social_twitter_circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" title="Github">
                                <i class="icon-social_github_circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" title="LinkedIn">
                                <i class="icon-social_linkedin_circle"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="font-primary pull-left">&copy; Theme by
                        <a href="#0" title="" class="black">Komon.ski</a> . All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/retina.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/webfont.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
</body>

</html>
