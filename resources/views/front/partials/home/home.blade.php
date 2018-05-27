@extends('layouts.front') 
@push('title')
Home
@endpush
@push('body')
<body>
@endpush
@section('content') 
@if ($current == 'main')
    @include('front.partials.banner_post.banner_post')
@endif
<main id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <section class="articles">
                    @foreach ($posts as $post)
                        @include('front.partials.front_post.front_post')
                    @endforeach
                </section>
                <br>
                {{ $posts->links() }}
            </div>
            <div class="aside-blocks col-lg-4 col-xs-12">
                {{-- @include('front.partials.author.author')  --}}
                @include('front.partials.categories.categories') 
                @include('front.partials.advertisement.advertisement')
                @include('front.partials.last-project.last-project') 
                {{-- @include('front.partials.tags.tags') --}}
            </div>
        </div>
    </div>
</main>
@endsection
