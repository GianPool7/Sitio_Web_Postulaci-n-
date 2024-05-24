<?php

    include('includes/cabecera.php'); 


    header('Content-type: text/html; charset=utf-8');
    
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }


  if (isset($_GET['idpuesto'])) {
    $idpuesto=$_GET['idpuesto'];
    $query="SELECT * FROM puesto INNER JOIN empresa ON puesto.idpuesto = empresa.idempresa WHERE idpuesto='$idpuesto';";  
    //$query="SELECT * FROM puesto WHERE idpuesto=$idpuesto";
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $puestot=$row['puestot'];
      $requisitosp=$row['requisitosp'];
      $funcionesp=$row['funcionesp'];
      $nombrerze=$row['nombrerze'];
      $nruce=$row['nruce'];
      $distritoe=$row['distritoe'];
      $vacantesp=$row['vacantesp'];
      $situacionp=$row['situacionp'];
      $fechap=$row['fechap'];
      $condicionp=$row['condicionp'];
      $frecuenciap=$row['frecuenciap'];
      $horariop=$row['horariop'];
      $sexop=$row['sexop'];
      $remuneracionp=$row['remuneracionp'];
      $distritop=$row['distritop'];
      $direccionp=$row['direccionp'];
      $jornadap=$row['jornadap'];
      $beneficiop=$row['beneficiop'];
      $logoempresa=$row['logoempresa'];
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
                  <!---
                  <p class="mb-0 font-weight-normal text-sm">
                    fecha: <?php //echo $fechap?>
                  </p> -->
                </div>
              </div>

              <div class="col-lg-12 col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                  <ul class="nav nav-pills nav-fill p-1" role="tablist">

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                        <i class="fas fa-user-graduate"></i>
                        <span class="ms-1"><?php echo $condicionp;?></span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-child"></i>
                        <span class="ms-1">Vacantes : <?php echo $vacantesp?></span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-venus-mars"></i>
                        <span class="ms-1">sexo : <?php echo $sexop?></span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-briefcase"></i>
                        <span class="ms-1">Tipo : <?php echo $situacionp?></span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="ms-1">Distrito : <?php echo $distritop?></span>
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
                      <h6 class="mb-0">Perfil Solicitado</h6>
                    </div>

                    <div class="card-body p-3">
                        
                      <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Puesto:</strong>&nbsp; <?php echo $puestot?></li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Requisitos:<br> </strong> <?php echo $requisitosp?></li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Funciones:<br> </strong> <?php echo $funcionesp?></li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Frecuencia:</strong>&nbsp; <?php echo $frecuenciap?></li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Horario:</strong> &nbsp; <?php echo $horariop?></li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Remuneración: S/</strong> &nbsp; <?php echo $remuneracionp?></li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Dirección:</strong> &nbsp; <?php echo $direccionp?></li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jornada:</strong> &nbsp; <?php echo $jornadap?></li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Beneficios:</strong> &nbsp; <?php echo $beneficiop?></li>

                      </ul>

                    </div>
          </form>

                    <hr class="horizontal gray-light my-4">

                    <div class="card-body p-4">

                      <div class="container px-4">
                          <div class="row gx-1">
                            <div class="col">

                              <form action="postulardatos.php" method="post">

                                <input type="hidden" placeholder="id" name="idestudiante" value="<?php echo $idestudiante;?>">
                                <input type="hidden" placeholder="puesto" name="puestot" value="<?php echo $puestot;?>">
                                <input type="hidden" placeholder="empresa" name="nombrerze" value="<?php echo $nombrerze;?>">

                                <button type="submit" class="btn btn-info" name="enviardatos">Postular</button>

                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                      
                  </div>
                </div>
                


              </div>
            </div>



        </div>



    </div>



   
<?php

include('includes/ppagina.php'); 

?>

