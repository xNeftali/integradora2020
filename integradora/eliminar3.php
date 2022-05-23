<?php 

    include 'conexion.php';

    $mat=$_REQUEST['matricula'];

    $eli=$con->query("delete from autos where matricula ='$mat'");

   if($eli)
        {
            //echo "registro eliminado";
            echo "<script> alert('Auto Eliminado') </script>";

        }
    else
        {
            //echo "registro no eliminado";
            echo "<script> alert('Error Al Eliminar Auto') </script>";

        }

        //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
        echo "<script> location.href='admi_autos.php' </script>";


?>