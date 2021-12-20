<?php

include 'conexiondb.php';

$conexion = conexion_db();

$servicio = $_POST['servicio'];
$ven_1 = $_POST['ven_1'];
$ven_2 = $_POST['ven_2'];
$importe = $_POST['importe'];
$pagado = $_POST['pagado'];

//Reemplazo el valor importe que viene con coma a punto para poder guardarlo en mysql
$var = $importe;
$number = (string)$var;
$format_number = str_replace(',', '.', $number);


$conexion->query("INSERT INTO servicios (`servicio`, `1er_vto`, `2do_vto`, `importe`, `pagado`) VALUES ( '$servicio' , '$ven_1', '$ven_2', '$format_number', '$pagado')");

header('Location:dashboard.php');

?>