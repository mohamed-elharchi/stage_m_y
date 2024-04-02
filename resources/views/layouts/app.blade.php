<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/myjs.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <!-- navigation.+++++++++++++++++  -->
    <nav id="main-nav">
        <img src="{{ asset('images/logo.png') }}" alt="Example">
        <div class="navigation">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Nouvelles</a></li>
                <li><a href="#">Événements</a></li>
                <li><a href="#">Calendriers</a></li>
                {{-- <button class="butt1"><a href="{{ route('login') }}">Se connecter</a></button> --}}
                @auth
                    @if (auth()->user()->role === 'director')
                        <button class="butt1"><a href="{{ route('directorDashboard') }}">Dashboard</a></button>
                    @elseif(auth()->user()->role === 'general_guard')
                        <button class="butt1"><a href="{{ route('generalGuard_dashboard') }}">Dashboard</a></button>
                    @elseif(auth()->user()->role === 'teacher')
                        <button class="butt1"><a href="{{ route('teacherDashboard') }}">Dashboard</a></button>
                    @endif
                    <button class="butt1"><a href="{{ route('logout') }}">Déconnecte</a></button>
                @endauth
                @guest
                    <button class="butt1"><a href="{{ route('login') }}">Se connecter</a></button>
                @endguest
            </ul>
        </div>

    </nav>



    <div>
        @yield('content')
    </div>



    <div>
        <h1>footer</h1>
    </div>



</body>

</html>
