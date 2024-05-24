<?php

  require('conexion.php');

  if (isset($_GET['idestudiante'])) {
    $idestudiante=$_GET['idestudiante'];
    $querys="SELECT numdoce,passestu FROM estudiante WHERE idestudiante='$idestudiante';";  
    $result=mysqli_query($con,$querys);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $numdoce=$row['numdoce'];
      $passestu=$row['passestu'];
    }
  }

  if (isset($_POST['actualizarcc'])) {
    $idestudiante=$_GET['idestudiante'];

    $numdoce=$_POST['numdoce'];
    $passestu=$_POST['passestu'];


    $query="UPDATE estudiante set numdoce='$numdoce',passestu=sha1('$passestu') WHERE idestudiante=$idestudiante";

    mysqli_query($con,$query);

    header("Location:perfil.php");
    

  }

  
  include('includes/cabecera.php'); 

?>

    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://factorialhr.es/wp-content/uploads/2022/02/23172651/analisis-de-puestos-de-trabajo.jpg');">
        <span class="mask  bg-info opacity-6"></span>
      </div>

        <div class="card card-body mx-3 mx-md-4 mt-n6">

          <form class="row " action="Ccontra.php?idestudiante=<?php echo $_GET['idestudiante']?>" method="POST">

            <h1>Cambiar contraseña :</h1>

            <div class="container">

              <div class="row">

                <div class="col-6">

                  <label for="telfono" class="form-label">Usuario</label>
                  <input type="text" class="form-control border-info p-2" id="telfono" name="numdoce" value="<?php echo $numdoce?>" style="border:1px solid black;">

                </div>

                <div class="col-6">

                  <label for="email" class="form-label">Contraseña</label>
                  <input type="text" class="form-control border-info p-2" name="pasusuario" id="passestu" value="<?php echo $passestu?>" style="border:1px solid black;">

                </div>

              </div>

            </div>


            <div class="col-12">
              <br>
              <button type="submit" class="btn btn-info" name="actualizarcc">Actualizar</button>
            </div>

          </form>


        
        </div>

    </div>


<?php

include('includes/ppagina.php'); 

?>
