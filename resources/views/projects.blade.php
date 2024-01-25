<x-layout title="Projects">
    <header>
        <h1>Projects</h1>
    </header>
    <p>A selection of past and current personal projects I have worked on in my spare time.</p>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://github.com/trendyjosh/invoice-management-system">Invoice System</a></h2>
    <span class="project-tags">#Laravel, #TailwindCSS, #VueJS, #TypeScript</span>
    <p>A very simple CMS for the purpose of generating invoices for customers.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <img src="{{ asset('/storage/invoice-system.jpg') }}" alt="Invoice System Invoices Page">
        <figcaption>The invoice management page</figcaption>
    </figure>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://camerontrenddesign.co.uk/">Garden Design Portfolio</a></h2>
    <span class="project-tags">#PHP, #CSS</span>
    <p>A Garden Design portfolio website to showcase completed designs. Developed with vanilla CSS and JavaScript with minimal PHP for the dynamic content. The site also makes use of the Instagram API to display the most recent posts.</p>
    <figure>
        <img src="{{ asset('/storage/cameron-trend-design.jpg') }}" alt="Cameron Trend Design Landing Page">
        <figcaption>The website landing page</figcaption>
    </figure>
    <p>Future development will include a backend CMS to add and update the list of portfolio gardens. This will also include a basic page builder to position the image and text content on each project page.</p>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://github.com/trendyjosh/joshtea-bot">Discord Music Player</a></h2>
    <span class="project-tags">#NodeJS, #TypeScript</span>
    <p>A Discord bot to queue and play music in a voice channel. Written in TypeScript and built with the <a href="https://www.sapphirejs.dev/">Sapphire</a> Discord.js framework.</p>
</x-layout>
