<?php
include 'conexion.inc';

$consulta="SELECT nombre, id_estilo FROM grupo";
$consulta1="SELECT nombre FROM estilo WHERE id='".$id."'";
$data=array();
$i=0;

$query=mysql_query($consulta, $conexion);


while($rc=mysql_fetch_assoc($query)){

	$data[$i]['Nombre']=$rc['nombre'];
	$id=$rc['id_estilo'];
	$consulta1="SELECT nombre FROM estilo WHERE id='".$id."'";
	$query1=mysql_query($consulta1, $conexion);
	$rc1=mysql_fetch_assoc($query1);
	$data[$i]['Estilo']=$rc1['nombre']
	
	$i++;
}
echo json_encode($data);
?>