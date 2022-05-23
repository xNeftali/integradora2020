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
        <title>Administrar Citas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
        
       <div class="admi">
           <h1>Administrar Citas</h1>
           <div class="table-container">
                <table class="table">
                    <thead>
                        <th class="table_head">NO.</th>
                        <th class="table_head">NOMBRE</th>
                        <th class="table_head">APELLIDO PATERNO</th>
                        <th class="table_head">APELLIDO MATERNO</th>
                        <th class="table_head">CORREO</th>
                        <th class="table_head">TELEFONO</th>
                        <th class="table_head">SERVICIO</th>
                        <th class="table_head"></th>
                    </thead>
                    <?php
                        include 'conexion.php';

                        $sel=$con->query("select * from citas");

                        while($fila=$sel->fetch_assoc())
                        {
                    ?>
                    
                    
                        <tr>
                            <td class="table_data"> <?php echo $fila['id'] ?> </td>
                            <td class="table_data"> <?php echo $fila['nombre'] ?> </td>
                            <td class="table_data"> <?php echo $fila['ape1'] ?></td>
                            <td class="table_data"> <?php echo $fila['ape2'] ?> </td>
                            <td class="table_data"> <?php echo $fila['correo'] ?> </td>
                            <td class="table_data"> <?php echo $fila['telefono'] ?> </td>
                            <td class="table_data"> <?php echo $fila['servicio'] ?> </td>
                            <td class="table_data" colspan="2" >
                               <a class="btn_acciones" href="actualizar1.php?id= <?php echo $fila['id'] ?>"><img src="editar.png" alt=""></a>
                               <a class="btn_acciones" href="eliminar1.php?id= <?php echo $fila['id'] ?>"><img src="eliminar.png" alt=""></a>
                            </td>
                        </tr>      
                        
                    <?php
                        }
                    ?>
                </table>
           </div>
           <a class="enlace_menu1" href="menu1.php">Menú Principal</a>
       </div>
    </body>
</html>