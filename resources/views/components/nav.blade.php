<nav class="sidebar">
    <header class="sidebar-header">
        <a class="sidebar-title" href="{{ route('index') }}">Joshua Trend</a>
        <p class="sidebar-subtitle">PHP Developer</p>
    </header>
    <ul class="sidebar-pages">
        <li><a href="{{ route('index') }}" {{ !isset($title) || $title == 'About' ? "aria-current=page" : '' }}>About</a></li>
        <li><a href="{{ route('experience') }}" {{ $title == 'Experience' ? "aria-current=page" : '' }}>Experience</a></li>
        <li><a href="{{ route('projects') }}" {{ $title == 'Projects' ? "aria-current=page" : '' }}>Projects</a></li>
    </ul>
    <ul class="sidebar-socials">
        <li><a target="_blank" href="https://www.linkedin.com/in/joshua-trend/">LinkedIn</a></li>
        <li><a target="_blank" href="https://github.com/trendyjosh">GitHub</a></li>
    </ul>
</nav>