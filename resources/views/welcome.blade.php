<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="../css/kezdooldal.css">

    <!-- Scripts -->
    <script src="../js/Ajax.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="../js/dogaklistazasa.js" type="module"></script>
    
    
</head>

<body class="antialiased">


    <main>

        <header>
            <h1 class="kozepre">Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai</h1>
        </header>
        <section class="bejelentkezes kozepre">
            <h2>A szakdolgozatokat bejelentkezés után tudja megnézni!</h2>
            @if (Route::has('login'))
            <div class=" px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Szakdolgozatok</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Bejelentkezés</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Regisztráció</a>
                @endif
                @endauth
            </div>

            @endif
        </section>
        <article>
            <div class="galeria">
                <img src="./kepek/kep_11.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_1.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_2.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_8.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_3.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_10.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_4.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_5.png" alt="Szakdolgozat kép">
            </div>
            <div class="galeria">
                <img src="./kepek/kep_6.png" alt="Szakdolgozat kép">
            </div>






            <div class="galeria">
            </div>
        </article>
        <footer class="kozepre">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </main>
    </div>
    </div>
</body>

</html>
