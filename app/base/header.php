<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Helpdesk</title><!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css"><!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css"><!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="vendor/whirl/dist/whirl.css"><!-- =============== PAGE VENDOR STYLES ===============-->
    <link rel="stylesheet" href="vendor/jquery-bootgrid/dist/jquery.bootgrid.css"><!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.css"><!-- DATETIMEPICKER-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="vendor/weather-icons/css/weather-icons.css"><!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="css/bootstrap.css" id="bscss"><!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body>
<div class="wrapper">
    <!-- top navbar-->
    <header class="topnavbar-wrapper">
        <!-- START Top Navbar-->
        <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header"><a class="navbar-brand" href="#/">
                    <div class="brand-logo">
                        <h4 class="block-center rounded text-white"><i class="fa fa-headphones-alt mr-2"></i>Helpdesk</h4>
                    </div>
                    <div class="brand-logo-collapsed">
                        <i class="fa fa-headphones-alt text-white"></i>
                    </div>
                </a></div><!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
                <li class="nav-item">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed"><em class="fas fa-bars"></em></a><!-- Button to show/hide the sidebar on mobile. Visible on mobile only.--><a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true"><em class="fas fa-bars"></em></a></li><!-- START User avatar toggle-->
                <li class="nav-item d-none d-md-block">
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse"><em class="icon-user"></em></a></li><!-- END User avatar toggle-->
            </ul><!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
                <!-- Search icon-->
                <li class="nav-item"><a class="nav-link" href="#" data-search-open=""><em class="icon-magnifier"></em></a></li><!-- Fullscreen (only desktops)-->
                <li class="nav-item d-none d-md-block"><a class="nav-link" href="#" data-toggle-fullscreen=""><em class="fas fa-expand"></em></a></li><!-- START Alert menu-->
                <li class="nav-item dropdown dropdown-list"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown"><em class="icon-bell"></em><span class="badge badge-danger">11</span></a><!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2"><em class="fas fa-headphones fa-2x text-success"></em></div>
                                        <div class="media-body">
                                            <p class="m-0">Novos Chamados</p>
                                            <p class="m-0 text-muted text-sm">3 novos chamados</p>
                                        </div>
                                    </div>
                                </div><!-- last list item-->
                                <div class="list-group-item list-group-item-action"><span class="d-flex align-items-center"><span class="text-sm">More notifications</span><span class="badge badge-danger ml-auto">14</span></span></div>
                            </div><!-- END list group-->
                        </div>
                    </div><!-- END Dropdown menu-->
                </li><!-- END Alert menu-->
                <!-- START Offsidebar button-->
                <li class="nav-item dropdown dropdown-list">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                        <em class="fa fa-user-alt"></em>
                    </a><!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
<!--                                    <span class="d-flex align-items-center">-->
                                        <a class="nav-link" style="color:black;" href="login.php">
                                            <em class="fa fa-sign-out"></em>
                                            <span class="text-black">Sair</span>
                                        </a>
<!--                                        <span class="badge badge-danger ml-auto">14</span>-->
<!--                                    </span>-->
                                </div>
                            </div><!-- END list group-->
                        </div>
                    </div><!-- END Dropdown menu-->
                </li><!-- END Alert menu-->
            </ul><!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" action="chamados.php">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Digite e pressione enter ...">
                    <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
                </div><button class="d-none" type="submit">Submit</button>
            </form><!-- END Search form-->
        </nav><!-- END Top Navbar-->
    </header><!-- sidebar-->