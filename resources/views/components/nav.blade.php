<nav class="sidebar">
    <header class="sidebar-header">
        <a class="sidebar-title" href="{{ Statamic::tag('link')->id('2c127fab-1131-40c6-bea8-b23d5bd6f923') }}">Joshua
            Trend</a>
        <p class="sidebar-subtitle">PHP Developer</p>
    </header>
    <ul class="sidebar-pages">
        <li>
            <a href="{{ Statamic::tag('link')->id('2c127fab-1131-40c6-bea8-b23d5bd6f923') }}"
                {{ !isset($title) || $title == 'About' ? 'aria-current=page' : '' }}>
                About
            </a>
        </li>
        <li>
            <a href="{{ Statamic::tag('link')->id('4c68a6b1-37bd-4a40-9101-4baecd802e30') }}"
                {{ $title == 'Projects' ? 'aria-current=page' : '' }}>
                Projects
            </a>
        </li>
        <li>
            <a href="{{ Statamic::tag('link')->id('5dcef07c-018c-4b83-a3dd-1a0d9942b6db') }}"
                {{ $title == 'Experience' ? 'aria-current=page' : '' }}>
                Experience
            </a>
        </li>
    </ul>
    <ul class="sidebar-socials">
        <li><a target="_blank" href="https://www.linkedin.com/in/joshuatrend">LinkedIn</a></li>
        <li><a target="_blank" href="https://github.com/trendyjosh">GitHub</a></li>
    </ul>
</nav>
