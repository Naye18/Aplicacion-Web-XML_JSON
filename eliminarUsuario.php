<?php
     $conexion=mysqli_connect("localhost","root","","savi");
     $id_usuario=$_GET['id_usuario'];
     
    
    //delete from produtos where id=$id
    $sql="delete from usuario where id_usuario='".$id_usuario."'";
    $resultado=mysqli_query($conexion,$sql); 

    if($resultado){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminarón correctamente');
                location.assign('consultarUsuario.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se eliminarón correctamente');
                location.assign('consultarUsuario.php');
                </script>";
    }
?>