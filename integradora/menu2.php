<?php
          session_start();
          if (!isset($_SESSION['user'])) 
          {
                header("location:login.php");
            }
          else 
          {
            $us=$_SESSION['user'];
            $ps=$_SESSION['pass'];
            $priv=$_SESSION['priv'];
            
            }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Menú</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
        <header class="header">
            <div class="contenedor" id="dos">
                <a href="admi_emple1.php">Administrar Empleados</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_cita1.php"> Administrar Citas</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_cli1.php"> Administrar Clientes</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_autos1.php"> Administrar Autos</a>
            </div>
            <div class="contenedor1" id="uno">
                <a class=""  href="login.php"> Cerrar sesion</a>
            </div>
        </header>
                        
    </body>
</html>