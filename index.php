<?php 

require 'php/meta.php';

/*$nombre = "Carlos";
$apellido = "Mino";
$correo = "calolomino@gmail.com";
$clave = "mica02";
$nuevo_usuario = Meta::Nuevo_Usuario($nombre, $apellido, $correo, $clave);*/

$id_vehiculo = 2;
$latitud = -0.222177;
$longitud = -78.509711;
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$nuevo_dato = Meta::Nuevo_Dato($id_vehiculo, $latitud, $longitud, $fecha, $hora);

/*$vehiculo = 'Eco-Sport';
$placa = 'PBB-1234';
$color = 'Beige';
$nuevo_vehiculo = Meta::Nuevo_Vehiculo($vehiculo, $placa, $color);*/

echo 'ok';