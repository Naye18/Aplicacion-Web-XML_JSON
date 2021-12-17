<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modificar Planta</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloRegistrar.css">
  </head>
  <body background=images/fondo3.jpg> 
  <div id="containe">
      <h2>MODIFICAR PLANTA</h2>
    <?php
    $conexion=mysqli_connect("localhost","root","","savi");
        if(isset($_POST['enviar'])){
            //Aqui entra cuando se presiona el boton 
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $precio_venta=$_POST['precio_venta'];
            $dimenciones=$_POST['dimenciones'];
            $requerimientos=$_POST['requerimientos'];
            //update plantas
            $sql="update plantas set id='".$id."',nombre='".$nombre."',
            precio_venta='".$precio_venta."',dimenciones='".$dimenciones."',
            requerimientos='".$requerimientos."'where id='".$id."'";
            
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('consultarPlanta.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos NO se actualizaron correctamente');
                        location.assign('consultarPlanta.php');
                        </script>";
            }
            mysqli_close($conexion);

        }else{
            //Aqui entra si no se presiona el boton enviar
            $id=$_GET['id'];
            $sql="select * from plantas where id='$id'";
            $resultado=mysqli_query($conexion,$sql);    

            $mostrar=mysqli_fetch_assoc($resultado);
            $id=$mostrar["id"];
            $nombre=$mostrar["nombre"];
            $precio_venta=$mostrar["precio_venta"];
            $dimenciones=$mostrar["dimenciones"];
            $requerimientos=$mostrar["requerimientos"];

            mysqli_close($conexion);
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

        <input type="text" name="nombre" placeholder="NOMBRE" required value="<?php echo $nombre; ?>">
        <input type="text" name="precio_venta" placeholder="PRECIO DE VENTA" required value="<?php echo $precio_venta; ?>">
        <input type="text" name="dimenciones" placeholder="DIMENCIONES" required value="<?php echo $dimenciones; ?>">
        <input type="text" name="requerimientos" placeholder="REQUERIMIENTOS" required value="<?php echo $requerimientos; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <br>

       <button input type="submit" name="enviar" value="ACTUALIZAR">ACTUALIZAR</button> 
      
       <button input type="submit" name="regresar" value="REGRESAR">REGRESAR</button>


    </form>
    <?php
        }  if(isset($_POST['regresar'])){
            header("location:consultarPlanta.php");
        }
    ?>
</div>
  </body>
</html>