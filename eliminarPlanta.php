<?php
     $conexion=mysqli_connect("localhost","root","","savi");
     $id=$_GET['id'];
     
    
    //delete from produtos where id=$id
    $sql="delete from plantas where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql); 

    if($resultado){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminarón correctamente');
                location.assign('consultarPlanta.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se eliminarón correctamente');
                location.assign('consultarPlanta.php');
                </script>";
    }
?>