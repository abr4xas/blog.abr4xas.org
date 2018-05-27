<article>
    <div class="articles-header">
        <time datetime="{{ $post->created_at->toDateString() }}">
            {{ $post->created_at->diffForHumans() }}
        </time>
        <span class="articles-header-category">
            <a title="Ver más post sobre {{ $post->category->name }}" href="{{ route('category.show', $post->category->name) }}" class="grey">
                {{ $post->category->name }}
            </a>
        </span>
    </div>
    <div class="articles-content">
        <h1>
            <a title="{{ $post->title }}" href="{{ route('posts.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </h1>
        {!! $post->title !!}
    </div>
    <div class="articles-footer">
        {{-- <ul class="articles-footer-info">
            <li>
                <a title="" href="#" class="light-link">
                    <i class="pe-7s-comment"></i> 7 Response</a>
            </li>
            <li>
                <a title="" href="#" class="light-link">
                    <i class="pe-7s-like"></i> 1221</a>
            </li>
        </ul> --}}
        <a title="Leer más sobre {{ $post->title }}" class="btn" href="{{ route('posts.show', $post->slug) }}">Read more</a>
    </div>
</article>
