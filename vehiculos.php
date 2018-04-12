<?php 

$respuesta = array();
require 'php/meta.php';

$vehiculos = Meta::Consulta("SELECT * FROM vehiculos ORDER BY id_vehiculo ASC");

if (count($vehiculos)>0){
	foreach ($vehiculos as $linea) {
		$respuesta[] = $linea;
	}
}

echo json_encode($respuesta);

