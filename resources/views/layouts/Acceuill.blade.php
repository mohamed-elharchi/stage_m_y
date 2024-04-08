<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/myjs.js') }}"></script>






    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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




    <!-- footer -->

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="{{ asset('images/mssmai.png') }}" alt="Example" class="logo2">

            <p class="footer-links">
                <a href="#">Accueil</a>

                <a href="#">À propos</a>


                <a href="#">Calendriers</a>
            </p>

            <p class="footer-company-name">Copyright © 2024 (JHBZ) <strong>Lycée Moulay Ismail </strong> Tous Droits
                Réservés</p>
        </div>

        <div class="footer-center">
            <div>
                <p>
                    Envoie-nous un message E-Mail
                    <i class="ri-message-2-line"></i>
                </p>

            </div>

            <div>

                <p> <i class="ri-phone-line"></i> +212 706523757</p>
            </div>
            <div>

                <p> <i class="ri-mail-line"></i> <a href="mailto:moulay_ismail@gmail.com">moulay_ismail@gmail.com</a>
                </p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span><i class="ri-attachment-2"></i> Mr le Directeur</span>
                <strong>Lycée Moulay Ismail</strong> Bienvenue à notre lycée ! Nous sommes ravis de vous accueillir dans
                notre
                communauté éducative dynamique où chaque élève est encouragé à exceller et à s'épanouir. Ensemble,
                explorons
                de nouveaux horizons, cultivons le savoir et construisons un avenir prometteur.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="ri-facebook-box-line"></i></a>
                <a href="#"><i class="ri-linkedin-box-line"></i></a>

            </div>
        </div>
    </footer>




    <!--  end footer-->





<script>
     $('#menu-btn').click(function(){
      $('nav .navigation ul').addClass('active')
    })
    $('#menu-close').click(function(){
      $('nav .navigation ul').removeClass('active')
    })
</script>
</body>

</html>
