
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $title ? "$title |" : '' }} Joshua Trend</title>
    <link rel="icon" type="image/png" href="{{ asset('/media/jt.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
<div class="grid">
    <x-nav :title="$title" />
    <article>
        {{ $slot }}
    </article>
    <footer class="footer">
        <p>
            <a href="/">Joshua Trend</a> | 2024
        </p>
    </footer>
</div>
</body>
</html>
