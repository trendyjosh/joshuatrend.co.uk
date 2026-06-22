<x-layout title="Projects">
    <header>
        <h1>Projects</h1>
    </header>
    <p>A selection of past and current personal projects I have worked on in my spare time.</p>

    <hr>

    <h2 class="project-title"><a target="_blank" href="https://movieclash.co.uk/">Movie Clash</a></h2>
    <span class="project-tags">#Laravel, #TailwindCSS, #VueJS</span>
    <p>A game where the objective is to create the longest chain of related movies and their actors that can be guessed. Answer verification provided by the <a href="https://www.themoviedb.org/">TMDB</a> API.</p>
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
    <p>A very simple CMS for the purpose of generating invoices for customers.</p>
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
    <p>An app to show users their nearest pub, wherever they are in the UK.</p>
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
    <p>A Garden Design portfolio website and basic CMS for a Garden Designer in Kent to showcase completed projects. Developed with vanilla CSS and JavaScript for the front-end site, then Tailwind and VueJS for the admin panel. The site also makes use of the Instagram API to display the most recent posts.</p>
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