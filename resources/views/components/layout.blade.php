<!DOCTYPE html>
<html lang="en">
<!-- 
                 vvvvvv
                / _  _ \
              (| (.)(.) |)
 __________.000o___()___o000._________
|      ___        _                   |
|     |_  |___ __| |_ _  _ __ _       |
|     __| / _ \_-< ' \ || / _` |      |
|     \__,\___/__/_||_\_,_\__,_|      |
|      |_   _| _ ___ _ _  __| |       |
|        | || '_/ -_) ' \/ _` |       |
|        |_||_| \___|_||_\__,_|       |
|   .ooo0                     0ooo.   |
|___(   )_____________________(   )___|
     \ ( /                   \ ) /
      \_)                     (_/

Website built by Joshua Trend (contact@joshuatrend.co.uk), design inspired by Sebastian De Deyne (https://sebastiandedeyne.com/) and Carl Barenbrug (https://carlbarenbrug.com/).
View the source code here: https://github.com/trendyjosh/joshuatrend.co.uk
 -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="Passionate software engineer from the south east of England. I have 8 years experience developing applications in PHP, I am currently focussing on Laravel & VueJS.">
    <title>{{ $title ? "$title | " : '' }}Joshua Trend</title>
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
                <a href="{{ route('index') }}">Joshua Trend</a> | 2025
            </p>
        </footer>
    </div>
</body>

</html>
