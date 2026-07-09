<x-layout title="{{ $title }}">
    <header>
        <h1>{{ $title }}</h1>

        {!! $content !!}
    </header>

    <hr>

    @foreach (Statamic\Facades\Entry::query()->where('collection', 'experience')->get() as $experience)
        <article>
            <h2>
                {{ $experience->get('company') }}
            </h2>
            <span class="job-date">{{ $experience->get('years') }}</span>

            <h3>{{ $experience->get('role') }}</h3>

            <p>{{ $experience->get('summary') }}</p>

            <ul>
                @foreach ($experience->get('tasks') as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>

            <span class="job-tags">
                {{ implode(', ', $experience->get('skills')) }}
            </span>
        </article>

        @if (!$loop->last)
            <hr>
        @endif
    @endforeach
</x-layout>
