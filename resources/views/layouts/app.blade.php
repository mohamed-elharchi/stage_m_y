<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Your Logo</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item">
                                <a class=" nav-link text-white btn btn-danger" href="{{ route('logout') }}">log out</a>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white btn btn-success" href="{{ route('login') }}">Login</a>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>


        <div class="container mt-5">
            @yield('content')
        </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
