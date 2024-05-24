<?php

    header('Content-type: text/html; charset=utf-8');
    
    include('includes/cabecera.php');
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }

    
?>

<style>
  

.modal{
    width: 100%;
    height: 100vh;
    background: rgb(0, 0, 0,0.8);

    position: absolute;
    top: 0;
    left: 0;

    display: flex;

    animation: modal 2s 1s forwards;
    visibility: hidden;
    opacity: 0;

    position: fixed;

    z-index: 8888;

}

.contenido{
    margin: auto;
    width: 20%;
    height: 40%;
    background: white;
    border-radius: 10px;
}

.contenido img{
  display: block;
  margin:auto;
}

#cerrar{
    display: none;
}


#cerrar + label{
    position: absolute;
    color: #fff;
    font-size: 30px;
    z-index: 9999;
    background: blue;
    height: 40px;
    width: 50px;
    line-height: 40px;
    border-radius: 10px;
    top: 5rem;
    align-items: center;
    right: 27rem;
    cursor: pointer;
    position: fixed;
    text-align: center;

    
    animation: modal 2s 2s forwards;
    visibility: hidden;
    opacity: 0;
}

#cerrar:checked +label, #cerrar:checked ~ .modal{
    display: none;
}

@keyframes modal{
    100%{
        visibility: visible;
        opacity: 1;
    }
}


.contenido img{
    margin-top: -100px;
    width: 60vh;
}



</style>

    <input type="checkbox" name="" id="cerrar">
    <div class="modal">
        <div class="contenido">
            <label for="cerrar" id="btn-cerrar">X</label>
            <a href="Encuesta/index.php?idestudiante=<?php echo $idestudiante?>" target="_blank">
              <img src="img/modal.png" alt="">
            </a>
        </div>
    </div>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Puestos de trabajo</p>
                
                

                <?php
                  $nump="SELECT * FROM puesto WHERE especialidadp='$carrerae'";
                  //$nump="SELECT * FROM puesto";
                  $resulte=mysqli_query($con,$nump);
                  $counte=mysqli_num_rows($resulte);
                  ?>

                <?php ?>

                <h4 class="mb-0"><?php echo $counte?></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fas fa-file"></i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Solicitudes</p>
                <?php
                                                    
                  $nump="SELECT * FROM postular where idestudiante='$idestudiante';";
                  $resulte=mysqli_query($con,$nump);
                  $countep=mysqli_num_rows($resulte);
                  ?>
  
                <?php ?>
                <h4 class="mb-0"><?php echo $countep?></h4>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="row mt-4">

        <?php
          
          $query="SELECT *
          FROM puesto
          INNER JOIN empresa 
          ON puesto.idpuesto = empresa.idempresa WHERE puesto.especialidadp='$carrerae'"; 
          
         //$query="SELECT * FROM puesto";
          
                            
          $result_puesto=mysqli_query($con,$query);
          while ($row=mysqli_fetch_array($result_puesto)) { 
          
        ?>

          <a href="puestod.php?idpuesto=<?php echo $row ['idpuesto']?>" target="_blank" rel="noopener noreferrer" style="color:black;" class="col-lg-6 col-md-6 mt-4 mb-4">

            <div>
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-light shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <img src="../../Admin-CEFE-ibp/logos/<?php echo $row ["logoempresa"];?>" alt="" height="380" style="display: block; box-sizing: border-box; height: 170px; width: 273.3px; margin:auto" width="546">
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 "><?php echo $row ['puestot']?></h6>
                  <p class="text-sm "> <?php echo $row ["nombrerze"];?></p>
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="fas fa-map-marker-alt"></i> &nbsp;
                    <p class="mb-0 text-sm"><?php echo $row ['distritop']?> - PERÚ</p>
                  </div>
                </div>
              </div>
            </div>

          </a>

        <?php } ?>

      </div>
    </div>
      



<?php

include('includes/ppagina.php'); 

?>


