@extends('layouts.amp')
@push('title')
{{ $post->title }}
@endpush
@push('meta')
    @include('front.partials.meta.meta-article')
    <link rel="canonical" href="{{ route('posts.show', $post->slug) }}">
@endpush
@section('content')
<article class="recipe-article">
    <header>
        <span class="ampstart-subtitle block px3 pt2 mb2">{{ $post->category->name }}</span>
        <h1 class="mb1 px3">
            {{ $post->title }}
        </h1>
        <address class="ampstart-byline clearfix mb4 px3 h5">
            <time class="ampstart-byline-pubdate block bold my1" datetime="{{$post->datetime}}">
                {{ $post->custom_date }}
            </time>
        </address>
        <amp-img src="{{$post->image}}" width="710" height="210" layout="responsive" alt="" class="mb4 mx3"></amp-img>
    </header>
    <p class="mb4 px3">
        {{ $post->content }}
    </p>
</article>
@endsection
