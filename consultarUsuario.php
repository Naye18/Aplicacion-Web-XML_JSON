<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultar Usuario</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro?, se eliminán los datos');
        }
    </script>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloConsultarUsuario.css">
  </head>
  <body background=images/fondo3.jpg>
    <div id="container"> 
    <br>
      <h2 style="text-align:center">USUARIOS</h2>
      <br>
      <br>
    <table style="text-align:center" align="center" width="65%" cellspacing="0" cellpadding="6" bgcolor="DAFDCD" border="2" bordercolor="black">
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <tr>
            <td bgcolor="#32B814" ><b>Opciones</b> </td>
            <td bgcolor="#32B814"><b>Numero de Usuario</b> </td>
            <td bgcolor="#32B814"><b>Nombre</b></td>
            <td bgcolor="#32B814"><b>Apellidos</b> </td>
            <td bgcolor="#32B814"><b>Edad</b> </td>
            <td bgcolor="#32B814"><b>Sexo</b> </td>
            <td bgcolor="#32B814"><b>Usuario</b> </td>
            <td bgcolor="#32B814"><b>Contraseña</b> </td>
            
        </tr>
        <?php
        $conexion=mysqli_connect("localhost","root","","savi");
            $sql="SELECT * from usuario";
            $result=mysqli_query ($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
            <td>  
                <button> <?php echo "<a href='modificarUsuario.php?id_usuario=".$mostrar['id_usuario']."'>EDITAR</a>"; ?></button>
                <button> <?php echo "<a href='eliminarUsuario.php?id_usuario=".$mostrar['id_usuario']."'
                    onclick='return confirmar()'>ELIMINAR</a>"; ?> </button>

            </td>
            <td ><?php echo $mostrar['id_usuario'] ?></td>
            <td ><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellidos'] ?></td>
            <td><?php echo $mostrar['edad'] ?></td>
            <td><?php echo $mostrar['sexo'] ?></td>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['contraseña'] ?></td>
            
    </tr>
    <?php
    }
    ?>
    </table> <br> <br>
        

<?php
  if(isset($_POST['registrar'])){
    header("location:registrarUsuario.html");
  }if(isset($_POST['regresar'])){
    header("location:menuAdministrador.html");
  }
?>
      </div> 
  </body>
</html>

