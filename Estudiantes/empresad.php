<?php

    include('includes/cabecera.php'); 


    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }


  if (isset($_GET['idempresa'])) {
    $idempresa=$_GET['idempresa'];
    $query="SELECT * FROM empresa WHERE idempresa='$idempresa';";  
    //$query="SELECT * FROM puesto WHERE idpuesto=$idpuesto";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $nombrerze=$row['nombrerze'];
      $nruce=$row['nruce'];
      $distritoe=$row['distritoe'];
      $tele=$row['tele'];
      $contactoe=$row['contactoe'];
      $celulare=$row['celulare'];
      $correoe=$row['correoe'];
      $programaee=$row['programaee'];
      $detallee=$row['detallee'];
      $ccontactoempresa=$row['ccontactoempresa'];
    }
  }

  ?>




    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://factorialhr.es/wp-content/uploads/2022/02/23172651/analisis-de-puestos-de-trabajo.jpg');">
        <span class="mask  bg-info opacity-6"></span>
      </div>

        <div class="card card-body mx-3 mx-md-4 mt-n6">

          <form action="">

            <div class="row gx-4 mb-2">

              <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                  <img src="../logos/<?php echo $row ["logoempresa"];?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
              </div>

              <div class="col-auto my-auto">
                <div class="h-100">
                  <h5 class="mb-1">
                    <?php echo $nombrerze?>
                  </h5>
                  <p class="mb-0 font-weight-normal text-sm">
                    Ruc : <?php echo $nruce?> 
                  </p>
                </div>
              </div>

              <div class="col-lg-12 col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                  <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-venus-mars"></i>
                        <span class="ms-1">Telefono : <?php echo $tele?></span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-briefcase"></i>
                        <span class="ms-1">Celular : <?php echo $celulare?></span>
                      </a>
                    </li>


                  </ul>
              </div>

            </div>

            <div class="row">
              <div class="row">
                <div class="col-12 col-xl-12">
                  <div class="card card-plain h-100">

                    <div class="card-header pb-0 p-3">
                      <h6 class="mb-0">Detalle de empresa</h6>
                    </div>

                    <div class="card-body p-3">
                        
                      <ul class="list-group">
                          
                          
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Correo:</strong>&nbsp; <?php echo $correoe?></li>
                          
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Programa de estudios:</strong>&nbsp; <?php echo $programaee?></li>
                          
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Detalle:</strong>&nbsp; <?php echo $detallee?></li>

                      </ul>

                    </div>
          </form>



                  </div>
                </div>
                


              </div>
            </div>



        </div>



    </div>



   
<?php

include('includes/ppagina.php'); 

?>

