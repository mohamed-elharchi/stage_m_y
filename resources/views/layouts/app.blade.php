<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="body-overlay"></div>
    <div id="sidebar">
        <div class="sidebar-header">
            <h3><img src="{{ asset('img/logo.png') }}" class="img-fluid" style="width: 100%;" alt="Logo"/></h3>
        </div>
        <ul class="list-unstyled component m-0">
            <li class="active">
                <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Tableau de bord</a>
            </li>
            <li class="">
                <a href="#" class=""><i class="material-icons">date_range</i>L'utilisation du temps</a>
            </li>
            <li class="">
            <a href="{{ url('/news') }}" class=""><i class="material-icons">library_books</i>Nouvelles</a>

            </li>
            <li class="">
                <a href="#" class=""><i class="material-icons">list</i>Liste</a>
            </li>
        </ul>
    </div>
    <div id="content">
        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div class="col col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt</span>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                                <ul class="nav navbar-nav flex-row ml-auto">
                                    <li class="dropdown nav-item active">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="material-icons">question_answer</span>
                                            <span class="notification">4</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown nav-item">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <img src="{{ asset('img/user.jpg') }}" style="width:40px; border-radius:50%;" alt="User Image"/>
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <ul class="dropdown-menu small-menu">
                                            <li><a href="#"><span class="material-icons">person_outline</span>Profile</a></li>
                                            <li><a href="#"><span class="material-icons">settings</span>Settings</a></li>
                                            <li><a href="#"><span class="material-icons">logout</span>Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="xp-breadcrumbbar text-center">
                    <h4 class="page-title">Tableau de bord</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Site Web</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                    </ol>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(".xp-menubar").on('click',function(){
            $("#sidebar").toggleClass('active');
            $("#content").toggleClass('active');
        });

        $('.xp-menubar,.body-overlay').on('click',function(){
            $("#sidebar,.body-overlay").toggleClass('show-nav');
        });
    });
</script>
</body>
</html>
