<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#111827">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon32.png') }}">
    <title>{{ $code }} | c4artz.de</title>
</head>

<body class="noselect">
    <div class="hero">
        <div class="error">
            <h1>{{ $code }}</h1>
            <p>{{ $message }}<span>{{ $emote }}</span></p>
            <a href="/"><img src="{{ asset('assets/arrow-hover.svg') }}" alt=""></span>Hier gehts' zurück zur Hauptseite</a>
            <!-- <button type="button"><span><img src="{{ asset('assets/arrow-hover.svg') }}" alt="">Hier geht's zurück zur Hauptseite</span></button> -->
        </div>
</body>

</html>