<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#111827">
    <meta name="description" content="C4ArtZ ist ein Gamer, selbst gelernter C#, JS und PHP Entwickler und eifriger Self hoster.">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon32.png') }}">
    <title>c4artz.de</title>
    <script src="{{ asset('js/app.js')}}"></script>
</head>

<body class="noselect">
    <x-navbar></x-navbar>
    <div class="hero">
        <div class="container">
            <h1>C4ARTZ</h1>
            <p>Gamer, Developer, Self<span class="space"> </span>hoster</p>
        </div>
        <div class="svg-container">
            <!-- <a href="#projects">
                <x-icon name="down-arrow"></x-icon>
            </a>  -->
            <div onclick="scrollToID('projects')">
                <x-icon name="down-arrow"></x-icon>
            </div>
        </div>
    </div>
    <div class="projects" id="projects">
        <h1>Projekte</h1>
    </div>
    <div class="footer">
        <p>Copyright &copy 2021 C4ArtZ - Alle Rechte vorbehalten.</p>
    </div>
</body>

</html>