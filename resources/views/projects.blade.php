<x-layout title="Projects">
    <header>
        <h1>Projects</h1>
    </header>
    <p>A selection of past and current personal projects I have worked on in my spare time.</p>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://movieclash.co.uk/">Movie Clash</a></h2>
    <span class="project-tags">#Laravel, #TailwindCSS, #VueJS</span>
    <p>Designed and developed a movie trivia game where players create the longest possible chain of related films and actors. Built the game logic, integrated with the <a href="https://www.themoviedb.org/">TMDB</a> API for answer validation, and implemented a responsive user interface.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/movie-clash.webp') }}" type="image/webp">
            <img src="{{ asset('/media/movie-clash.jpg') }}" alt="Movie Clash game page" 
                width="607" height="334" fetchpriority="high">
        </picture>
        <figcaption>A solo game being played</figcaption>
    </figure>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://github.com/trendyjosh/invoice-management-system">Invoice System</a></h2>
    <span class="project-tags">#Laravel, #TailwindCSS, #VueJS, #TypeScript</span>
    <p>Designed and developed a lightweight invoicing CMS, enabling customer management and invoice generation. Built the full-stack application, including the data model, administrative interface, and invoice creation workflow.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/invoice-system.webp') }}" type="image/webp">
            <img src="{{ asset('/media/invoice-system.jpg') }}" alt="Invoice System Invoices Page" 
                width="607" height="312" fetchpriority="high">
        </picture>
        <figcaption>The invoice management page</figcaption>
    </figure>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://easybooktraining.co.uk">Easybook Training</a></h2>
    <span class="project-tags">#Laravel, #TailwindCSS, #VueJS, #TypeScript</span>
    <p>Led a team of four developers on an 18-month project to replace a large legacy Perl system with a modern, redesigned web application and administration platform. Took ownership of the architecture and full-stack development, helping shape requirements, guiding technical decisions, and delivering key features from the ground up. Also managed the handover to an external engineering team for ongoing maintenance ahead of production launch.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/easybooktraining.webp') }}" type="image/webp">
            <img src="{{ asset('/media/easybooktraining.jpg') }}" alt="Easybook Training Landing Page" 
                width="607" height="330" fetchpriority="high">
        </picture>
        <figcaption>Easybook Training landing page</figcaption>
    </figure>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://beercompass.co.uk/">Beer Compass</a></h2>
    <span class="project-tags">#Laravel, #Blade, #TailwindCSS</span>
    <p>Designed and developed a location-based web application that helps users discover their nearest pub anywhere in the UK. Implemented geospatial data processing and location search functionality, alongside a responsive front-end experience.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/beercompass.webp') }}" type="image/webp">
            <img src="{{ asset('/media/beercompass.jpg') }}" alt="Beer Compass App" 
                width="607" height="341" fetchpriority="high">
        </picture>
        <figcaption>The app pointing to the nearest pub</figcaption>
    </figure>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://camerontrenddesign.co.uk/">Garden Design Portfolio</a></h2>
    <span class="project-tags">#Laravel, #Blade, #TailwindCSS, #VueJS</span>
    <p>Designed and developed a portfolio website and bespoke CMS for a garden designer to showcase completed projects and manage website content. Built the public-facing site using vanilla JavaScript and CSS, developed an administrative interface using Tailwind CSS and Vue.js, and integrated the Instagram API to automatically display recent social media posts.</p>
    <p>Deployed using Laravel Forge.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/cameron-trend-design.webp') }}" type="image/webp">
            <img src="{{ asset('/media/cameron-trend-design.jpg') }}" alt="Cameron Trend Design Landing Page" 
                width="607" height="316" fetchpriority="high">
        </picture>
        <figcaption>The website landing page</figcaption>
    </figure>
    <p>Future development will include traffic metrics provided by the Cloudflare Graph API.</p>
</x-layout>