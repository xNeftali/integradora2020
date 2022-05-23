<?php 


    include 'conexion.php';

    $id=$_REQUEST['id'];

    $sel=$con->query("select * from citas where id='$id'");

    if($fila=$sel->fetch_assoc())
    {}

    if($_SERVER['REQUEST_METHOD']=="POST")
     {
        if(!empty($_POST['nombre'])&&!empty($_POST['correo'])&&!empty($_POST['telefono']))
        {
            $id=$_POST['id'];
            $nom=$_POST['nombre'];
            $apep=$_POST['ape1'];
            $apem=$_POST['ape2'];
            $email=$_POST['correo'];
            $tel=$_POST['telefono'];
            $ser=$_POST['servicio'];
        
            $up=$con->query("update citas set nombre='$nom', ape1='$apep', ape2='$apem', correo='$email', telefono='$tel', servicio='$ser' where id = '$id' ");
        
           
            if($up)
                {
                    //echo "registro actualizado";
                    echo "<script> alert('Cita Actualizado') </script>";

                }
            else
                {
                    //echo "registro no actualizado";
                    echo "<script> alert('Error Al Actualizar Cita. Verifique, Por Favor') </script>";

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
                   <label for="ape1">Apellido Paterno: </label>
                   <input type="text" name="ape1" placeholder="" value="<?php echo $fila['ape1'] ?>">
               </div>
               <div>
                   <label for="ape2">Apellido Materno: </label>
                   <input type="text" name="ape2" placeholder="" value= " <?php echo $fila ['ape2'] ?>">
               </div>
               <div>
                   <label for="correo">Correo: </label>
                   <input type="text" name="correo" placeholder="" value= " <?php echo $fila ['correo'] ?>">
               </div>
               <div>
                   <label for="telefono">Telefono: </label>
                   <input type="text" name="telefono" placeholder="" value= " <?php echo $fila ['telefono'] ?>">
               </div>
               <div>
                   <label for="servicio">Servicio: </label>
                   <input type="text" name="servicio" placeholder="" value= " <?php echo $fila ['servicio'] ?>">
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