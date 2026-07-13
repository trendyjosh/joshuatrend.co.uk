<nav class="sidebar">
    <header class="sidebar-header">
        <a class="sidebar-title" href="{{ Statamic::tag('link')->id('2c127fab-1131-40c6-bea8-b23d5bd6f923') }}">Joshua
            Trend</a>
        <p class="sidebar-subtitle">PHP Developer</p>
    </header>
    <ul class="sidebar-pages">
        @foreach (Statamic::tag('nav:pages')->fetch() as $link)
            <li>
                <a href="{{ $link['url'] }}"
                    {{ !isset($title) || $title == $link['title'] ? 'aria-current=page' : '' }}>
                    {{ $link['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
    <ul class="sidebar-socials">
        @foreach (Statamic::tag('nav:socials')->fetch() as $link)
            <li>
                <a target="_blank" href="{{ $link['url'] }}">
                    {{ $link['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
