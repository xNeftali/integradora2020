
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
        if(!empty($_POST['nombre'])&&!empty($_POST['apellido1'])&&!empty($_POST['apellido2'])&&!empty($_POST['telefono']))
        {
            $nom=$_POST['nombre'];
            $apep=$_POST['apellido1'];
            $apem=$_POST['apellido2'];
            $ed=$_POST['edad'];
            $cal=$_POST['calle'];
            $num=$_POST['numero'];
            $col=$_POST['colonia'];
            $tel=$_POST['telefono'];
            // echo $nom." ".$ape;
        
            $ins=$con->query("insert into empleados values (null, '$nom', '$apep', '$apem', '$ed', '$cal', '$num', '$col', '$tel')");
        
            if($ins)
                {
                    //echo "registro insertado";
                    echo "<script> alert('Empleado Agregado') </script>";
    
                }
            else
                {
                    //echo "registro no";
                    echo "<script> alert('Error Al Agregar Empleado. Verifique') </script>";
    
                }
        
                //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
                echo "<script> location.href='admi_emple.php' </script>";
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
        <title>Empleados</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
            <link rel="stylesheet" href="estilos2.css">
            <link rel="icon" href="logo.ico">
    </head>

    <body>
        <div class="formu">
            <h1>Nuevo Empleado</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div>
                    <label for="apellido1">Apellido Paterno: </label>
                    <input type="text" name="apellido1" placeholder="Paterno">
                </div>
                <div>
                    <label for="apellido2">Apellido Materno:</label>
                    <input type="text" name="apellido2" placeholder="Materno">
                </div>
                <div>
                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" placeholder="Edad">
                </div>
                <div>
                    <label for="calle">Calle:</label>
                    <input type="phone" name="calle" placeholder="Calle">
                </div>
                <div>
                    <label for="numero">Numero: </label>
                    <input type="text" name="numero" placeholder="#Numero">
                </div>
                
                <div>
                    <label for="colonia">Colonia:</label>
                    <input type="text" name="colonia" placeholder="Colonia">
                </div>
                <div>
                    <label for="telefono">Telefono:</label>
                    <input type="number" name="telefono" placeholder="Telefono">
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