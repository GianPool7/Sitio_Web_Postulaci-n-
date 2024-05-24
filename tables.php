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
                <h6 class="text-white text-capitalize ps-3">Empresas</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombres</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ruc</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ubicación</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>

                  
                    <?php
                      

                      $query=" SELECT * FROM empresa";
                            
                      $result_empresa=mysqli_query($con,$query);
                      while ($row=mysqli_fetch_array($result_empresa)) { 
                                
                    ?>

                      <tbody>

                        <tr>
                            
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../focus-2/logos/<?php echo $row ["logoempresa"];?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><a href="empresad.php?idempresa=<?php echo $row ['idempresa']?>"><?php echo $row ['nombrerze']?></a></h6>
                                  </div>
                                </div>
                              </td>
    
                              <td>
                                <p class="text-xs font-weight-bold mb-0"><?php echo $row ['nruce']?></p>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $row ['distritoe']?></span>
                              </td>
                              
                        </tr>



                      </tbody>

                    <?php }?>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php

include('includes/ppagina.php'); 

?>