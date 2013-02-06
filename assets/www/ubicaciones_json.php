<?php
include 'conexion.inc';

$consulta="SELECT nombre, latitud, longitud FROM ubicacion";
$data=array();
$i=0;

$query=mysql_query($consulta, $conexion);

while($rc=mysql_fetch_assoc($query)){

	$data[$i]['Nombre']=$rc['Nombre'];
	$data[$i]['Latitud']=$rc['Latitud'];
	$data[$i]['Logitud']=$rc['edad'];
	$i++;
}
echo json_encode($data);
?>