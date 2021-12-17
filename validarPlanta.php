<?php
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio_venta=$_POST['precio_venta'];
$dimenciones=$_POST['dimenciones'];
$requerimientos=$_POST['requerimientos'];
$conexion=mysqli_connect("localhost","root","","savi");
$insertar="INSERT INTO plantas( id, nombre, precio_venta, dimenciones, requerimientos) 
VALUES ( '$id','$nombre','$precio_venta', '$dimenciones', '$requerimientos')";
//buscamos los datos si es que existen 
$verifica_planta = mysqli_query($conexion, "SELECT * FROM plantas where id='$id'");

//se guardara
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo '<script> 
    alert("Error"); 
    window.history.go(-1);
    </script>'; //muestra la alerta
    exit;
}else{
    echo '<script> 
    alert("Registrado con éxito"); 
    window.history.go(-1);
    </script>'; //muestra la alerta
    exit;
}
mysqli_close($conexion);
?>