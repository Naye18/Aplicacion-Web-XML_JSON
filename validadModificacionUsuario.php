<?php
$numero_usario=$_POST['numero_usuario'];
$campo_modificar=$_POST['campo_modificar'];

$conexion=mysqli_connect("localhost","root","","bd");
$insertar="INSERT INTO usuario( id_usuario, nombre, apellidos, edad, sexo, usuario, contraseña) 
VALUES ( '$numero_usario','$nombre', '$apellidos','$edad', '$sexo', '$usuario', '$contraseña')";
//buscamos los datos si es que existen 

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