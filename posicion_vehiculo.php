<?php 

$datos = $_REQUEST;

require 'php/meta.php';

$posicion = Meta::Consulta_Unico("SELECT * FROM datos WHERE id_vehiculo=".$datos['id']." ORDER BY id_dato DESC LIMIT 1");
$respuesta = array();

if ($posicion['id_dato']!=''){
	$maps['latitud'] = $posicion['latitud'];
	$maps['longitud'] = $posicion['longitud'];
	$respuesta[] = $maps;
}

echo json_encode($respuesta);

