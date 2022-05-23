
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
        if(!empty($_POST['matricula']))
        {
            $mat=$_POST['matricula'];
            $mar=$_POST['marca'];
            $mod=$_POST['modelo'];
            $año=$_POST['año'];
            $colo=$_POST['color'];
            $num_m=$_POST['numero_motor'];
            $cil=$_POST['cilindrada'];
            $tip=$_POST['tipo_combustible'];
            // echo $nom." ".$ape;
        
            $ins=$con->query("insert into autos values ('$mat', '$mar', '$mod', '$año', '$colo', '$num_m', '$cil', '$tip')");
        
            if($ins)
                {
                    //echo "registro insertado";
                    echo "<script> alert('Auto Agregado') </script>";
    
                }
            else
                {
                    //echo "registro no";
                    echo "<script> alert('Error Al Agregar Auto. Verifique') </script>";
    
                }
        
                //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
                echo "<script> location.href='admi_autos.php' </script>";
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
        <title>Autos</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
            <link rel="stylesheet" href="estilos2.css">
            <link rel="icon" href="logo.ico">
    </head>

    <body>
        <div class="formu">
            <h1>Nuevo Auto</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div>
                    <label for="matricula">Matricula: </label>
                    <input type="text" name="matricula" placeholder="Matricula">
                </div>
                <div>
                    <label for="marca"> Marca: </label>
                    <input type="text" name="marca" placeholder="Marca">
                </div>
                <div>
                    <label for="modelo"> Modelo:</label>
                    <input type="text" name="modelo" placeholder="Modelo">
                </div>
                <div>
                    <label for="año">Año: </label>
                    <input type="number" name="año" placeholder="Año">
                </div>
                <div>
                    <label for="color">Color:</label>
                    <input type="text" name="color" placeholder="Color">
                </div>
                <div>
                    <label for="numero_motor">Numero De Motor: </label>
                    <input type="number" name="numero_motor" placeholder="Numero De Motor">
                </div>
                
                <div>
                    <label for="cilindrada">Cilindrada:</label>
                    <input type="number" name="cilindrada" placeholder="Cilindrada">
                </div>
                <div>
                    <label for="tipo_combustible">Tipo De Combustible:</label>
                    <input type="text" name="tipo_combustible" placeholder="Combustible">
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