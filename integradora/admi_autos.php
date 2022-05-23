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
        <title>Administrar Autos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=3,minimum-scale=1">
        <link rel="stylesheet" href="estilos2.css">
        <link rel="icon" href="logo.ico">
    </head>
    <body>
        
       <div class="admi">
           <h1>Administrar Autos</h1>
           <div class="table-container">
                <table class="table">
                    <thead>
                        <th class="table_head">MATRICULA</th>
                        <th class="table_head">MARCA</th>
                        <th class="table_head">MODELO</th>
                        <th class="table_head">AÑO</th>
                        <th class="table_head">COLOR</th>
                        <th class="table_head">NUM. MOTOR</th>
                        <th class="table_head">CILINDRADA</th>
                        <th class="table_head">COMBUSTIBLE</th>
                        <th class="table_head"></th>
                    </thead>
                    <?php
                        include 'conexion.php';

                        $sel=$con->query("select * from autos");

                        while($fila=$sel->fetch_assoc())
                        {
                    ?>
                    
                    
                        <tr>
                            <td class="table_data"> <?php echo $fila['matricula'] ?> </td>
                            <td class="table_data"> <?php echo $fila['marca'] ?> </td>
                            <td class="table_data"> <?php echo $fila['modelo'] ?></td>
                            <td class="table_data"> <?php echo $fila['año'] ?> </td>
                            <td class="table_data"> <?php echo $fila['color'] ?> </td>
                            <td class="table_data"> <?php echo $fila['numero_motor'] ?> </td>
                            <td class="table_data"> <?php echo $fila['cilindrada'] ?> </td>
                            <td class="table_data"> <?php echo $fila['tipo_combustible'] ?> </td>
                            <td class="table_data" colspan="2" >
                               <a class="btn_acciones" href="actualizar3.php?matricula=<?php echo $fila['matricula'] ?>"><img src="editar.png" alt=""></a>
                               <a class="btn_acciones" href="eliminar3.php?matricula=<?php echo $fila['matricula'] ?>"><img src="eliminar.png" alt=""></a>
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