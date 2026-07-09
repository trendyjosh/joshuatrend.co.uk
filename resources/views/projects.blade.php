<x-layout title="{{ $title }}">
    <header>
        <h1>{{ $title }}</h1>
    </header>

    {!! $content !!}

    <hr>

    @foreach (Statamic\Facades\Entry::query()->where('collection', 'projects')->get() as $project)
        <h2 class="project-title">
            <a target="_blank" href="{{ $project->get('link') }}">{{ $project->get('title') }}</a>
        </h2>
        <span class="project-tags">{{ $project->get('tags') }}</span>

        <p>{{ $project->get('summary') }}</p>

        @if ($image = $project->get('image'))
            <figure>
                <picture>
                    <source srcset="{{ asset('/media/' . $image . '.webp') }}" type="image/webp">
                    <img src="{{ asset('/media/' . $image . '.jpg') }}" alt="{{ $project->get('title') }}" width="607"
                        height="361" fetchpriority="high">
                </picture>
                <figcaption>{{ $project->get('caption') }}</figcaption>
            </figure>
        @endif

        @if (!$loop->last)
            <hr>
        @endif
    @endforeach
</x-layout>
