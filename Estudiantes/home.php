<?php

    header('Content-type: text/html; charset=utf-8');
    
    include('includes/cabecera.php');
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }

    
?>


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
            <!---
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>Puestos por semana</p>
            </div>
            --->
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
                      <img src="../logos/<?php echo $row ["logoempresa"];?>" alt="" height="380" style="display: block; box-sizing: border-box; height: 170px; width: 273.3px; margin:auto" width="546">
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


