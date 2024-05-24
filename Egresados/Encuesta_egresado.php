<?php



  header('Content-type: text/html; charset=utf-8');

  include('includes/cabecera.php'); 
  
  require ('conexion.php');
  if ($con->set_charset('utf8') === false) {
    die('Error: ' .  $con->error);
  }


  if (isset($_GET['idestudiante'])) {
    $idestudiante=$_GET['idestudiante'];
    $query="SELECT * FROM estudiante WHERE idestudiante='$idestudiante';";  
    $result=mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1) {
      $row=mysqli_fetch_array($result);
      $nombrese=$row['nombrese'];
      $apellidose=$row['apellidose'];
      $numdoce=$row['numdoce'];
      $passestu=$row['passestu'];
      $telfe=$row['telfe'];
      $emaile=$row['emaile'];
      $direccione=$row['direccione'];
      $distritoe=$row['distritoe'];
      $semestreeg=$row['semestreeg'];
      $labura=$row['labura'];
      $Sexo=$row['Sexo'];
      $labura=$row['labura'];
      $condicionestu=$row['condicionestu'];
      $cargoestu=$row['cargoestu'];
      $nombreempresaestud=$row['nombreempresaestud'];
      $tiempo=$row['tiempo'];
      $tipoempresaestud=$row['tipoempresaestud'];
      $remu=$row['remu'];
      $porqueestud=$row['porqueestud'];
      $razon=$row['razon'];
      $p1=$row['p1'];
      $p2=$row['p2'];
      $p3=$row['p3'];
      $p4=$row['p4'];
      $p5=$row['p5'];

    }
  }


  if (isset($_POST['actualizarsituacion'])) {

    $idestudiante=$_GET['idestudiante'];
    
    $nombrese=$_POST['nombrese'];
    $apellidose=$_POST['apellidose'];
    $numdoce=$_POST['numdoce'];
    $passestu=sha1($_POST['passestu']);
    $telfe=$_POST['telfe'];
    $emaile=$_POST['emaile'];
    $direccione=$_POST['direccione'];
    $distritoe=$_POST['distritoe'];
    $semestreeg=$_POST['semestreeg'];
    $labura=$_POST['labura'];
    $Sexo=$_POST['Sexo'];
    $labura=$_POST['labura'];
    $condicionestu=$_POST['condicionestu'];
    $cargoestu=$_POST['cargoestu'];
    $nombreempresaestud=$_POST['nombreempresaestud'];
    $tiempo=$_POST['tiempo'];
    $tipoempresaestud=$_POST['tipoempresaestud'];
    $remu=$_POST['remu'];
    $porqueestud=$_POST['porqueestud'];
    $razon=$_POST['razon'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p3=$_POST['p3'];
    $p4=$_POST['p4'];
    $p5=$_POST['p5'];
    $a=$_POST['fecha'];


    $sql="UPDATE estudiante SET nombrese='$nombrese',apellidose='$apellidose',numdoce='$numdoce',passestu='$passestu',telfe='$telfe',emaile='$emaile',direccione='$direccione',distritoe='$distritoe',semestreeg='$semestreeg',labura='$labura',resumene='$resumene',Sexo='$Sexo',condicionestu='$condicionestu',cargoestu='$cargoestu',nombreempresaestud='$nombreempresaestud',remu='$remu',porqueestud='$porqueestud',razon='$razon',p1='$p1',p2='$p2',p3='$p3',p4='$p4',p5='$p5',fecha='$a' WHERE idestudiante=$idestudiante;";
    
    mysqli_query($con,$sql);

    
  }


  ?>


    <div class="container-fluid px-2 px-md-6">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('img/banner_2.png');">
        <span class="mask  bg-info opacity-6"></span>
      </div>

        


        <div class="card card-body mx-3 mx-md-4 mt-n6">

          <form class="row g-3 p-5 text-center" action="Encuesta_egresado.php?idestudiante=<?php echo $_GET['idestudiante'];?>" method="post" enctype="multipart/form-data">  
            

            <div id="mostrarestudiante">

              <div class="row p-4">



                <div class="col-md-6">
                  <label for="nombre" class="form-label fw-bold">Nombres</label>
                  <input type="text" name="nombrese" class="form-control border-info p-2" value="<?php echo $nombrese?>" style="border:1px solid black;" id="nombre" placeholder="Ingrese Nombre ..." required>
                </div>

                <div class="col-md-6">
                  <label for="apellido" class="form-label fw-bold">Apellidos</label>
                  <input type="text" name="apellidose" class="form-control border-info p-2" value="<?php echo $apellidose?>" style="border:1px solid black;" id="apellido" placeholder="Ingrese Apellido ..." required>
                </div>

              </div>

              
                    
              <div class="row p-4">

                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label fw-bold">DNI</label>
                  <input type="text" name="numdoce" class="form-control border-info p-2" value="<?php echo $numdoce?>" style="border:1px solid black;" id="inputEmail4" placeholder="Nº documento" required>
                </div>

                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label fw-bold">Contraseña</label>
                  <input type="text" name="passestu" class="form-control border-info p-2" value="<?php echo $passestu?>" style="border:1px solid black;" id="inputEmail4" placeholder="Nº documento" required>
                </div>
                  

              </div>
              
              <div class="row p-4">
                <label for="inputAddress2" class="form-label fw-bold">Correo electrónico</label>
                <input type="email" name="emaile" class="form-control border-info p-2" value="<?php echo $emaile?>" style="border:1px solid black;" id="inputAddress2" placeholder="Ingrese Correo ..." required>
              </div>

              <div class="row p-4">
                <div class="col-md-4">
                  <label for="tel" class="form-label fw-bold">Teléfono</label>
                  <input type="text" name="telfe" class="form-control border-info p-2" value="<?php echo $telfe?>" style="border:1px solid black;" id="tel" placeholder="Ingrese Numero..." required>
                </div>
                      
                <div class="col-md-4">
                  <label for="dire" class="form-label fw-bold">Dirección</label>
                  <input type="text" name="direccione" class="form-control border-info p-2" value="<?php echo $direccione?>" style="border:1px solid black;" id="dir" placeholder="Ingrese Dirección..." required>
                </div>
                      
                <div class="col-md-4">
                    <label for="dis" class="form-label fw-bold">Distrito</label>
                    <input type="text" name="distritoe" class="form-control border-info p-2" value="<?php echo $distritoe?>" style="border:1px solid black;" id="dis" placeholder="Ingrese Distrito..." required>
                </div>
              </div>


              <div class="row p-4" id="egresado">

                <div class="col-md-4">
                  <label for="anio" class="form-label fw-bold">Año</label>
                  <input type="text" name="anioeg" class="form-control border-info p-2" value="<?php echo $anioeg?>" id="anio" style="border:1px solid black;" placeholder="Ingrese año de egreso ...">
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label fw-bold">Semestre</label>
                  <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="semestreeg">
                    <option Value="<?php echo $semestreeg?>"><?php echo $semestreeg?></option>
                    <option Value="I">I</option>
                    <option Value="II">II</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label fw-bold">Genero</label>
                  <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="Sexo">
                    <option Value="<?php echo $Sexo?>"><?php echo $Sexo?></option>
                    <option Value="Masculino">Masculino</option>
                    <option Value="Femenino">Femenino</option>
                  </select>
                </div>

              </div>

              <hr class="border border-info border-2 opacity-50">

              <div class="row p-4">

                <h3 class="text-center">Situación Laboral</h3>

                <div class="col-md-12">
                    <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="labura">
                      <option Value="<?php echo $labura?>"><?php echo $labura?></option>
                      <option Value="Si">Si</option>
                      <option Value="No">No</option>
                    </select>
                </div>

              </div>

              <div class="row" id="respuestasi">

                    <div class="col-md-6">
                      <label for="inputState" class="form-label fw-bold">Tipo Empresa</label>
                      <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="tipoempresaestud">
                        <option value="<?php echo $tipoempresaestud?>"><?php echo $tipoempresaestud?></option>
                        <option value="Privada">Privada</option>
                        <option value="Publica">Pública</option>
                        <option value="Propia">Propia</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputCity" class="form-label fw-bold">Nombre de la Empresa</label>
                      <input type="text" name="nombreempresaestud" value="<?php echo $nombreempresaestud?>" class="form-control border-info p-2" style="border:1px solid black;" id="inputCity" placeholder="Ingrese empresa ...">
                    </div>

                    <div class="col-md-6">
                      <label for="inputCity" class="form-label fw-bold">Cargo o Puesto</label>
                      <input type="text" name="cargoestu" value="<?php echo $cargoestu?>" class="form-control border-info p-2" style="border:1px solid black;" id="inputCity" placeholder="Ingrese su cargo ...">
                    </div>

                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">Condición laboral</label>
                        <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="condicionestu">
                          <option value="<?php echo $condicionestu?>"><?php echo $condicionestu?></option>
                          <option value="Formal">Formal</option>
                          <option value="Informal">Informal</option>
                        </select>
                    </div>
                        
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label fw-bold">Tiempo</label>
                      <input type="text" name="tiempo" class="form-control border-info p-2" value="<?php echo $tiempo?>" style="border:1px solid black;" id="inputCity" placeholder="Ingrese el tiempo ...">
                    </div>
        

                        
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">Remuneración</label>
                        <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="remu">
                          <option value="<?php echo $remu?>"><?php echo $remu?></option>
                          <option value="S/1025 - S/1500">S/1025 - S/1500</option>
                          <option value="S/1501 - S/2500">S/1501 - S/2500 </option>
                          <option value="S/2500 a mas">S/2500 a màs</option>
                        </select>
                    </div>

              </div>

              <div class="row" id="respuestano">


                        <div class="col-md-6">
                            <label for="inputState" class="form-label fw-bold">Motivo</label>
                            <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="porqueestud">
                              <option value="<?php echo $porqueestud?>"><?php echo $porqueestud?></option>
                              <option value="Se dedica a estudiar">Se dedica a estudiar</option>
                              <option value="No encuentro trabajo">No encuentro trabajo</option>
                              <option value="Problemas familiares">Problemas familiares</option>
                              <option value="Falta de experiencia">Falta de experiencia</option>
                              <option value="Otro">Otro</option>
                            </select>
                        </div>
        
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label fw-bold">Justificar</label>
                            <input type="text" name="razon" class="form-control border-info p-2" value="<?php echo $razon?>" style="border:1px solid black;" id="inputAddress" placeholder="...">
                        </div>

              </div>

            </div>

            <!----
            <div class="col-12 p-4">
              <button type="button" class="btn btn-primary" id="btnsgtsati" onclick="satisfacion();">Siguiente</button>
            </div> --->

            <hr class="border border-info border-2 opacity-50">




            <div class="row" id="satis">

              <h3>Satisfacción de Egresados</h3>

              <div class="row p-4" >

                  <h6>1.- ¿La carrera profesional que estudió lo ayudó/ le sirvió a insertarse laboralmente en la búsqueda de empleo?</h6>
                  <br><br>

                  <div class="col-md-12">
                    <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="p1">
                      <option Value="<?php echo $p1?>"><?php echo $p1?></option>
                      <option Value="Si">Si</option>
                      <option Value="No">No</option>
                    </select>
                  </div>

              </div>


              <div class="row p-4" >

                  <h6>2.- ¿Qué tan satisfecho se siente con la educación recibida?</h6>
                  <br><br>

                  <div class="col-md-12">
                    <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="p2">
                      <option Value="<?php echo $p2?>"><?php echo $p2?></option>
                      <option Value="Muy satisfecho">Muy satisfecho</option>
                      <option Value="Moderadamente satisfecho">Moderadamente satisfecho</option>
                      <option Value="Poco satisfecho">Poco satisfecho</option>
                      <option Value="Para nada satisfecho">Para nada satisfecho</option>
                    </select>
                  </div>

              </div>


              <div class="row p-4" >
                  
                  <h6>3.- ¿Qué tan satisfecho se siente con la calidad de enseñanza de los profesores?</h6>
                  <br><br>

                  <div class="col-md-12">
                    <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="p3">
                      <option Value="<?php echo $p3?>"><?php echo $p3?></option>
                      <option Value="Muy satisfecho">Muy satisfecho</option>
                      <option Value="Moderadamente satisfecho">Moderadamente satisfecho</option>
                      <option Value="Poco satisfecho">Poco satisfecho</option>
                      <option Value="Para nada satisfecho">Para nada satisfecho</option>
                    </select>
                  </div>


              </div>

              <div class="row p-4" >
              
              <h6>4.- Actualmente, ¿Recomendarías a un amigo o conocido estudiar en  IBP ?</h6>

                <br><br>

                <div class="col-md-12">
                  <select id="inputState" class="form-select border-info p-2" style="border:1px solid black;" name="p4">
                    <option Value="<?php echo $p4?>"><?php echo $p4?></option>
                    <option Value="Si">Si</option>
                    <option Value="No">No</option>
                  </select>
                </div>

                  
              </div>

              <div class="row p-4" >

                  <h6>5.- ¿Qué sugerencias haría usted, para mejorar la formación profesional de la carrera que estudió?</h6>
                  <br><br>
              
                  <div class="mb-3">
                      <textarea class="form-control border-info p-2" style="border:1px solid black;"name="p5" id="exampleFormControlTextarea1" rows="3"><?php echo $p5?></textarea>
                  </div>
              
              </div>





            </div>

            <div class="col-12 p-4">
              <button type="submit" class="btn btn-primary" id="guardar" name="actualizarsituacion"><b>Actualizar Datos</b></button>
            </div>

          </form>


        </div>



    </div>



   
<?php

include('includes/ppagina.php'); 

?>

