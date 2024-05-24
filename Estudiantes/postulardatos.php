<?php

    require('conexion.php');


    if (isset($_POST ['enviardatos'])) {

        $idestudiante=$_POST['idestudiante'];
        $puestot=$_POST['puestot'];
        $nombrerze=$_POST['nombrerze'];

        
    
        
        $querys="INSERT INTO postular(idestudiante,puestot,nombrerze) values ('$idestudiante','$puestot','$nombrerze')";
    
    
        $result=mysqli_query($con,$querys);
    
        if ($result) {
            header('Location:home.php');
        }else {
            echo "no guarda datos";
        }
    
    
    }

?>

