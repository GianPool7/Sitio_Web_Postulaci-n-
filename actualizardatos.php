<?php


    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }


  if (isset($_GET['idestudiante'])) {
    $idestudiante=$_GET['idestudiante'];
    $query="SELECT telfe,emaile,Sexo,labura,resumene FROM estudiante WHERE idestudiante='$idestudiante';";  
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $telfe=$row['telfe'];
      $emaile=$row['emaile'];
      $Sexo=$row['Sexo'];
      $labura=$row['labura'];
      $resumene=$row['resumene'];
    }
  }

  if (isset($_POST['actualizar'])) {
    $idestudiante=$_GET['idestudiante'];

    $telfe=$_POST['telfe'];
    $emaile=$_POST['emaile'];
    $Sexo=$_POST['Sexo'];
    $labura=$_POST['labura'];
    $resumene=$_POST['resumene'];

    $query="UPDATE estudiante set telfe='$telfe',emaile='$emaile',Sexo='$Sexo',labura='$labura',resumene='$resumene' WHERE idestudiante=$idestudiante";

    mysqli_query($con,$query);

    header("Location:perfil.php");
    

  }

  
  include('includes/cabecera.php'); 

?>

<div class="container">
  <div class="row justify-content-md-center">

    <div class="col-md-auto">
      <form class="row " action="actualizardatos.php?idestudiante=<?php echo $_GET['idestudiante']?>" method="POST" enctype="multipart/form-data">

      <h1>Actualizar Datos :</h1>

      <div class="container">

        <div class="row">

          <div class="col">

            <label for="telfono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telfono" name="telfe" value="<?php echo $telfe?>" style="border:1px solid black;">

          </div>

          <div class="col">

            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="emaile" id="email" value="<?php echo $emaile?>" style="border:1px solid black;">

          </div>

        </div>

        <div class="row">

          <div class="col">

            <label for="inputState" class="form-label">Genero</label>
            <select id="inputState" class="form-select" name="Sexo">
              <option selected><?php echo $Sexo?></option>
              <option>Masculino</option>
              <option>Femenino</option>
            </select>

          </div>

          <div class="col">

            <label for="inputState" class="form-label">Situación Laboral</label>
            <select id="inputState" class="form-select" name="labura">
              <option selected><?php echo $labura?></option>
              <option>Si</option>
              <option>No</option>
            </select>

          </div>

        </div>

        <div class="row">

          <div class="col-sm-12">
            <label for="exampleFormControlTextarea1" class="form-label">Sobre ti:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="resumene" style="border:1px solid black;"><?php echo $resumene?></textarea>
          </div>

        </div>

      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-info" name="actualizar">Actualizar</button>
      </div>

      </form>

    </div>

  </div>
</div>




<?php

include('includes/ppagina.php'); 

?>
