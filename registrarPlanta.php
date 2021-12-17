<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrar Plantas</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" href="caracte/css/estiloRegistrar.css">
  </head>
  <body background=images/fondo3.jpg> 
    <div id="container">
        <h2>REGISTRAR </h2>
      
        <form action="validarPlanta.php" method="post">
            <input type="" name="id" placeholder="ID PLANTA" required> <br>
            <input type="" name="nombre" placeholder="NOMBRE" required> <br>
            <input type="" name="precio_venta" placeholder="PRECIO DE VENTA" required><br>
            <input type="" name="dimenciones" placeholder="DIMENCIONES" required><br>
            <input type="" name="requerimientos" placeholder="REQUERIMIENTOS" required><br>
                <br>

            <button type="submit" value="Registrar">Registrar</button>
        </form>
    </div>
  </body>
</html>
