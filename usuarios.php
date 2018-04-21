<?php 

$respuesta = array();
require 'php/meta.php';

$usuarios = Meta::Consulta("SELECT * FROM usuarios ORDER BY id_usuario ASC");

if (count($usuarios)>0){
	foreach ($usuarios as $linea) {
		$respuesta[] = $linea;
	}
}

echo json_encode($respuesta);

