<?php

  header('Content-type: text/html; charset=utf-8');
  
  include("conexion.php");
  session_start();

  if ($con->set_charset('utf8') === false) {
    die('Error: ' .  $con->error);
  }


if ($_POST) {
    
    $usuario=$_POST['numdoce'];
    $pasusuario=$_POST['passestu'];

    //$sql="SELECT idestudiante,numdoce,contra FROM estudiante WHERE numdoce='$usuario'";

    /* $sql="SELECT *
    FROM usuarioestu
    INNER JOIN estudiante 
    ON estudiante.idestudiante = usuarioestu.idusuario WHERE usuario='$usuario';"; */

    $sql="SELECT * FROM estudiante WHERE numdoce='$usuario';";


    $resultados=$con->query($sql);
    $num=$resultados->num_rows;


    if ($num>0) {
        
        $row=$resultados->fetch_assoc();
        $password_bd=$row['passestu'];

        $pass_c=sha1($pasusuario);

        if ($password_bd==$pass_c) { 
          
          //$_SESSION['idusuario']=$row['idusuario'];
          $_SESSION['idestudiante']=$row['idestudiante'];
          $_SESSION['tipoe']=$row['tipoe'];
          $_SESSION['numdoce']=$row['numdoce'];
          $_SESSION['passestu']=$row['passestu'];
          $_SESSION['carrerae']=$row['carrerae'];
          $_SESSION['clicloe']=$row['clicloe'];
          $_SESSION['anioeg']=$row['anioeg'];
          $_SESSION['semestreeg']=$row['semestreeg'];

          if ($_SESSION['tipoe']=$row['tipoe']!="Estudiante") {
            header('location:Egresados');
            
            if ($_SESSION['p1']=$row['p1'] =="" and $_SESSION['p4']=$row['p4'] =="") {

              header('location:Egresados');
            }
            else {
              header('location:Egresados/home.php');
            }
            
          }
          
          if ($_SESSION['tipoe']=$row['tipoe']=="Estudiante") {
            header('location:Estudiantes/home.php');
          }



        }else{
          echo "la contra esta mal";
        }


    }else{

    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" href="img/IBP_solo.png">
  
  <title>
    Bolsa de trabajo - IBP
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('img/fondobl5.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Bienvenido <br> a la bolsa laboral IBP</h4>
                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <div class="input-group input-group-outline my-3">
                    <input type="text" class="form-control" placeholder="Usuario" name="numdoce">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="passestu">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2" name="acceder">Ingresar</button>
                  </div>
                </form>
                
                <a href="https://ibp.edu.pe/cuestionario" target="_blank" rel="noopener noreferrer" class="btn bg-gradient-danger w-100 my-4 mb-2">Registrate</a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>