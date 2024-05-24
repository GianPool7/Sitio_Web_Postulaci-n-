<?php

    header('Content-type: text/html; charset=utf-8');
    
    include('includes/cabecera.php');
    require ('conexion.php');

    if ($con->set_charset('utf8') === false) {
      die('Error: ' .  $con->error);
    }

?>




    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/bannerbl.png');">
        <span class="mask  bg-info opacity-6"></span>
      </div>

      <?php
        

        $query=" SELECT * FROM estudiante where idestudiante='$idestudiante';";
              
        $result_estu=mysqli_query($con,$query);
        while ($row=mysqli_fetch_array($result_estu)) { 
                  
      ?>

        <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="img/avatar.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>




          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $row ['nombrese']?>  <?php echo $row ['apellidose']?> 
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                <?php echo $row ['carrerae']?> 
              </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">


                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="fas fa-user-graduate"></i>
                    <span class="ms-1"><?php echo $row ['tipoe']?></span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="fas fa-briefcase"></i>
                    <span class="ms-1">Trabaja: <?php echo $row ['labura']?></span>
                  </a>
                </li>

              </ul>
          </div>

        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">

                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Situación de estudiantes</h6>
                </div>

                <div class="card-body p-3">

                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Año:</strong> &nbsp; <?php echo $row ['anioeg']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Semestre:</strong> &nbsp; <?php echo $row ['semestreeg']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Ciclo:</strong> &nbsp; <?php echo $row ['cicloe']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Distrito:</strong> &nbsp; <?php echo $row ['distritoe']?></li>

                  </ul>

                </div>
                
                <hr class="horizontal gray-light my-4">

                <form action="upload.php" method="post" enctype="multipart/form-data">

                  <div class="card mb-2" style="max-width: 550px; background-color: whitesmoke">
                    <div class="row g-0">
                      <div class="col-md-12">
                        <div class="card-body">
                            <div class="mb-3">
                              <label for="formFileSm" class="form-label">Subir CV</label>
                              <input class="form-control form-control-sm" id="formFileSm" type="file" name="archivo" value="<?php echo $cves?>">
                            
                                <br>
                                <button type="submit" class="btn btn-primary" id="register" name="subir">Subir</button>
                                <a href="cv/<?php echo $row ['cves']?>" target="_blank" class="btn btn-info">Descargar</a>
                                <a href="cv/<?php echo $row ['cves']?>" target="_blank" class="btn btn-success">Ver</a>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </form>
                
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Objetivos</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="caja" style="height:150px;overflow:scroll;">
                    <p class="text-sm">
                      <?php echo $row ['resumene']?>
                    </p>
                  </div>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Numero:</strong> &nbsp; <?php echo $row ['telfe']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Correo:</strong> &nbsp; <?php echo $row ['emaile']?></li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                      <strong class="text-dark text-sm">Sexo:</strong> &nbsp; <?php echo $row ['Sexo']?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          <?php }?>


            <div class="col-12 col-xl-4" >

              <div class="card card-plain h-100">

                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Compañeros</h6>
                </div>

                <div class="card-body p-3">
                  <ul class="list-group">

                  <?php //echo $carrerae ?>

                    <div class="caja" style="height:380px;overflow:scroll;">

                    <?php

                      $query=" SELECT nombrese,apellidose,carrerae from estudiante where anioeg='$anioeg' and semestreeg='$semestreeg' and carrerae='$carrerae'";
                            
                      $result_compa=mysqli_query($con,$query);
                      while ($row=mysqli_fetch_array($result_compa)) { 
                                
                    ?>

                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                        <div class="avatar me-3">
                          <img src="img/avatar.png" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?php echo $row ['nombrese']?> <?php echo $row ['apellidose']?></h6>
                          <p class="mb-0 text-xs"><?php echo $row ['carrerae']?></p>
                        </div>
                      </li>

                      <?php }?>

                    </div>


                  </ul>
                </div>

              </div>

            </div>

          </div>
        </div>
        </div>

          <h1>
          </h1>


    </div>

   
<?php

include('includes/ppagina.php'); 

?>
