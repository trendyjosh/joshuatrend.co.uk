
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>{{ $title ? "$title |" : '' }} Joshua Trend</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
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
