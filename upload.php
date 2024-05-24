<?php

    session_start();

    $idestudiante=$_SESSION['idestudiante'];


// Comprobar si se ha cargado un archivo
if (isset($_FILES['archivo'])) {
    extract($_POST);

    // Definir la carpeta de destino
    $carpeta_destino = "cv/";

    // Obtener el nombre y la extensión del archivo
    $nombre_archivo = basename($_FILES["archivo"]["name"]);
    $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

    // Validar la extensión del archivo
    if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {


        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino . $nombre_archivo)) {
            // Insertar la información del archivo en la base de datos
            
            header('Content-type: text/html; charset=utf-8');
            
            require ('conexion.php');
        
            if ($con->set_charset('utf8') === false) {
              die('Error: ' .  $con->error);
            }
            
            $sql = "UPDATE estudiante set cves='$nombre_archivo' WHERE idestudiante=$idestudiante";
            $resultado = mysqli_query($con, $sql);
            if ($resultado) {
                echo "<script language='JavaScript'>
                alert('Archivo Subido');
                location.assign('perfil.php');
                </script>";
            } else {

                echo "<script language='JavaScript'>
                alert('Error al subir el archivo: ');
                location.assign('perfil.php');
                </script>";
            }
        } else {
            echo "<script language='JavaScript'>
            alert('Error al subir el archivo. ');
            location.assign('perfil.php');
            </script>";
            echo $idestudiante;
        }
    } else {
        echo "<script language='JavaScript'>
        alert('Solo se permiten archivos PDF, DOC y DOCX.');
        location.assign('perfil.php');
        </script>";
    }
}
