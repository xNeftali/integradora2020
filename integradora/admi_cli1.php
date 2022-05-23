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
        <title>Administrar Clientes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
        
       <div class="admi">
           <h1>Administrar Clientes</h1>
           <div class="table-container">
                <table class="table">
                    <thead>
                        <th class="table_head">NO.</th>
                        <th class="table_head">NOMBRE</th>
                        <th class="table_head">APELLIDO PATERNO</th>
                        <th class="table_head">APELLIDO MATERNO</th>
                        <th class="table_head">EDAD</th>
                        <th class="table_head">CALLE</th>
                        <th class="table_head">NUMERO</th>
                        <th class="table_head">COLONIA</th>
                        <th class="table_head">TELEFONO</th>
                    </thead>
                    <?php
                        include 'conexion.php';

                        $sel=$con->query("select * from clientes");

                        while($fila=$sel->fetch_assoc())
                        {
                    ?>
                    
                    
                        <tr>
                            <td class="table_data"> <?php echo $fila['id'] ?> </td>
                            <td class="table_data"> <?php echo $fila['nombre'] ?> </td>
                            <td class="table_data"> <?php echo $fila['apellido1'] ?></td>
                            <td class="table_data"> <?php echo $fila['apellido2'] ?> </td>
                            <td class="table_data"> <?php echo $fila['edad'] ?> </td>
                            <td class="table_data"> <?php echo $fila['calle'] ?> </td>
                            <td class="table_data"> <?php echo $fila['numero'] ?> </td>
                            <td class="table_data"> <?php echo $fila['colonia'] ?> </td>
                            <td class="table_data"> <?php echo $fila['telefono'] ?> </td>
                        </tr>      
                        
                    <?php
                        }
                    ?>
                </table>
           </div>
           <a class="enlace_menu1" href="menu2.php">Menú Principal</a>
       </div>
    </body>
</html>