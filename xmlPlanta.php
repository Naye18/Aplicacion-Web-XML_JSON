<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "savi";
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8


$query = "SELECT * FROM plantas";
    $result = mysqli_query($conexion, $query);
	$cadena= mysql_XML($result);
	echo $cadena;

function mysql_XML($resultado)
{
	// creamos el documento XML		
	//header ("Content-type: text/xml");
	$contenido = '&lt; savi &gt;';
	
	while ($row = mysqli_fetch_array($resultado)) {
		$contenido.="&lt;planta&gt;";
		$contenido.="&lt;nombre&gt;".$row['nombre']."&lt;/nombre&gt;";
		$contenido.="&lt;precio_venta&gt;".$row['precio_venta']."&lt;/precio_venta&gt;";
		$contenido.="&lt;dimenciones&gt;".$row['dimenciones'] ."&lt;/dimenciones&gt;";
		$contenido.="&lt;requerimientos&gt;".$row['requerimientos']."&lt;/requerimientos&gt;";
		$contenido.="&lt;/planta&gt;";		
	}

	$contenido.='&lt; /savi &gt;';
	//var_dump($contenido);
	echo $contenido;	
	return $contenido;
}

?>