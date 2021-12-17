<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultar Plantas</title>
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
      <h2 style="text-align:center">PLANTAS</h2>
      <br>
      <br>
    <table style="text-align:center" align="center" width="65%" cellspacing="0" cellpadding="6" bgcolor="DAFDCD" border="2" bordercolor="black">
        <tr>
            <td bgcolor="#32B814"><b>Opciones</b> </td>
            <td bgcolor="#32B814"><b>Id planta</b> </td>
            <td bgcolor="#32B814"><b>Nombre </b></td>
            <td bgcolor="#32B814"><b>Precio de venta</b></td>
            <td bgcolor="#32B814"><b>Dimenciones</b> </td>
            <td bgcolor="#32B814"><b>Requerimientos</b> </td>
            
        </tr>
        <?php
        $conexion=mysqli_connect("localhost","root","","savi");
            $sql="SELECT * from plantas";
            $result=mysqli_query ($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
            <td>  
            <button> <?php echo "<a href='modificarPlanta.php?id=".$mostrar['id']."'>EDITAR</a>"; ?></button>
                <button> <?php echo "<a href='eliminarPlanta.php?id=".$mostrar['id']."'
                    onclick='return confirmar()'>ELIMINAR</a>"; ?> </button>

            </td>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['precio_venta'] ?></td>
            <td><?php echo $mostrar['dimenciones'] ?></td>
            <td><?php echo $mostrar['requerimientos'] ?></td>   
    </tr>
    <?php
    }
    ?>
    </table>
  </body>
</html>

