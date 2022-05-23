<?php
  session_start();
  if (isset($_SESSION)) {
    session_destroy();
  }
 

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $us=$_POST['nombre'];
    $ps=$_POST['pass'];

    require_once("conexion.php");

    $consulta="select username, password, privilegio from usuarios where username='$us' and password='$ps'";
    //ejecutar la consulta
    $query=mysqli_query($con,$consulta) or die("Error al ejecutar la consulta");
    
    if($columna=mysqli_fetch_array($query)) 
     {
       $priv=$columna['privilegio'];
     }

    if (mysqli_num_rows($query)>0)
    {
        session_start();
        $_SESSION['user']=$us;
        $_SESSION['pass']=$ps;
       
        

        if ($priv=="admin"){
          $_SESSION['priv']="admin";
          echo "<script> alert('Accedio De Forma Exitosa');
                         location.href='menu1.php'; 
               </script> ";}
        else {if($priv=="estandar"){
          $_SESSION['priv']="estandar";
       
          echo "<script> alert('Accedio De Forma Exitosa');
                         location.href='menu2.php'; 
               </script> ";}}
        
          //header('Location: menu.php');

    }
    else
     {
       echo "<script>
              window.alert('Usuario y/o Contraseña Incorrectas, Intente De Nuevo.');
              window.location.href='login.php';
            </script> ";   
     }
     
  }
  
?>
<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">	
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos.css">
   <link rel="icon" href="logo.ico">
   <title>Sesion</title>

  </head>
  <body class="ini">
      <div class=iniiciar <ul class="iniciar">
            <li>
                <a href="index.html" target="black">
                    <img src="home.png" alt height="50" width="60">
                </a>
            </li>
            </ul>
        </div>

    <div class="contenedor1">
      <div class="titulo"><h5> Inicio De Sesión </h5></div>
            <!-- <form action="comprueba.php" method="post"> -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div>
                  <label for="nombre"></label>
                  <input class="controls" type="text" name="nombre"  required placeholder="Usuario">
                </div>
                <div>
                  <label for="pass"></label>
                  <input class="controls" type="password" name="pass" required placeholder="*******">
                </div>
                <div class="botones">
                  <input class="boton" type="submit" name="enviar" value="LOGIN" >
                </div>
            </form>
    </div>
  </body>
</html>