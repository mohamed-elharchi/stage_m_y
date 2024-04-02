@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')


<div class="wrapper">

<div class="body-overlay"></div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="sidebar-header">
        <!-- Assuming img/logo.png exists and should be displayed -->
        <h3><img src="img/logo.png" class="img-fluid" style="width: 100%;" alt="Logo"/></h3>
    </div>
    <ul class="list-unstyled component m-0">
        <li class="active">
            <!-- Make sure to replace '#' with actual URLs -->
            <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Tableau de bord</a>
        </li>

        <li class="">
            <a href="#" class=""><i class="material-icons">date_range</i>L'utilisation du temps</a>
        </li>
        <li class="">
            <a href="#" class=""><i class="material-icons">library_books</i>Nouvelles</a>
        </li>
        <li class="">
            <a href="#" class=""><i class="material-icons">liste</i>Liste</a> <!-- Typo: 'liste' to 'list' -->
        </li>
    </ul>
</div>

<!-- Content -->
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
                                        <!-- Duplicate entry, assuming it's intentional -->
                                        <li><a href="#">You Have 4 New Messages</a></li>
                                        <li><a href="#">You Have 4 New Messages</a></li>
                                        <li><a href="#">You Have 4 New Messages</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-item">
                                    <a class="nav-link" href="#" data-toggle="dropdown">
                                        <img src="img/user.jpg" style="width:40px; border-radius:50%;" alt="User Image"/> <!-- Assuming img/user.jpg exists -->
                                        <span class="xp-user-live"></span>
                                    </a>
                                    <ul class="dropdown-menu small-menu">
                                        <li><a href="#">
                                            <span class="material-icons">person_outline</span>
                                            Profile
                                        </a></li>
                                        <li><a href="#">
                                            <span class="material-icons">settings</span>
                                            Settings
                                        </a></li>
                                        <li><a href="#">
                                            <span class="material-icons">logout</span>
                                            Logout
                                        </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb Navigation -->
            <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Tableau de bord</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Site Web</a></li> <!-- Fixed typo: 'site web' to 'Site Web' -->
                    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                </ol>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
