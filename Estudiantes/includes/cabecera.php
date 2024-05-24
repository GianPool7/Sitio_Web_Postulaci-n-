<?php

    header('Content-type: text/html; charset=utf-8');

      require('conexion.php');
    
      session_start();
      
          if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }


  
  //$idusuario=$_SESSION['idusuario'];

  $idestudiante=$_SESSION['idestudiante'];

  $tipoe=$_SESSION['tipoe'];

  $carrerae=$_SESSION['carrerae'];

  $clicloe=$_SESSION['clicloe'];
  
  $anioeg=$_SESSION['anioeg'];

  $semestreeg=$_SESSION['semestreeg'];
  


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/IBP_solo.png">
    <title>
        Bolsa de trabajo - IBP
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="fontawesome-free/css/all.css">



  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-4 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-building p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="home.php">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">IBP</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto  max-height-vh-150" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="home.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Principal</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-table"></i>
            </div>
            <span class="nav-link-text ms-1">Empresas</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="postulacion.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-table"></i>
            </div>
            <span class="nav-link-text ms-1">Estado de Postulación</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">cuenta personal</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="perfil.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="actualizardatos.php?idestudiante=<?php echo $idestudiante?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Actualizar datos</span>
          </a>
        </li>
        <!----
        <li class="nav-item">
          <a class="nav-link text-white" href="Ccontra.php?idusuario=<?php echo $idusuario?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Cambiar Contraseña</span>
          </a>
        </li>
        --->
        <li class="nav-item">
          <a class="nav-link text-white " href="salir.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-sign-out-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Salir</span>
          </a>
        </li>

      </ul>
    </div>

    <div class="mx-3">
      <a class="btn bg-gradient-info mt-8 w-100" href="mailto:oficinadeempleo@bpastor.edu.pe" type="button">Contáctenos</a>
    </div>

  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <!----
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Paginas</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        --->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>

          <?php

            $query="SELECT nombrese,carrerae FROM estudiante where idestudiante='$idestudiante';";
                  
            $result_cuenta=mysqli_query($con,$query);
            while ($row=mysqli_fetch_array($result_cuenta)) { 
                      
          ?>


            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="perfil.php" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none"><?php echo $row ['nombrese']?></span>
                </a>
              </li>
              


              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              
              <li class="nav-item px-2 d-flex align-items-center">
                <!--- 
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
                -->
              </li>
              


              <li class="nav-item px-2 d-flex align-items-center">
                <!--- 
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
                -->
              </li>

              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-sign-out-alt"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="salir.php">
                      <div class="d-flex py-1">
                        <!----
                        <div class="my-auto">
                          <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                        </div>
                        --->
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">Salir</span>
                          </h6>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!---
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md" href="Ccontra.php?idusuario=<?php echo $idusuario?>">
                        <div class="d-flex py-1">
                          
                          <div class="my-auto">
                            <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                          </div>
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                              <span class="font-weight-bold">Cambiar Contraseña</span>
                            </h6>
                          </div>
                        </div>
                      </a>
                    </li>
                  -->

                </ul>
              </li>

            </ul>

        <?php }?>

        </div>
      </div>
    </nav>