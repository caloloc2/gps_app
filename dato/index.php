<?php

$datos = $_REQUEST;

if ((isset($datos['latitud']))&&(isset($datos['latitud']))&&(isset($datos['id']))){
	if ((!empty($datos['id']))&&($datos['id']>0)){
		if ((is_numeric($datos['latitud']))&&(is_numeric($datos['longitud']))){
			$fecha = date('Y-m-d');
			$hora = date('H:i:s');
			require '../php/meta.php';

			$ingreso = Meta::Nuevo_Dato($datos['id'], $datos['latitud'], $datos['longitud'], $fecha, $hora);

			$respuesta['estado'] = "Se ingreso correctamente la informacion";
		}else{
			$respuesta['error'] = "Los valores deben ser numericos.";	
		}	
	}else{
		$respuesta['error'] = "Debe especificar un id de vehiculo valido";	
	}
}else{
	$respuesta['error'] = "Debe incluir la latitud y longitud y el id del vehiculo";
}

echo json_encode($respuesta);

//     http://localhost/gps_app/dato/?latitud=-0.4654&longitud=-78.321654&id=5