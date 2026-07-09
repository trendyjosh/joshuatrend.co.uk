<x-layout title="{{ $title }}">
    <header>
        <h1>{{ $title }}</h1>
        <span>{{ $tags }}
    </header>

    <article>
        {!! $content !!}

        @if ($image)
            <figure>
                <picture>
                    <source srcset="{{ asset('/media/' . $image . '.webp') }}" type="image/webp">
                    <img src="{{ asset('/media/' . $image . '.jpg') }}" alt="{{ $title }}" width="607"
                        height="361" fetchpriority="high">
                </picture>
                <figcaption>{{ $caption }}</figcaption>
            </figure>
        @endif

        <nav aria-label="Project navigation" class="project-pagination">
            @foreach (Statamic::tag('collection:previous')->params([
            'collection' => 'projects',
            'current' => $id,
            'limit' => 1,
        ])->fetch() as $prev)
                <a href="{{ $prev['url'] }}" rel="prev">← {{ $prev['title'] }}</a>
            @endforeach

            @foreach (Statamic::tag('collection:next')->params([
            'collection' => 'projects',
            'current' => $id,
            'limit' => 1,
        ])->fetch() as $next)
                <a href="{{ $next['url'] }}" rel="next">{{ $next['title'] }} →</a>
            @endforeach
        </nav>
    </article>
</x-layout>
