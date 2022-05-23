<?php 


    include 'conexion.php';

    $mat=$_REQUEST['matricula'];

    $sel=$con->query("select * from autos where matricula='$mat'");

    if($fila=$sel->fetch_assoc())
    {}

    if($_SERVER['REQUEST_METHOD']=="POST")
     {
        
            $mat=$_POST['matricula'];
            $mar=$_POST['marca'];
            $mod=$_POST['modelo'];
            $año=$_POST['año'];
            $colo=$_POST['color'];
            $num_m=$_POST['numero_motor'];
            $cil=$_POST['cilindrada'];
            $tip=$_POST['tipo_combustible'];
        
            $up=$con->query("update autos set marca='$mar', modelo='$mod', año='$año', color='$colo', numero_motor='$num_m', cilindrada='$cil', tipo_combustible='$tip' where matricula = '$mat' ");
        
           
            if($up)
                {
                    //echo "registro actualizado";
                    echo "<script> alert('Auto Actualizado') </script>";

                }
            else
                {
                    //echo "registro no actualizado";
                    echo "<script> alert('Error Al Actualizar Auto. Verifique, Por Favor') </script>";

                }
        
                //echo "<br> <a href='administrar.php'> Ir a administrar los registros</a>";
                echo "<script> location.href='admi_autos.php' </script>";

        }
       
     
  
 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actualizar Auto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
       <div class="formu">
          <h1>Actualizar Auto</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
               <div>
                   <label for="marca">Marca: </label>
                   <input type="text" name="marca" placeholder="Nombre" value= " <?php echo $fila ['marca'] ?>">
               </div>
               <div>
                   <label for="modelo">Modelo: </label>
                   <input type="text" name="modelo" placeholder="" value="<?php echo $fila['modelo'] ?>">
               </div>
               <div>
                   <label for="año"> Año: </label>
                   <input type="text" name="año" placeholder="" value= " <?php echo $fila ['año'] ?>">
               </div>
               <div>
                   <label for="color">Color: </label>
                   <input type="text" name="color" placeholder="" value= " <?php echo $fila ['color'] ?>">
               </div>
               <div>
                   <label for="numero_motor">Numero De Motor: </label>
                   <input type="text" name="numero_motor" placeholder="" value="<?php echo $fila ['numero_motor'] ?>">
               </div>
               <div>
                   <label for="cilindrada">Cilindrada: </label>
                   <input type="text" name="cilindrada" placeholder="" value= " <?php echo $fila ['cilindrada'] ?>">
               </div>
               <div>
                   <label for="tipo_combustible">Tipo De Combustible: </label>
                   <input type="text" name="tipo_combustible" placeholder="" value= " <?php echo $fila ['tipo_combustible'] ?>">
               </div>
               <div class="botones">
                  <input type="hidden" name="matricula" value="<?php echo $fila ['matricula'] ?>">
                  <input type="submit" name="enviar" value="Guardar">
                  
               </div>
           </form>
           <a class="enlace_menu1" href="menu1.php">Menú Principal</a>
       </div>
    </body>
</html>