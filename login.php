<?php 

$datos = $_REQUEST;

$respuesta = [];

require 'php/meta.php';

$consulta = Meta::Consulta_Unico("SELECT * FROM usuarios WHERE ((correo='".$datos['correo']."') AND (clave='".$datos['pass']."'))");

if ($consulta['id_usuario']!=''){
	$login['estado'] = 'ok';
	$respuesta[] = $login;
}

echo json_encode($respuesta);

