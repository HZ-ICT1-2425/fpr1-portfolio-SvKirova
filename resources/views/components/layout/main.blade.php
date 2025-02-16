<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $description ?? 'This is my portfolio website' }}">
    <meta name="keywords" content="{{ $keywords ?? 'ICT, HZ, Portfolio'}}">
    <meta name="author" content="Svetlozara Kirova">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Silkscreen' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Tomorrow' rel='stylesheet'>
    <title>{{ $title ?? 'Portfolio' }}</title>

    {{-- Compiled assets --}}
    @vite(['resources/css/style.css', 'resources/css/' . $cssFile, 'resources/js/app.js'])
</head>
<body>

<header>
    <x-ui.navbar>
        <x-ui.aside>
            @foreach($asideItems as $index => $asideItem)
                <x-ui.aside-item :link="$asideItem['link']">
                    {{ $asideItem['title'] }}
                </x-ui.aside-item>

                {{-- Add separator after each aside item except the last one --}}
                @if($index < count($asideItems) - 1)
                    <x-ui.aside-separator></x-ui.aside-separator>
                @endif
            @endforeach
        </x-ui.aside>

        @foreach($navItems as $navItem)
            <x-ui.navbar-item :route="$navItem['route']">{{ $navItem['title'] }}</x-ui.navbar-item>
        @endforeach
    </x-ui.navbar>
</header>

<main>
    {{ $slot }}
</main>

<!-- Footer -->
<footer>
    <p>&copy; 2024 SvKirova
        <a href="https://github.com/SvKirova" target="_blank">GitHub</a> |
        <a href="mailto:kiro0003@hz.nl">Email</a> |
        <a href="https://hz.nl/" target="_blank">HZ</a>
    </p>
</footer>

</body>
</html>
