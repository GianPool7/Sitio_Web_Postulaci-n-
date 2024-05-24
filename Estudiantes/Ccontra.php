<?php

  require('conexion.php');

  if (isset($_GET['idusuario'])) {
    $idusuario=$_GET['idusuario'];
    $querys="SELECT usuario,pasusuario FROM usuarioestu WHERE idusuario='$idusuario';";  
    $result=mysqli_query($con,$querys);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $usuario=$row['usuario'];
      $pasusuario=$row['pasusuario'];
    }
  }

  if (isset($_POST['actualizarcc'])) {
    $idusuario=$_GET['idusuario'];

    $usuario=$_POST['usuario'];
    $pasusuario=$_POST['pasusuario'];


    $query="UPDATE usuarioestu set usuario='$usuario',pasusuario=sha1('$pasusuario') WHERE idusuario=$idusuario";

    mysqli_query($con,$query);

    header("Location:perfil.php");
    

  }

  
  include('includes/cabecera.php'); 

?>

<div class="container">
  <div class="row justify-content-md-center">

    <div class="col-md-auto">
      <form class="row " action="Ccontra.php?idusuario=<?php echo $_GET['idusuario']?>" method="POST">

      <h1>Actualizar Datos :</h1>

      <div class="container">

        <div class="row">

          <div class="col-12">

            <label for="telfono" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="telfono" name="usuario" value="<?php echo $usuario?>" style="border:1px solid black;">

          </div>

          <div class="col-12">

            <label for="email" class="form-label">pasusuario</label>
            <input type="text" class="form-control" name="pasusuario" id="pasusuario" value="<?php echo $pasusuario?>" style="border:1px solid black;">

          </div>

        </div>

      </div>


      <div class="col-12">
        <button type="submit" class="btn btn-info" name="actualizarcc">Actualizar</button>
      </div>

      </form>

    </div>

  </div>
</div>




<?php

include('includes/ppagina.php'); 

?>
