<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu Usuario</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloRegistrar.css">
  </head>
  <body background=images/fondo3.jpg> 
  <div id="containe">
      <h2>MODIFICAR USUARIO</h2>
    <?php
    $conexion=mysqli_connect("localhost","root","","savi");
        if(isset($_POST['enviar'])){
            //Aqui entra cuando se presiona el boton 
            $id_usuario=$_POST['id_usuario'];
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $edad=$_POST['edad'];
            $sexo=$_POST['sexo'];
            $usuario=$_POST['usuario'];
            $contraseña=$_POST['contraseña'];
            //update productos
            $sql="update usuario set id_usuario='".$id_usuario."',nombre='".$nombre."',
            apellidos='".$apellidos."',edad='".$edad."',sexo='".$sexo."',usuario='".$usuario."',
            contraseña='".$contraseña."' where id_usuario='".$id_usuario."'";
            
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('consultarUsuario.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos NO se actualizaron correctamente');
                        location.assign('consultarUsuario.php');
                        </script>";
            }
            mysqli_close($conexion);

        }else{
            //Aqui entra si no se presiona el boton enviar
            $id_usuario=$_GET['id_usuario'];
            $sql="select * from usuario where id_usuario='$id_usuario'";
            $resultado=mysqli_query($conexion,$sql);    

            $mostrar=mysqli_fetch_assoc($resultado);
            $id_usuario=$mostrar["id_usuario"];
            $nombre=$mostrar["nombre"];
            $apellidos=$mostrar["apellidos"];
            $edad=$mostrar["edad"];
            $sexo=$mostrar["sexo"];
            $usuario=$mostrar["usuario"];
            $contraseña=$mostrar["contraseña"];

            mysqli_close($conexion);
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

        <input type="text" name="nombre" placeholder="NOMBRE" required value="<?php echo $nombre; ?>">
        <input type="text" name="apellidos" placeholder="APELLIDOS" required value="<?php echo $apellidos; ?>">
        <input type="text" name="edad" placeholder="EDAD" required value="<?php echo $edad; ?>">
        <input type="text" name="sexo" placeholder="SEXO" required value="<?php echo $sexo; ?>">
        <input type="text" name="usuario" placeholder="USUARIO" required value="<?php echo $usuario; ?>">
        <input type="text" name="contraseña" placeholder="CONTRASEÑA" required value="<?php echo $contraseña; ?>">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>"> <br>

       <button input type="submit" name="enviar" value="ACTUALIZAR">ACTUALIZAR</button> 
      
       <button input type="submit" name="regresar" value="REGRESAR">REGRESAR</button>


    </form>
    <?php
        }  if(isset($_POST['regresar'])){
            header("location:consultarUsuario.php");
        }
    ?>
</div>
  </body>
</html>