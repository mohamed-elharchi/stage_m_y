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
                    <img src="{{ asset('img/logo.png') }}" alt="" width="70%" height="70%">
                </li>
                <li>
                    <a href="{{ url('/news') }}">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">Nouvelles</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/utilisations') }}">
                        <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                        <span class="title">Utilisation du temps</span>
                    </a>
                </li>

                <li>

                    <a href="#">
                        <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                        <span class="title"> Message</span>
                    </a>
                </li>
                <li>

                    <a href="#">
                        <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
                        <span class="title"> commentaires</span>
                    </a>
                </li>


                <li>
                    <a href="sign-out.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggleer" id="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>



            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
