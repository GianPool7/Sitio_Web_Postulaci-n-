<?php

    header('Content-type: text/html; charset=utf-8');
    
    include('includes/cabecera.php');
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }
    


?>


    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Solicitudes</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">

                <table class="table align-items-center mb-0">



                    <thead>
                      <tr>                        
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Puesto</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Empresa</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
            
                      $query="SELECT nombrese,apellidose,puestot,nombrerze,estado
                      FROM postular
                      INNER JOIN estudiante 
                      ON estudiante.idestudiante = postular.idestudiante where postular.idestudiante='$idestudiante' ;";
                                        
                      $result_post=mysqli_query($con,$query);
                      while ($row=mysqli_fetch_array($result_post)) { 
                    
                    ?>

                      <tr>
                          <td>
                            <img src="img/MNS.png" alt="" style="width:5vh">
                          </td>

                          <td>
                            <div class="d-flex px-2 py-1">

                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm"><?php echo $row ['nombrese']?> <?php echo $row ['apellidose']?></h6>
                              </div>
                            </div>
                          </td>

                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $row ['puestot']?></p>
                          </td>

                          <td>
                            <p class="text-xs font-weight-bold mb-0"><?php echo $row ['nombrerze']?></p>
                          </td>
                          
                            <td>
                                <span class="badge badge-sm bg-gradient-success"><?php echo $row ['estado']?></span>
                            </td>


                      </tr>

                    <?php
                      }
                    ?>

                    </tbody>
                  


                </table>

              </div>
            </div>
          </div>
        </div>
      </div>

<?php

include('includes/ppagina.php'); 

?>