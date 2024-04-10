
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/director.css') }}">
    <script src="{{ asset('js/director.js') }}"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>@yield('title')</title>

</head>

<body>

    <div class="containerr">
        <div class="navigation">
            <ul>
                <li>
                    <img src="{{ asset('img/logo.png') }}" alt="" width="70%" height="70%">

                    {{-- <a href="{{ route('directorDashboard') }}">
                        <span class="logoo"><img src="{{ asset('images/logo.png') }}" alt="" width="100%"
                                height="70%"></span>
                        <span class="title">Dashboard</span>
                    </a> --}}
                </li>
                <li>
                    {{-- <a href="{{ route('general_guard') }}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Responsables</span>
                    </a> --}}
                    @auth
                        @if (auth()->user()->role === 'director')
                            <a href="{{ route('general_guard') }}">
                                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                                <span class="title">Responsables</span>
                            </a>
                        @endif
                    @endauth
                </li>
                <li>
                    <a href="{{ route('displayMatieres') }}">
                        <span class="icon"><ion-icon name="archive-outline"></ion-icon></span>
                        <span class="title">Matieres</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('showDepartements') }}" id="add-to" class="Add-P-btn">
                        <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
                        <span class="title">departements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('displayTeachers') }}" id="add-too" class="Add-o-btn">
                        <span class="icon"><ion-icon name="analytics-outline"></ion-icon></span>
                        <span class="title" id="offrr">Les professeurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" id="add-to" class="Add-P-btn">
                        <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
                        <span class="title">Déconnecte</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('accueil') }}" id="add-to" class="Add-P-btn">
                        <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
                        <span class="title">sitel web </span>
                    </a>
                </li>

                {{-- <li>
                    <a href="editProfile.php">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">profile</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="sign-out.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign out</span>
                    </a>
                </li> --}}
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggleer" id="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">

                </div>
                <div class="user">
                    <button type="submit" class="btn btn-primary">
                        <a href="{{ route('general_guard') }}" class="btn btn-link text-white"
                            style="text-decoration: none;">Site Dashboard</a>
                    </button>
                </div>
            </div>

            <div>
                @yield('content')
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
