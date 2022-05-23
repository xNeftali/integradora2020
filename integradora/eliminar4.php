<?php 

    include 'conexion.php';

    $id=$_REQUEST['id'];

    $eli=$con->query("delete from clientes where id ='$id'");

   if($eli)
        {
            //echo "registro eliminado";
            echo "<script> alert('Cliente Eliminado') </script>";

        }
    else
        {
            //echo "registro no eliminado";
            echo "<script> alert('Error Al Eliminar Cliente') </script>";

        }

        //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
        echo "<script> location.href='admi_cli.php' </script>";


?>