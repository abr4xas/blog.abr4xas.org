    <link rel="canonical" href="{{ route('posts.show', $post->slug) }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:url" content="{{ route('posts.show', $post->slug) }}">
    <meta property="og:description" content="{{ strip_tags($post->description) }}">
    <meta property="article:published_time" content="{{ $post->created_at->diffForHumans() }}">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ strip_tags($post->description) }}">
    <meta name="description" content="{{ strip_tags($post->description) }}">
    <meta name="twitter:image" content="{{ asset('/img/logo/logo.png') }}">
    <meta property="og:image" content="{{ asset('/img/logo/logo.png') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta itemprop="name" content="{{ $post->title }} || El blog de abr4xas">
    <meta itemprop="description" content="{{ str_limit(strip_tags($post->description), 150) }}">
    <meta itemprop="image" content="{{ asset('/img/logo/logo.png') }}">