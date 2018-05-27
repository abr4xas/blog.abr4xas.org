@extends('layouts.front')

@push('title')
{{ $post->title }}
@endpush
@push('meta')
    @include('front.partials.meta.meta-article')
@endpush
@push('body')
<body class="body-blog-post">
@endpush 
@section('content')
    <main id="app">
        <section class="articles articles-blog-post">
            <article class="articles-blog-post">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <div class="articles-header">
                                <time datetime="{{ $post->created_at->toDateString() }}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                                {{-- <span class="articles-header-tag-green">New</span> --}}
                                <span class="articles-header-category">
                                    <a title="Ver más post sobre {{ $post->category->name }}" href="{{ route('category.show', $post->category->name) }}" class="grey">
                                        {{ $post->category->name }}
                                    </a>
                                </span>
                            </div>
                            <div class="articles-content">
                                <h1 class="articles-content-blog-post-title">
                                    <a href="#0" title="{{ $post->title }}">{{ $post->title }}</a>
                                </h1>

                                <div class="articles-content-block">
                                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid">
                                    <br> @markdown($post->content)
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-2 col-xs-12">
                            <div class="articles-blog-post-share">
                                <h3>Share this</h3>
                                <div>
                                    <ul>
                                        <li>
                                            <a href="#" title="Facebook">
                                                <i class="fa fa-facebook"></i>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" title="Twitter">
                                                <i class="fa fa-twitter"></i>Twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" title="Google+">
                                                <i class="fa fa-google-plus"></i>Google+</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </article>
        </section>
        <div class="articles-info">
            <section class="articles-info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xs-12">
                            {{-- <div class="articles-footer">
                                <ul class="articles-footer-info">
                                    <li>
                                        <a title="" href="#" class="light-link">
                                            <i class="pe-7s-comment"></i> 7 Response</a>
                                    </li>
                                    <li>
                                        <a title="" href="#" class="light-link">
                                            <i class="pe-7s-like"></i> 1221</a>
                                    </li>
                                </ul>
                                <button class="btn btn-light-blue">
                                    <a title="Write a response" href="#">Write a response</a>
                                </button>
                            </div> --}}

                            <div class="articles-author">
                                <img src="img/profile-picture.png" alt="" data-rjs="2">
                                <div class="articles-author-right">
                                    <h4>{{ $post->user->name }}</h4>
                                    {{-- <div class="social">
                                        <a href="" title="Twitter">
                                            <i class="icon-social_twitter_circle"></i>
                                        </a>
                                        <a href="" title="Github">
                                            <i class="icon-social_github_circle"></i>
                                        </a>
                                        <a href="" title="LinkedIn">
                                            <i class="icon-social_linkedin_circle"></i>
                                        </a>
                                    </div> --}}
                                    <p>Compassionate entrepreneur on a mission to end homelessness. #jshomes Javascript, tech education, electronic music, photography, film, viral apps.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ARTICLE BOTTOM INFO LAST ARTICLES -->
            {{-- <section class="articles-info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="articles-info-section-title">Last Reads</h1>
                        </div>
                    </div>
                </div>
                <div class="banners">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="banner-wrapper">
                                    <a href="#" title="Angular 2 versus React: There Will Be Blood">
                                        <div class="banner-wrapper-content">
                                            <h1 class="h2">Building an CSS Framework</h1>
                                            <span class="category-tag">CSS</span>
                                            <time datetime="2016-03-01" class="">March 24, 2016</time>
                                        </div>
                                    </a>
                                    <img class="img-fluid" src="{{ asset('/img/cat/laravel.jpg') }}" alt="Laravel Logo" data-rjs="2">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="banner-wrapper">
                                    <a href="#" title="Angular 2 versus React: There Will Be Blood">
                                        <div class="banner-wrapper-content">
                                            <h1 class="h2">Building an CSS Framework</h1>
                                            <span class="category-tag">CSS</span>
                                            <time datetime="2016-03-01" class="">March 24, 2016</time>
                                        </div>
                                    </a>
                                    <img class="img-fluid" src="{{ asset('/img/cat/laravel.jpg') }}" alt="Laravel Logo" data-rjs="2">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section> --}}

            <!-- ARTICLE BOTTOM INFO COMMENTS -->
            <section class="articles-info-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="comments">
                                <div id="disqus_thread"></div>
                                <noscript>
                                    Please enable JavaScript to view the
                                    <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

@push('scripts')
<script>
	var disqus_config = function () {
		this.page.url = "{{ route('posts.show', $post->slug) }}";  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = "{{ $post->slug }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};

	(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://elblogdeabr4xas.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
	})();
</script>
@endpush