@extends('layouts.front')

@push('title')
Publicaciones en la categoria {{ $categoryName }}
@endpush
@push('meta')
    @include('front.partials.meta.meta')
@endpush
@section('content')

<main id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                @if (count($posts) > 0)
                <section class="articles">
                    @foreach ($posts as $post)
                        @include('front.partials.front_post.front_post')
                    @endforeach
                </section>
                <br>
                {{ $posts->links() }}
                @else
                    <h2>Aun no hay contenido...</h2>
                    <img src="{{ asset('/img/nope/ntdh.gif') }}" class="img-fluid" alt="Nothing Todo Here">
                @endif
            </div>
            <div class="aside-blocks col-lg-4 col-xs-12">
                {{-- @include('front.partials.author.author')  --}}
                @include('front.partials.categories.categories')
                @include('front.partials.advertisement.advertisement')
                {{-- @include('front.partials.last-project.last-project')  --}}
                {{-- @include('front.partials.tags.tags') --}}
            </div>
        </div>
    </div>
</main>
@endsection
