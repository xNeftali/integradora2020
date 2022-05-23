
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
      
    include 'conexion.php';

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        if(!empty($_POST['nombre'])&&!empty($_POST['ape1'])&&!empty($_POST['ape2'])&&!empty($_POST['telefono']))
        {
            $nom=$_POST['nombre'];
            $apep=$_POST['ape1'];
            $apem=$_POST['ape2'];
            $email=$_POST['correo'];
            $tel=$_POST['telefono'];
            $ser=$_POST['servicio'];
        
            // echo $nom." ".$ape;
        
            $ins=$con->query("insert into citas values (null, '$nom', '$apep', '$apem', '$email', '$tel', '$ser')");
        
            if($ins)
                {
                    //echo "registro insertado";
                    echo "<script> alert('Cita Agregada') </script>";
    
                }
            else
                {
                    //echo "registro no";
                    echo "<script> alert('Error Al Agregar Cita. Verifique') </script>";
    
                }
        
                //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
                echo "<script> location.href='admi_cita.php' </script>";
        }
        else
        {
            echo "<script> alert('Faltan Datos. Verifique, Por Favor') </script>";

        }
    }
 

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Cita</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
            <link rel="stylesheet" href="estilos2.css">
            <link rel="icon" href="logo.ico">
    </head>

    <body>
        <div class="formu">
            <h1>Nueva Cita</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div>
                    <label for="ape1">Apellido Paterno: </label>
                    <input type="text" name="ape1" placeholder="Paterno">
                </div>
                <div>
                    <label for="ape2">Apellido Materno:</label>
                    <input type="text" name="ape2" placeholder="Materno">
                </div>
                <div>
                    <label for="correo">Correo: </label>
                    <input type="email" name="correo" placeholder="Correo Electronico">
                </div>
                <div>
                    <label for="telefono">Telefono:</label>
                    <input type="phone" name="telefono" placeholder="Telefono">
                </div>
                <div>
                    <label for="servicio">Servicio:</label>
                    <input type="text" name="servicio" placeholder="Servicio">
                </div>
                <div class="botones">
                    <input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="borrar" value="Borrar">
                </div>
            </form>
            <a class="enlace_menu1"  href="menu1.php">Menú Principal</a>
        </div>
    </body>

</html>