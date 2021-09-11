<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#111827">
    <meta name="description" content="C4ArtZ ist ein Gamer, selbst gelernter C#, JS und PHP Entwickler und eifriger Self hoster.">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon32.png') }}">
    <title>c4artz.de</title>
    <script src="{{ asset('js/app.js')}}"></script>
</head>

<body class=" m-0 p-0 overflow-x-hidden w-screen bg-gray-900 text-white select-none">
    {{-- <x-navbar></x-navbar> --}}
    <div class="h-screen w-full p-0 m-0 grid justify-center items-center">
        <div class="gird justify-center items-center grid-rows-hero">
            <h1 class="bg-green-400 bg-gradient-to-r from-green-400 via-green-300 to-green-400 bg-clip-text text-transparent text-10xl p-0 text-center animate-move-up-down" style="filter: drop-shadow(0.05rem 0.05rem #10B981) drop-shadow(0.1rem 0.1rem #10B981) drop-shadow(0.15rem 0.15rem #10B981) drop-shadow(0.2rem 0.2rem #10B981);">C4ARTZ</h1>
            <p class="text-3xl text-white text-center">Gamer, Developer, Self<span class="space"> </span>hoster</p>
        </div>
        {{-- <div class=" absolute bottom-4 w-full flex justify-center">
             <a href="#projects">
                <x-icon name="down-arrow"></x-icon>
            </a>
        </div> --}}
    </div>
    {{-- <div class="h-screen w-full p-0 m-0 grid justify-center items-center" id="projects">
        <h1>Projekte</h1>
    </div> --}}

    <x-footer></x-footer>

</body>

</html>
