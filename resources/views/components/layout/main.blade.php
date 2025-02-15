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
    <nav>
        <ul>
            <!-- Aside menu -->
            <div id="asideMenu" class="asideMenu">
                <!-- "void(0)" prevents the link from navigating to another page -->
                <a href="javascript:void(0)" class="closeButton" onclick="closeMenu()">&times;</a>
                <aside>
                    <a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#111-course-and-examination-regulations"
                       target="_blank"> HZ HBO-ICT Course and Examination Regulations (CER)</a>
                    <hr class="separator">
                    <a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#chapter-2-implementation-regulation-hz-cer"
                       target="_blank"> The Implementation Regulations (IR)</a>
                    <hr class="separator">
                    <a href="https://learn.hz.nl/my/" target="_blank">Learn environment</a>
                    <hr class="separator">
                    <a href="https://hz.osiris-student.nl/voortgang" target="_blank">My HZ Progress</a>
                    <hr class="separator">
                    <a href="https://github.com/HZ-HBO-ICT" target="_blank">HBO-ICT GitHub</a>
                </aside>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openMenu()">&#9776; </span>

            <!-- Navigation menu -->
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a>Profile</a></li>
            <li><a>Dashboard</a></li>
            <li><a>FAQ</a></li>
            <li><a>Blog</a></li>
        </ul>
    </nav>
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
