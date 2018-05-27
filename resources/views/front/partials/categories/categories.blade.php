<aside class="categories">
    <h2 class="aside-title">Categories</h2>
    <ul>

        @foreach ($categories as $item)

        @if ($loop->iteration == 1)
        <li class="nav-elipse-blue">
        @endif
        @if ($loop->iteration == 2)
        <li class="nav-elipse-red">
        @endif
        @if ($loop->iteration == 3)
        <li class="nav-elipse-yellow">
        @endif
        @if ($loop->iteration == 4)
        <li class="nav-elipse-green">
        @endif
        @if ($loop->iteration == 5)
        <li>
        @endif
            <a href="{{ route('category.show', $item->slug) }}" title="Cosas que se sobre {{ $item->name }}">
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>
</aside>
