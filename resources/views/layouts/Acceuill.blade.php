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
                       <a class="login" href="{{ route('directorDashboard') }}">Dashboard</a>
                    @elseif(auth()->user()->role === 'general_guard')
                    <a class="login" href="{{ route('generalGuard_dashboard') }}">Dashboard</a>
                    @elseif(auth()->user()->role === 'teacher')
                        <a class="login" href="{{ route('teacherDashboard') }}">Dashboard</a>
                    @endif
                       <a class="login" href="{{ route('logout') }}">Déconnecte</a>
                @endauth
                @guest
                <a  class="login" href="{{ route('login') }}">Se connecter <i class="ri-login-circle-line"></i></a>
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
