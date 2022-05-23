<?php 


    include 'conexion.php';

    $id=$_REQUEST['id'];

    $sel=$con->query("select * from empleados where id='$id'");

    if($fila=$sel->fetch_assoc())
    {}

    if($_SERVER['REQUEST_METHOD']=="POST")
     {
        if(!empty($_POST['nombre'])&&!empty($_POST['apellido1'])&&!empty($_POST['apellido2'])&&!empty($_POST['telefono']))
        {
            $id=$_POST['id'];
            $nom=$_POST['nombre'];
            $apep=$_POST['apellido1'];
            $apem=$_POST['apellido2'];
            $ed=$_POST['edad'];
            $cal=$_POST['calle'];
            $num=$_POST['numero'];
            $col=$_POST['colonia'];
            $tel=$_POST['telefono'];
        
            $up=$con->query("update empleados set nombre='$nom', apellido1='$apep', apellido2='$apem', edad='$ed', calle='$cal', numero='$num', colonia='$col', telefono='$tel' where id = '$id' ");
        
           
            if($up)
                {
                    //echo "registro actualizado";
                    echo "<script> alert('Empleado Actualizado') </script>";

                }
            else
                {
                    //echo "registro no actualizado";
                    echo "<script> alert('Error Al Actualizar Empleado. Verifique, Por Favor') </script>";

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
        <title>Actualizar Cita</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
       <div class="formu">
          <h1>Actualizar Cita</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
               <div>
                   <label for="nombre">Nombre: </label>
                   <input type="text" name="nombre" placeholder="Nombre" value= " <?php echo $fila ['nombre'] ?>">
               </div>
               <div>
                   <label for="apellido1">Apellido Paterno: </label>
                   <input type="text" name="apellido1" placeholder="" value="<?php echo $fila['apellido1'] ?>">
               </div>
               <div>
                   <label for="apellido2">Apellido Materno: </label>
                   <input type="text" name="apellido2" placeholder="" value= " <?php echo $fila ['apellido2'] ?>">
               </div>
               <div>
                   <label for="edad">Edad: </label>
                   <input type="text" name="edad" placeholder="" value= " <?php echo $fila ['edad'] ?>">
               </div>
               <div>
                   <label for="calle">Calle: </label>
                   <input type="text" name="calle" placeholder="" value= " <?php echo $fila ['calle'] ?>">
               </div>
               <div>
                   <label for="numero">Numero: </label>
                   <input type="text" name="numero" placeholder="" value= " <?php echo $fila ['numero'] ?>">
               </div>
               <div>
                   <label for="colonia">Colonia: </label>
                   <input type="text" name="colonia" placeholder="" value= " <?php echo $fila ['colonia'] ?>">
               </div>
               <div>
                   <label for="telefono">Telefono: </label>
                   <input type="text" name="telefono" placeholder="" value= " <?php echo $fila ['telefono'] ?>">
               </div>
               <div class="botones">
                  <input type="hidden" name="id" value="<?php echo $fila ['id'] ?>">
                  <input type="submit" name="enviar" value="Guardar">
                  
               </div>
           </form>
           <a class="enlace_menu1" href="menu1.php">Menú Principal</a>
       </div>
    </body>
</html>