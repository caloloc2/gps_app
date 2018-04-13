<?php

$datos = $_REQUEST;

if ((isset($datos['vehiculo']))&&(isset($datos['placa']))&&(isset($datos['color']))){
	require '../php/meta.php';

	$ingreso = Meta::Nuevo_Vehiculo($datos['vehiculo'], $datos['placa'], $datos['color']);

	$consulta = Meta::Consulta_Unico("SELECT * FROM vehiculos ORDER BY id_vehiculo DESC LIMIT 1");
	if ($consulta['id_vehiculo']!=''){
		$respuesta['estado'] = "Se ingreso correctamente la informacion. Su ID de vehiculo es ".$consulta['id_vehiculo'];
	}else{
		$respuesta['error'] = "Hubo un error al registrar la informacion";
	}
	
}else{
	$respuesta['error'] = "Debe incluir el vehiculo (nombre o marca), placa y color obligatoriamente.";
}

echo json_encode($respuesta);

//     http://localhost/gps_app/vehiculo/?vehiculo=Ford%20Eco&placa=PBB-6598&color=negro