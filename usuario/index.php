<?php

$datos = $_REQUEST;

if ((isset($datos['nombre']))&&(isset($datos['apellido']))&&(isset($datos['correo']))&&(isset($datos['clave']))){
	require '../php/meta.php';

	$ingreso = Meta::Nuevo_Usuario($datos['nombre'], $datos['apellido'], $datos['correo'], $datos['clave']);

	$respuesta['estado'] = "Se ingreso correctamente la informacion";
}else{
	$respuesta['error'] = "Debe incluir su nombre, apellido, correo y clave obligatoriamente.";
}

echo json_encode($respuesta);

//     http://localhost/gps_app/usuario/?nombre=carlos&apellido=mino&correo=calolomino@gmail.com&clave=1234