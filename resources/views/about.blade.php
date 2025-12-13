<x-layout title="About">
    <header>
        <h1>About</h1>
    </header>
    <p>I'm a passionate software engineer from the south east of England. I have 8+ years experience developing applications in PHP, I am currently focussing on Laravel & VueJS. I work for <a target="_blank" href="https://www.vital-parts.co.uk/">Vital Parts Ltd</a>, a plastic and rubber components manufacturer and distributor.</p>
    <p>In my spare time I enjoy camping, hiking, playing football and drinking beer.</p>
    <figure>
        <picture>
            <source srcset="{{ asset('/media/joshua-trend.webp') }}" type="image/webp">
            <img src="{{ asset('/media/joshua-trend.jpg') }}" alt="Joshua Trend" 
                width="607" height="361" fetchpriority="high">
        </picture>
    </figure>
    <p>Website design inspired by <a target="_blank" href="https://sebastiandedeyne.com/">Sebastian De Deyne</a> and <a target="_blank" href="https://carlbarenbrug.com/">Carl Barenbrug</a>.</p>
</x-layout>