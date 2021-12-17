<?php
$numero_usario=$_POST['numero_usuario'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$conexion=mysqli_connect("localhost","root","","savi");
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