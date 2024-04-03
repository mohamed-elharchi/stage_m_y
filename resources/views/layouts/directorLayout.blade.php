{{-- <!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo {
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="#">
                <img class="logo" src="{{ asset('images/logo.png') }}" height="60" alt="Exemple">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer la navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <a class="nav-link text-white btn btn-success" href="{{ route('generalGuard_dashboard') }}">Tableau de bord des gardes généraux</a>
            </div>
        </nav>
    </header>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ route('general_guard') }}" class="list-group-item list-group-item-action">garde général</a>
                    <a href="#" class="list-group-item list-group-item-action">Analytique</a>
                    <a href="#" class="list-group-item list-group-item-action">Rapports</a>
                    <a href="#" class="list-group-item list-group-item-action">Tâches</a>
                    <a href="#" class="list-group-item list-group-item-action">Paramètres</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container mt-5">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> --}}
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

<body class="bod">

    <div class="containerr">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('directorDashboard') }}">
                        <span class="logoo"><img src="{{ asset('images/logo.png') }}" alt="" width="100%"
                                height="70%"></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('general_guard') }}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Responsable</span>
                    </a>
                </li>
                <li>
                    <a href="route('displayMatieres')">
                        <span class="icon"><ion-icon name="archive-outline"></ion-icon></span>
                        <span class="title">Matieres</span>
                    </a>
                </li>
               {{--  <li>
                    <a href="" id="add-to" class="Add-P-btn">
                        <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
                        <span class="title">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="" id="add-too" class="Add-o-btn">
                        <span class="icon"><ion-icon name="analytics-outline"></ion-icon></span>
                        <span class="title" id="offrr">Add offer</span>
                    </a>
                </li>
                <li>
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
                    <form action="" method="post">
                        <label for="">
                            <input type="text" placeholder="Search by title or type" id="searchInput">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                </div>
                <div class="user">
                    <ion-icon name="cart-outline"></ion-icon>
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
