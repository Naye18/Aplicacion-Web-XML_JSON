<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "savi";
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8


$query = "SELECT * FROM usuario";
    $result = mysqli_query($conexion, $query);
	$cadena= mysql_XML($result);
	echo $cadena;

function mysql_XML($resultado)
{
	// creamos el documento XML		
	//header ("Content-type: text/xml");
	$contenido = '&lt; savi &gt;';
	
	while ($row = mysqli_fetch_array($resultado)) {
		$contenido.="&lt;usuarios&gt;";
		$contenido.="&lt;nombre&gt;".$row['nombre']."&lt;/nombre&gt;";
		$contenido.="&lt;apellidos&gt;".$row['apellidos']."&lt;/apellidos&gt;";
		$contenido.="&lt;edad&gt;".$row['edad'] ."&lt;/edad&gt;";
		$contenido.="&lt;sexo&gt;".$row['sexo']."&lt;/sexo&gt;";
		$contenido.="&lt;usuario&gt;".$row['usuario']."&lt;/usuario&gt;";
		$contenido.="&lt;contraseña&gt;".$row['contraseña']."&lt;/contraseña&gt;";
		$contenido.="&lt;/usuarios&gt;";		
	}

	$contenido.='&lt; /savi &gt;';
	//var_dump($contenido);
	echo $contenido;	
	return $contenido;
}

?>