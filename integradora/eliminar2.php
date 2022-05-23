<?php 

    include 'conexion.php';

    $id=$_REQUEST['id'];

    $eli=$con->query("delete from empleados where id ='$id'");

   if($eli)
        {
            //echo "registro eliminado";
            echo "<script> alert('Empleado Eliminado') </script>";

        }
    else
        {
            //echo "registro no eliminado";
            echo "<script> alert('Error Al Eliminar Empleado') </script>";

        }

        //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
        echo "<script> location.href='admi_emple.php' </script>";


?>