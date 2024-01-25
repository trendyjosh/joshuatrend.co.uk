<nav class="sidebar">
    <header class="sidebar-header">
        <a class="sidebar-title" href="/">Joshua Trend</a>
        <p class="sidebar-subtitle">PHP Developer</p>
    </header>
    <ul class="sidebar-pages">
        <li><a href="/" {{ !isset($title) || $title == 'About' ? "aria-current=page" : '' }}>About</a></li>
        <li><a href="/projects" {{ $title == 'Projects' ? "aria-current=page" : '' }}>Projects</a></li>
    </ul>
    <ul class="sidebar-socials">
        <li><a target="_blank" href="https://www.linkedin.com/in/joshua-trend/" >LinkedIn</a></li>
        <li><a target="_blank" href="https://github.com/trendyjosh" >GitHub</a></li>
    </ul>
</nav>