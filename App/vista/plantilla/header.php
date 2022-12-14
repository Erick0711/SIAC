<!DOCTYPE html>
<html lang="en">

<head>
  <title>.:: SIAC ::.</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../assets/img/Logo-siac.jpg">
  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../../assets/sweetalert2/sweetalert2.min.css">
  <!-- FONT-ICON CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>

<body class="app sidebar-mini">
<!-- <div class="centrado" id="carga">
    <div class="lds-roller">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
</div> -->
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="./inicio">Cond. Sevilla</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
      <!-- <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Buscar">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li> -->
      <!-- MENU USUARIO-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"> <?php echo $usuario?> <i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="./plantilla/session_destroy.php"><i class="fa fa-sign-out fa-lg"></i> Cerrar Sesión</a></li>
        </ul>
      </li>
    </ul>
  </header>