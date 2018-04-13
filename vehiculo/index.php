<?php

$datos = $_REQUEST;

if ((isset($datos['vehiculo']))&&(isset($datos['placa']))&&(isset($datos['color']))){
	require '../php/meta.php';

	$ingreso = Meta::Nuevo_Vehiculo($datos['vehiculo'], $datos['placa'], $datos['color']);

	$respuesta['estado'] = "Se ingreso correctamente la informacion";
}else{
	$respuesta['error'] = "Debe incluir el vehiculo (nombre o marca), placa y color obligatoriamente.";
}

echo json_encode($respuesta);

//     http://localhost/gps_app/vehiculo/?vehiculo=Ford%20Eco&placa=PBB-6598&color=negro