<article>
    <div class="card articles-content">
        <div class="articles-header">
            <time datetime="{{ $post->created_at->toDateString() }}">
                {{ $post->created_at->diffForHumans() }}
            </time>
            <span class="articles-header-category">
                <a title="Ver más post sobre {{ $post->category->name }}" href="{{ route('category.show', $post->category->name) }}" class="grey text-uppercase">
                    {{ $post->category->name }}
                </a>
            </span>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                <a title="{{ $post->title }}" href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h4>
            <p class="card-text">
                {!! $post->description !!}
            </p>
            <div class="articles-footer">
                <a title="Leer más sobre {{ $post->title }}" class="btn btn-primary" href="{{ route('posts.show', $post->slug) }}">Read more</a>
            </div>
        </div>
    </div>
</article>
