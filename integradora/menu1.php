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
            <div class="contenedor1" id="uno">
                <a href="empleados.php">Nuevo Empleado</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_emple.php">Administrar Empleados</a>
            </div>
            <div class="contenedor1" id="uno">
                <a href='citas.php'>Nueva Cita</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_cita.php"> Administrar Citas</a>
            </div>
            <div class="contenedor1" id="uno">
                <a href='clientes.php'>Nuevo Cliente</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_cli.php"> Administrar Cliente</a>
            </div>
            <div class="contenedor1" id="uno">
                <a href='autos.php'>Nuevo Auto</a>
            </div>
            <div class="contenedor" id="dos">
                <a href="admi_autos.php"> Administrar Autos</a>
            </div>
            <div class="contenedor1" id="uno">
                <a class=""  href="login.php"> Cerrar sesion</a>
            </div>
        </header>
                        
    </body>
</html>